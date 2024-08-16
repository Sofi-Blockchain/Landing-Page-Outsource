<?php

namespace App\View\Components;

use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public $foreword;
    public $fullName;
    public $copyright;
    public $address;
    public $phoneEng;
    public $phoneVie;
    public $email;
    public $facebook;
    public $linkedin;
    public $instagram;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $settings = Setting::allInArrayFormat();
        $this->foreword     = $settings['foreword'];
        $this->fullName     = $settings['full_name'];
        $this->copyright    = $settings['copyright'];
        $this->address      = $settings['address'];
        $this->phoneEng     = $settings['phone_eng'];
        $this->phoneVie     = $settings['phone_vie'];
        $this->email        = $settings['email'];
        $this->facebook     = $settings['facebook'];
        $this->linkedin     = $settings['linkedin'];
        $this->instagram    = $settings['instagram'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
