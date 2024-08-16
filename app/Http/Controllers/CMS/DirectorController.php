<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Director\CreateRequest;
use App\Http\Requests\Director\DirectorRequest;
use App\Http\Requests\Director\UpdateRequest;
use App\Models\Director;
use App\Repositories\Director\DirectorInterface;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    private $directorRepository;

    public function __construct(DirectorInterface $directorRepository)
    {
        $this->directorRepository = $directorRepository;
    }

    public function index()
    {
        $datatableRoute= route('cms.director.datatable');
        return view('cms.pages.director.index', compact('datatableRoute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(DirectorRequest $request)
    {
        $data = $request->all();
        $result = $this->directorRepository->create($data);
        if ($result['success']) {
            return redirect()->route('cms.director.index')->with('message', $result['message']);
        } else {
            return redirect()->back()>with('message', $result['message']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(DirectorRequest $request)
    {
        $data = $request->all();
        $result =  $this->directorRepository->update($data);
        if ($result['success']) {
            return redirect()->route('cms.director.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    /**
     *
     */
    public function form($id = null)
    {
        if ($id) {
            $director = Director::find($id);
            return view('cms.pages.director.form', compact('director'));
        }
        return view('cms.pages.director.form');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->directorRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.director.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->directorRepository->datatable();
    }
}
