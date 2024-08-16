<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Director extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const DEFAULT_AVATAR_URL = "/cms_assets/images/default-avatar.jpg";
    const DEFAULT_ID = 1;
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    protected $fillable = [
        'first_name',
        'last_name',
        'avatar',
        'gender',
        'date_of_birth',
        'job_possition'
    ];

    /**
     * Url of user avatar
     * @return string
     */
    public function avatarUrl()
    {
        if (isset($this->avatar) && file_exists(substr($this->avatar, 0, 1))) {
            return $this->avatar;
        } else {
            return self::DEFAULT_AVATAR_URL;
        }
    }

    /**
     * Get user full name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
