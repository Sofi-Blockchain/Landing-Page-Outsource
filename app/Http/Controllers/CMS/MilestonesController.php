<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\MilesStone\MilesStoneRequest;
use App\Models\MilesStone;
use App\Repositories\MilesStone\MilesStoneInterface;
use Illuminate\Http\Request;

class MilestonesController extends Controller
{
    private $milesStoneRepository;

    public function __construct(MilesStoneInterface $milesStoneRepository)
    {
        $this->milesStoneRepository = $milesStoneRepository;
    }

    /**
     * Display a listing of the resource
     */
    public function index()
    {
        $datatableRoute= route('cms.milesstones.datatable');
        return view('cms.pages.milesstone.index', compact('datatableRoute'));
    }

    /**
     * Create resource from storage.
     */
    public function create(MilesStoneRequest $request)
    {
        $data = $request->all();
        $result = $this->milesStoneRepository->create($data);
        if ($result['success']) {
            return redirect()->route('cms.milesstones.index')->with('message', $result['message']);
        } else {
            return redirect()->back()>with('message', $result['message']);
        }
    }

    /**
     * Update the specified resource from storage.
     */
    public function update(MilesStoneRequest $request)
    {
        $data = $request->all();
        $result =  $this->milesStoneRepository->update($data);
        if ($result['success']) {
            return redirect()->route('cms.milesstones.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    /**
     *Show the form for creating a new resource.
     */
    public function form($id = null)
    {
        if ($id) {
            $milesStone = MilesStone::find($id);
            return view('cms.pages.milesstone.form', compact('milesStone'));
        }
        return view('cms.pages.milesstone.form');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->milesStoneRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.milesstones.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->milesStoneRepository->datatable();
    }
}
