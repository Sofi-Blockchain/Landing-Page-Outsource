<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Setting extends Model
{
    use HasFactory;

  static function list()
  {
    $settings = Setting::all();
    return Setting::format2ArrayWithLang($settings);
  }

  static function allInArrayFormat()
  {
    $settings = self::all();

    return self::format2Array($settings);
  }
  /**
   * format2Array
   */
  static function format2Array($settings)
  {
    $result = [];
    foreach ($settings as $setting) {
      if (session()->get('locale') == config('locale.vi')) {
        $result[$setting->key] = $setting->value ?? $setting->default;
      }
      else {
        $result[$setting->key] = $setting->value_en ?? ($setting->value ?? $setting->default);
      }
    }
    return $result;
  }
  static function format2ArrayWithLang($settings)
  {
    $result = [];
    foreach ($settings as $setting) {
      $result[$setting->key]['value'] = $setting->value ?? $setting->default;
      $result[$setting->key]['value_en'] = $setting->value_en;
    }
    return $result;
  }

  static function store($request) {
    DB::beginTransaction();
    try {
      $requests = $request->except('_token');
      if (isset($requests['en'])) {
        foreach ($requests['en'] as $key => $val) {
          Setting::where('key', $key)->update(['value_en' => $val]);
        }
      } else {
        foreach ($requests as $key => $val) {
          Setting::where('key', $key)->update(['value' => $val]);
        }
      }
      DB::commit();
      return ['success' => 1];
    } catch (\Exception $e) {
      DB::rollBack();
      Log::error('Exception occurred on line ' . $e->getLine() . ': ' . $e->getMessage());
      return ['success' => 0, 'message' => __('noti.somethingWentWrong')];
    }
  }
}
