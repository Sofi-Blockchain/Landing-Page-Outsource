<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class FAQ extends Authenticatable
{
    public $table = 'faq';
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    const ACTIVE_STATUS = 1;
    const INACTIVE_STATUS = 2;
}
