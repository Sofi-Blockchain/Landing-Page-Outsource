<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class CaseStudy extends Authenticatable
{
    public $table = 'case_study';
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    const CONTENT_1 = 1;
    const CONTENT_2 = 2;
    const CONTENT_3 = 3;
    const ACTIVE_STATUS = 1;
    const INACTIVE_STATUS = 2;

    const CONTENT_NAMES = [
        self::CONTENT_1 => ['name' => 'Image'],
        self::CONTENT_2 => ['name' => 'Video'],
        self::CONTENT_3 => ['name' => 'Youtube embed url'],
      ];
}
