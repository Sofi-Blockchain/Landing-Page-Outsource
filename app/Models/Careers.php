<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Careers extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

  const DEPARTMENT_1 = 1;
  const DEPARTMENT_2 = 2;
  const DEPARTMENT_3 = 3;

  const ACTIVE_STATUS = 1;
  const INACTIVE_STATUS = 2;
  const HIDE_STATUS = 3;

  const LOCATION_1 = 1;
  const LOCATION_2 = 1;
  const LOCATION_3 = 1;

  const DEPARTMENT_NAMES = [
    self::DEPARTMENT_1 => ['name' => 'Director', 'name_en' => 'Director'],
    self::DEPARTMENT_2 => ['name' => 'Research', 'name_en' => 'Research'],
    self::DEPARTMENT_3 => ['name' => 'Dev', 'name_en' => 'Dev'],
  ];

  const LOCATION_NAMES = [
    self::DEPARTMENT_1 => ['name' => 'California, USA', 'name_en' => 'California, USA'],
    self::DEPARTMENT_2 => ['name' => 'Canada', 'name_en' => 'Canada'],
    self::DEPARTMENT_3 => ['name' => 'Singapore', 'name_en' => 'Singapore'],
  ];

  protected $fillable = [
    'name',
    'name_en',
    'location',
    'location_en',
    'department',
    'department_en',
    'description',
    'description_en',
  ];

  public function getDepartment($departmentId)
  {
    if (array_key_exists($departmentId, self::DEPARTMENT_NAMES)) {
      return self::DEPARTMENT_NAMES[$departmentId]['name'];
    }
    return null;
  }

  public function getLocation($locationId)
  {
    if (array_key_exists($locationId, self::LOCATION_NAMES)) {
      return self::LOCATION_NAMES[$locationId]['name'];
    }
    return null;
  }

  static function allActive()
  {
    return self::where('status', self::ACTIVE_STATUS)->get();
  }

  public function name()
  {
    return session()->get('locale') == config('theme.language')[0] ? $this->name_en : $this->name;
  }

  public function description()
  {
    return session()->get('locale') == config('theme.language')[0] ? $this->description_en : $this->description;
  }

  public function location()
  {
    return session()->get('locale') == config('theme.language')[0] ? self::LOCATION_NAMES[$this->location]['name_en'] : self::LOCATION_NAMES[$this->location]['name'];
  }

  public function department()
  {
    return session()->get('locale') == config('theme.language')[0] ? self::DEPARTMENT_NAMES[$this->department]['name_en'] : self::DEPARTMENT_NAMES[$this->department]['name'];
  }
}