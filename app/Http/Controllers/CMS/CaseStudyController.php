<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseStudy\CaseStudyRequest;
use App\Models\CaseStudy;
use App\Repositories\CaseStudy\CaseStudyInterface;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    private $caseStudyRepository;

    public function __construct(CaseStudyInterface $caseStudyRepository)
    {
        $this->caseStudyRepository = $caseStudyRepository;
    }

    public function index()
    {
        $datatableRoute= route('cms.casestudy.datatable');
        return view('cms.pages.casestudy.index', compact('datatableRoute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CaseStudyRequest $request)
    {
        $data = $request->all();
        $result = $this->caseStudyRepository->create($data);
        if ($result['success']) {
            return redirect()->route('cms.casestudy.index')->with('message', $result['message']);
        } else {
            return redirect()->back()>with('message', $result['message']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(CaseStudyRequest $request)
    {
        $data = $request->all();
        $result =  $this->caseStudyRepository->update($data);
        if ($result['success']) {
            return redirect()->route('cms.casestudy.index')->with('message', $result['message']);
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
            $caseStudy = CaseStudy::find($id);
            return view('cms.pages.casestudy.form', compact('caseStudy'));
        }
        return view('cms.pages.casestudy.form');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->caseStudyRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.casestudy.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->caseStudyRepository->datatable();
    }
}
