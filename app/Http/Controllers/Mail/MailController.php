<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mail\CareerRequest;
use App\Repositories\Mail\MailInterface;
use Illuminate\Http\Request;

class MailController extends Controller
{
    private $mailRepository;

    public function __construct(MailInterface $mailRepository)
    {
        $this->mailRepository =  $mailRepository;
    }

    public function personalContact(Request $request){
        $data = $request->all();
        $result = $this->mailRepository->personalContact($data);
        if ($result['success']) {
            return redirect('/lets-talk#form-fill')->with('success', $result['message']);
        } else {
            return redirect('/lets-talk#form-fill')->with('fail', $result['message']);
        }
    }

    public function brandContact(Request $request){
        $data = $request->all();
        $result = $this->mailRepository->brandContact($data);
        if ($result['success']) {
            return redirect('/lets-talk#form-fill')->with('success', $result['message']);
        } else {
            return redirect('/lets-talk#form-fill')->with('fail', $result['message']);
        }
    }

    public function careerMail(Request $request){
        $result = $this->mailRepository->careerMail($request);
        if($result['success']){
            return redirect('/career')->with('success',$result['message']);
        }else {
            return redirect('/career')->with('fail', $result['message']);
        }
    }
}

