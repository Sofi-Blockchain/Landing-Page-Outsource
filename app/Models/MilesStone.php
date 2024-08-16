<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MilesStone extends Model
{
  public $table = 'milesstone';
  use HasFactory;


  public function description()
  {
    return session()->get('locale') == config('theme.language')[0] ? $this->description_en : $this->description;
  }
}