<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call([
      PartnerSeeder::class,
      EcosystemSeeder::class,
      MusicSeeder::class,
      BlogSeeder::class,
      StreamSeeder::class,
      MilesStoneSeeder::class,
    ]);
  }
}
