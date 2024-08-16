<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class EcoSystem extends Authenticatable
{
  public $table = 'ecosystems';
  const DEFAULT_LOGO_URL = "/cms_assets/images/default-avatar.jpg";
  const CATEGORY_1 = 1;
  const CATEGORY_2 = 2;
  const CATEGORY_3 = 3;
  const CATEGORY_4 = 4;

  const CATEGORY_NAMES = [
    self::CATEGORY_1 => ['label' => 'Entertainment', 'icon' => 'svg.chrome', 'label_en' => 'Entertainment'],
    self::CATEGORY_2 => ['label' => 'Investment', 'icon' => 'svg.status-up', 'label_en' => 'Investment'],
    self::CATEGORY_3 => ['label' => 'Operation', 'icon' => 'svg.cup', 'label_en' => 'Operation'],
    self::CATEGORY_4 => ['label' => 'Technology', 'icon' => 'svg.chart', 'label_en' => 'Technology']
  ];

  use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

  protected $fillable = [
    'name',
    'name_en',
    'description',
    'description_en',
    'partner_id',
    'image',
    'image_dark',
    'category',
  ];

  public function logoUrl()
  {
    if (isset($this->avatar) && file_exists(substr($this->avatar, 0, 1))) {
      return $this->avatar;
    } else {
      return self::DEFAULT_LOGO_URL;
    }
  }

  public function getCategory()
  {
    $categories = [
      self::CATEGORY_1 => 'Entertainment',
      self::CATEGORY_2 => 'Investment',
      self::CATEGORY_3 => 'Operation',
      self::CATEGORY_4 => 'Technology'
    ];
    return $categories[$this->category];
  }

  public function partner()
  {
    return $this->belongsTo(Partner::class, 'partner_id');
  }

  static function categoryLabel($key)
  {
    return session()->get('locale') == config('theme.language')[0] ? self::CATEGORY_NAMES[$key]['label_en'] : self::CATEGORY_NAMES[$key]['label'];
  }

  public function description()
  {
    return session()->get('locale') == config('theme.language')[0] ? $this->description_en : $this->description;
  }

  public function name()
  {
    return session()->get('locale') == config('theme.language')[0] ? $this->name_en : $this->name;
  }

  public function image()
  {
    return session()->get('mode') == config('theme.mode')[0] ? $this->image_dark : $this->image;
  }

  static function filterByCategory()
  {
  }

  static function allByCategory()
  {
    $ecosystems = self::all();

    foreach (self::CATEGORY_NAMES as $key => $category) {
      $filteredData[$key] = collect($ecosystems)->filter(function ($ecosystem) use ($key) {
        return $ecosystem['category'] == $key;
      })->all();
    }

    $filteredData['all'] = [...$filteredData[self::CATEGORY_1], ...$filteredData[self::CATEGORY_2], ...$filteredData[self::CATEGORY_3]];
    shuffle($filteredData['all']);

    return $filteredData;
  }
}
