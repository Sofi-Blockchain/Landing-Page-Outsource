<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stream extends Authenticatable
{
  const DEFAULT_IMAGE = "/cms_assets/images/default-avatar.jpg";
  use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

  protected $fillable = [
    'name',
    'name_en',
    'image',
    'image_dark',
    'link',
    'link_en'
  ];

  public function logoUrl()
  {
    if (isset($this->image) && file_exists(substr($this->image, 0, 1))) {
      return $this->image;
    } else {
      return self::DEFAULT_IMAGE;
    }
  }

  public function thumbnailUrl()
  {
    return session()->get('mode') == config('theme.mode')[0] ? $this->image_dark : $this->image;
  }
}