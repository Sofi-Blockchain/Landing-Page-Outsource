<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Music\MusicsRequest;
use App\Models\Music;
use App\Repositories\Music\MusicInterface;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    private $musicRepository;

    public function __construct(MusicInterface $musicRepository)
    {
        $this->musicRepository = $musicRepository;
    }

    public function index()
    {
        $datatableRoute= route('cms.music.datatable');
        return view('cms.pages.music.index', compact('datatableRoute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(MusicsRequest $request)
    {
        $data = $request->all();
        $result = $this->musicRepository->create($data);
        if ($result['success']) {
            return redirect()->route('cms.music.index')->with('message', $result['message']);
        } else {
            return redirect()->back()>with('message', $result['message']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(MusicsRequest $request)
    {
        $data = $request->all();
        $result =  $this->musicRepository->update($data);
        if ($result['success']) {
            return redirect()->route('cms.music.index')->with('message', $result['message']);
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
            $music = Music::find($id);
            return view('cms.pages.music.form', compact('music'));
        }
        return view('cms.pages.music.form');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->musicRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.music.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->musicRepository->datatable();
    }
}
