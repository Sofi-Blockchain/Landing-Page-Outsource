<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    private $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display dashboard
     */
    public function index()
    {
        return view('cms.pages.index.index');
    }

    /**
     * Login access
     */
    public function login()
    {
        return view('cms.pages.index.login');
    }

    public function loginProgress(LoginRequest $request)
    {
        $data = $request->only('email', 'password');
        $result = $this->userRepository->loginVerify($data);
        if ($result['success']) {
            // Cache handle here

            // Redirect to dashboard
            return redirect()->route('cms.index')->with('message', $result['message']);
        } else {
            // Go back
            return redirect()->back()->with('login_fail', $result['message']);
        }
    }

    /**
     * Logout
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('cms.login');
    }

    /**
     *
     */
    public function fileManager()
    {
        return view('cms.pages.index.file_manager');
    }
}
