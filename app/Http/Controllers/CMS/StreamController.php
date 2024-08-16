<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Stream\StreamRequest;
use App\Models\Stream;
use App\Repositories\Stream\StreamInterface;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    private $streamRepository;

    public function __construct(StreamInterface $streamRepository)
    {
        $this->streamRepository = $streamRepository;
    }

    public function index()
    {
        $datatableRoute= route('cms.stream.datatable');
        return view('cms.pages.stream.index', compact('datatableRoute'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    public function create(StreamRequest $request)
    {
        $data = $request->all();
        $result = $this->streamRepository->create($data);
        if ($result['success']) {
            return redirect()->route('cms.stream.index')->with('message', $result['message']);
        } else {
            return redirect()->back()>with('message', $result['message']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(StreamRequest $request)
    {
        $data = $request->all();
        $result =  $this->streamRepository->update($data);
        if ($result['success']) {
            return redirect()->route('cms.stream.index')->with('message', $result['message']);
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
            $stream = Stream::find($id);
            return view('cms.pages.stream.form', compact('stream'));
        }
        return view('cms.pages.stream.form'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->streamRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.stream.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->streamRepository->datatable();
    }
}
