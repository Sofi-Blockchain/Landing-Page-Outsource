<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Authenticatable
{
  const DEFAULT_IMAGE = "/cms_assets/images/default-avatar.jpg";
  const CATEGORY_1 = 1;
  const CATEGORY_2 = 2;
  const CATEGORY_3 = 3;

  const CATEGORY_NAMES = [
    self::CATEGORY_1 => ['label' => 'AI Music Industry Game Changer AI', 'icon' => 'svg.cd', 'label_en' => 'AI Music Industry Game Changer AI'],
    self::CATEGORY_2 => ['label' => 'Music Therapy', 'icon' => 'svg.happyEmoji', 'label_en' => 'Music Therapy'],
    self::CATEGORY_3 => ['label' => 'CMS Online', 'icon' => 'svg.book', 'label_en' => 'CMS Online'],
  ];

  const NUMBER_OF_BLOG_IN_HOME = 5;

  use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

  protected $fillable = [
    'name',
    'name_en',
    'description',
    'description_en',
    'image',
    'image_dark',
    'category',
    'link'
  ];

  public function logoUrl()
  {
    if (isset($this->image) && file_exists(substr($this->image, 0, 1))) {
      return $this->image;
    } else {
      return self::DEFAULT_IMAGE;
    }
  }

  public function getCategory($categoryId)
  {
    if (array_key_exists($categoryId, self::CATEGORY_NAMES)) {
      return self::CATEGORY_NAMES[$categoryId]['label'];
    }
    return null;
  }

  static function getLatest($num = '')
  {
    if (empty($num)) {
      $num = 1;
    }
    return Blog::latest('id')->take($num)->get();
  }

  public function name()
  {
    return session()->get('locale') == config('theme.language')[0] ? $this->name_en : $this->name;
  }

  public function description()
  {
    return session()->get('locale') == config('theme.language')[0] ? $this->description_en : $this->description;
  }

  public function detailUrl()
  {
    return session()->get('locale') == config('theme.language')[0] ? $this->link_en : $this->link;
  }

  public function thumbnailUrl()
  {
    return session()->get('mode') == config('theme.mode')[0] ? $this->image_dark : $this->image;
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

  static function categoryLabel($key)
  {
    return session()->get('locale') == config('theme.language')[0] ? self::CATEGORY_NAMES[$key]['label_en'] : self::CATEGORY_NAMES[$key]['label'];
  }
}
