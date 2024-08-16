<?php

namespace Database\Seeders;

use App\Models\MilesStone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MilesStoneSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Schema::disableForeignKeyConstraints();
    MilesStone::truncate();
    Schema::enableForeignKeyConstraints();
    MilesStone::create([
      'description' => 'Established and set long-term goals for our the next development steps.',
      'description_en' => 'Established and set long-term goals for our the next development steps.',
      'year' => '2015',
    ]);
    MilesStone::create([
      'description' => 'Built infrastructure and laid the first foundation for new trending technology platforms.',
      'description_en' => 'Built infrastructure and laid the first foundation for new trending technology platforms.',
      'year' => '2016',
    ]);
    MilesStone::create([
      'description' => 'Accessed Blockchain technology with the support of AI, participate in supporting domestic and foreign projects.',
      'description_en' => 'Accessed Blockchain technology with the support of AI, participate in supporting domestic and foreign projects.',
      'year' => '2020',
    ]);
    MilesStone::create([
      'description' => 'Went deep into the Blockchain industry through many projects with Gamefi, Finance, DAO and many others. Started to grow an agency which specializes in Blockchain Marketing.',
      'description_en' => 'Went deep into the Blockchain industry through many projects with Gamefi, Finance, DAO and many others. Started to grow an agency which specializes in Blockchain Marketing.',
      'year' => '2021',
    ]);
    MilesStone::create([
      'description' => 'Built several projects which pioneered in the field of Blockchain supporting businesses while applying Web2 to Web3 technology conversion, initially developing AI technology in the fields of entertainment, media and social. Continued developing and perfecting technology platforms that contribute to changing the future of social networks.',
      'description_en' => 'Built several projects which pioneered in the field of Blockchain supporting businesses while applying Web2 to Web3 technology conversion, initially developing AI technology in the fields of entertainment, media and social. Continued developing and perfecting technology platforms that contribute to changing the future of social networks.',
      'year' => '2022',
    ]);
    MilesStone::create([
      'description' => 'Continue to perfect and optimize projects and platforms while expanding our network to influence technology trends. Launch more AI application products, optimize approaches, and ensure implementation for all projects.',
      'description_en' => 'Continue to perfect and optimize projects and platforms while expanding our network to influence technology trends. Launch more AI application products, optimize approaches, and ensure implementation for all projects.',
      'year' => '2023',
    ]);
  }
}