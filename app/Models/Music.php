<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Music extends Authenticatable
{
  public $table = 'musics';
  use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

  const ACTIVE_STATUS = 1;
  const INACTIVE_STATUS = 2;

  protected $fillable = [
    'name',
    'name_en',
    'author',
    'author_en',
    'image',
    'image_dark',
    'status'
  ];


  static function allActive()
  {
    return self::where('status', self::ACTIVE_STATUS)->get();
  }

  public function image()
  {
    return session()->get('mode') == config('theme.mode')[0] ? $this->image_dark : $this->image;
  }

  public function name()
  {
    return session()->get('locale') == config('theme.language')[0] ? $this->name_en : $this->name;
  }

  public function author()
  {
    return session()->get('locale') == config('theme.language')[0] ? $this->author_en : $this->author;
  }
}