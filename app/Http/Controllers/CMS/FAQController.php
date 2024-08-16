<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\FAQ\FaqRequest;
use App\Models\FAQ;
use App\Repositories\FAQ\FAQInterface;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    private $faqRepository;

    public function __construct(FAQInterface $faqRepository)
    {
        $this->faqRepository = $faqRepository;
    }

    public function index()
    {
        $datatableRoute= route('cms.faq.datatable');
        return view('cms.pages.faq.index', compact('datatableRoute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(FaqRequest $request)
    {
        $data = $request->all();
        $result = $this->faqRepository->create($data);
        if ($result['success']) {
            return redirect()->route('cms.faq.index')->with('message', $result['message']);
        } else {
            return redirect()->back()>with('message', $result['message']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(FaqRequest $request)
    {
        $data = $request->all();
        $result =  $this->faqRepository->update($data);
        if ($result['success']) {
            return redirect()->route('cms.faq.index')->with('message', $result['message']);
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
            $faq = FAQ::find($id);
            return view('cms.pages.faq.form', compact('faq'));
        }
        return view('cms.pages.faq.form');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->faqRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.faq.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->faqRepository->datatable();
    }
}
