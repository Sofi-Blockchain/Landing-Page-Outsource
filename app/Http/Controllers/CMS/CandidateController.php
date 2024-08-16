<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Repositories\Candidate\CandidateInterface;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    private $candidateRepository;

    public function __construct(CandidateInterface $candidateRepository)
    {
        $this->candidateRepository = $candidateRepository;
    }

    public function index()
    {
        $datatableRoute= route('cms.candidate.datatable');
        return view('cms.pages.candidate.index', compact('datatableRoute'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->candidateRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.candidate.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->candidateRepository->datatable();
    }
}
