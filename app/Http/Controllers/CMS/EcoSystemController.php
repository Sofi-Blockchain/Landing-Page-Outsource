<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\EcoSystem\EcoSystemRequest;
use App\Models\EcoSystem;
use App\Models\Partner;
use App\Repositories\EcoSystem\EcoSystemInterface;
use Illuminate\Http\Request;

class EcoSystemController extends Controller
{
    private $ecoSystemRepository;

    public function __construct(EcoSystemInterface $ecoSystemRepository)
    {
        $this->ecoSystemRepository = $ecoSystemRepository;
    }

    public function index()
    {
        $datatableRoute= route('cms.ecosystem.datatable');
        return view('cms.pages.ecosystem.index', compact('datatableRoute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(EcoSystemRequest $request)
    {
        $data = $request->all();
        $result = $this->ecoSystemRepository->create($data);
        if ($result['success']) {
            return redirect()->route('cms.ecosystem.index')->with('message', $result['message']);
        } else {
            return redirect()->back()>with('message', $result['message']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(EcoSystemRequest $request)
    {
        $data = $request->all();
        $result =  $this->ecoSystemRepository->update($data);
        if ($result['success']) {
            return redirect()->route('cms.ecosystem.index')->with('message', $result['message']);
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
            $ecoSystem = EcoSystem::find($id);
            $category = EcoSystem::CATEGORY_NAMES;
            $partners = Partner::get();
            return view('cms.pages.ecosystem.form', compact('ecoSystem','category','partners'));
        }
        $category = EcoSystem::CATEGORY_NAMES;
        $partners = Partner::get();
        return view('cms.pages.ecosystem.form', compact('category','partners')); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->ecoSystemRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.ecosystem.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->ecoSystemRepository->datatable();
    }
}
