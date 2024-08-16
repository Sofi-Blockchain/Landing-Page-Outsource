<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Partner extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

  const DEFAULT_LOGO_URL = "/cms_assets/images/default-avatar.jpg";
  const DEFAULT_ID = 1;
  const ACTIVE_STATUS = 1;
  const INACTIVE_STATUS = 2;
  const PIN_TO_WEB_STATUS = 3;

  protected $fillable = [
    'name',
    'short_name',
    'logo',
    'status',
    'date_of_birth',
    'job_possition'
  ];

  public function logoUrl()
  {
    if (isset($this->avatar) && file_exists(substr($this->avatar, 0, 1))) {
      return $this->avatar;
    } else {
      return self::DEFAULT_LOGO_URL;
    }
  }

  public function name()
  {
    return session()->get('locale') == config('theme.language')[0] ? $this->name_en : $this->name;
  }

  public function logo()
  {
    return session()->get('mode') == config('theme.mode')[0] ? $this->logo_dark : $this->logo;
  }

  static function pin2WebByGroup()
  {
    $pin2WebPartners = self::where('status', self::PIN_TO_WEB_STATUS)->limit(9)->get()->toArray();
    return array_chunk($pin2WebPartners, ceil(count($pin2WebPartners) / 3));
  }
}