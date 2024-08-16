<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datatableRoute = route('cms.user.datatable');
        return view('cms.pages.user.index', compact('datatableRoute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateRequest $request)
    {
        $data = $request->all();
        $result = $this->userRepository->create($data);
        if ($result['success']) {
            return redirect()->route('cms.user.index')->with('message', $result['message']);
        } else {
            return redirect()->back()>with('message', $result['message']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(UpdateRequest $request)
    {
        $data = $request->all();
        $result =  $this->userRepository->update($data);
        if ($result['success']) {
            return redirect()->route('cms.user.index')->with('message', $result['message']);
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
            $user = User::find($id);
            return view('cms.pages.user.form', compact('user'));
        }
        return view('cms.pages.user.form');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->userRepository->delete($id);
        if ($result['success']) {
            return redirect()->route('cms.user.index')->with('message', $result['message']);
        } else {
            return redirect()->back()->with('message', $result['message']);
        }
    }

    public function datatable()
    {
        return $this->userRepository->datatable();
    }
}
