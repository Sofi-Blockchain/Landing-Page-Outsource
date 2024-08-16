<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Partner\PartnerRequest;
use App\Models\Partner;
use App\Repositories\Partner\PartnerInterface;

class PartnerController extends Controller
{
    private $partnerRepository;

    public function __construct(PartnerInterface $partnerRepository)
    {
        $this->partnerRepository = $partnerRepository;
    }

    /**
     * Display a listing of the resource
     */
    public function index()
    {
        $datatableRoute= route('cms.partner.datatable');
        return view('cms.pages.partner.index', compact('datatableRoute'));
    }

    /**
     * Create resource from storage.
     */
    public function create(PartnerRequest $request)
    {
        $data = $request->all();
        $result = $this->partnerRepository->create($data);
        if ($result['success']) {
            return redirect()->route('cms.partner.index')->with('message', $result['message']);
        } else {
            return redirect()->back()>with('message', $result['message']);
        }
    }

    /**
     * Update the specified resource from storage.
     */
    public function update(PartnerRequest $request)
    {
        $data = $request->all();
        $result =  $this->partnerRepository->update($data);
        if ($result['success']) {
            return redirect()->route('cms.partner.index')->with('message', $result['message']);
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
            $partner = Partner::find($id);
            return view('cms.pages.partner.form', compact('partner'));
        }
        return view('cms.pages.partner.form');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->partnerRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.partner.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->partnerRepository->datatable();
    }
}
