<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PartnerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Schema::disableForeignKeyConstraints();
    Partner::truncate();
    Schema::enableForeignKeyConstraints();
    Partner::create([
      'name' => 'SOFIN AI',
      'name_en' => 'SOFIN AI',
      'short_name' => 'SOFIN AI',
      'logo' => '/storage/files/1/partners/sofin.png',
      'logo_dark' => '/storage/files/1/partners/sofin.png',
      'status' => 1
    ]);
    Partner::create([
      'name' => 'AI Music',
      'name_en' => 'AI Music',
      'short_name' => 'AI Music',
      'logo' => '/storage/files/1/partners/music.png',
      'logo_dark' => '/storage/files/1/partners/music.png',
      'status' => 1
    ]);
    Partner::create([
      'name' => 'SOFIN Stream',
      'name_en' => 'SOFIN Stream',
      'short_name' => 'SOFIN Stream',
      'logo' => '/storage/files/1/partners/sofin.png',
      'logo_dark' => '/storage/files/1/partners/sofin.png',
      'status' => 1
    ]);
    Partner::create([
      'name' => 'For Creators',
      'name_en' => 'For Creators',
      'short_name' => 'For Creators',
      'logo' => '/storage/files/1/partners/sofin.png',
      'logo_dark' => '/storage/files/1/partners/sofin.png',
      'status' => 1
    ]);
    Partner::create([
      'name' => 'SOFIN Foundation',
      'name_en' => 'SOFIN Foundation',
      'short_name' => 'SOFIN Foundation',
      'logo' => '/storage/files/1/partners/sofin.png',
      'logo_dark' => '/storage/files/1/partners/sofin.png',
      'status' => 1
    ]);
    Partner::create([
      'name' => 'Snaptask',
      'name_en' => 'Snaptask',
      'short_name' => 'Snaptask',
      'logo' => '/storage/files/1/partners/snaptask.png',
      'logo_dark' => '/storage/files/1/partners/snaptask.png',
      'status' => 1
    ]);
    Partner::create([
      'name' => 'SOFIN Mall',
      'name_en' => 'SOFIN Mall',
      'short_name' => 'SOFIN Mall',
      'logo' => '/storage/files/1/partners/sofin.png',
      'logo_dark' => '/storage/files/1/partners/sofin.png',
      'status' => 1
    ]);
    Partner::create([
      'name' => 'V-IMS',
      'name_en' => 'V-IMS',
      'short_name' => 'V-IMS',
      'logo' => '/storage/files/1/partners/v-ims-light.png',
      'logo_dark' => '/storage/files/1/partners/v-ims-dark.png',
      'status' => 3
    ]);
    Partner::create([
      'name' => 'Spinel labs',
      'name_en' => 'Spinel labs',
      'short_name' => 'Spinel labs',
      'logo' => '/storage/files/1/partners/spinel-light.png',
      'logo_dark' => '/storage/files/1/partners/spinel-dark.png',
      'status' => 3
    ]);
    Partner::create([
      'name' => 'T-DEV',
      'name_en' => 'T-DEV',
      'short_name' => 'T-DEV',
      'logo' => '/storage/files/1/partners/tdev-light.png',
      'logo_dark' => '/storage/files/1/partners/tdev-dark.png',
      'status' => 3
    ]);
    Partner::create([
      'name' => 'Bitech',
      'name_en' => 'Bitech',
      'short_name' => 'Bitech',
      'logo' => '/storage/files/1/partners/bitech-light.png',
      'logo_dark' => '/storage/files/1/partners/bitech-dark.png',
      'status' => 3
    ]);
    Partner::create([
      'name' => 'Phoenix',
      'name_en' => 'Phoenix',
      'short_name' => 'Phoenix',
      'logo' => '/storage/files/1/partners/phoenix-light.png',
      'logo_dark' => '/storage/files/1/partners/phoenix-dark.png',
      'status' => 3
    ]);
  }
}