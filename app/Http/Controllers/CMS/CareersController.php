<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Careers\CareersRequest;
use App\Models\Careers;
use App\Repositories\Careers\CareersInterface;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    private $careersRepository;

    public function __construct(CareersInterface $careersRepository)
    {
        $this->careersRepository = $careersRepository;
    }

    public function index()
    {
        $datatableRoute= route('cms.careers.datatable');
        return view('cms.pages.careers.index', compact('datatableRoute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CareersRequest $request)
    {
        $data = $request->all();
        $result = $this->careersRepository->create($data);
        if ($result['success']) {
            return redirect()->route('cms.careers.index')->with('message', $result['message']);
        } else {
            return redirect()->back()>with('message', $result['message']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(CareersRequest $request)
    {
        $data = $request->all();
        $result =  $this->careersRepository->update($data);
        if ($result['success']) {
            return redirect()->route('cms.careers.index')->with('message', $result['message']);
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
            $careers = Careers::find($id);
            $location = Careers::LOCATION_NAMES;
            $department = Careers::DEPARTMENT_NAMES;
            return view('cms.pages.careers.form', compact('careers','department','location'));
        }  
        $location = Careers::LOCATION_NAMES;
        $department = Careers::DEPARTMENT_NAMES;
        return view('cms.pages.careers.form',compact('department','location')); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->careersRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.careers.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->careersRepository->datatable();
    }

}
