<?php

namespace Database\Seeders;

use App\Models\EcoSystem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class EcosystemSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Schema::disableForeignKeyConstraints();
    EcoSystem::truncate();
    Schema::enableForeignKeyConstraints();
    EcoSystem::create([
      'name' => 'SOFIN Stream',
      'name_en' => 'SOFIN Stream',
      'description' => 'Our integrated Al-driven platform is designed to empower your brand and outfit your business with the marketing tools needed to succeed.',
      'description_en' => 'Our integrated Al-driven platform is designed to empower your brand and outfit your business with the marketing tools needed to succeed.',
      'partner_id' => 3,
      'image' => '/storage/files/1/ecosystem/stream.png',
      'image_dark' => '/storage/files/1/ecosystem/stream.png',
      'category' => 1
    ]);
    EcoSystem::create([
      'name' => 'Spring AI',
      'name_en' => 'Spring AI',
      'description' => 'Useful AI tools for businesses in many fields, aiming to create a comprehensive platform of technology and algorithms, optimizing costs and human resources.',
      'description_en' => 'Useful AI tools for businesses in many fields, aiming to create a comprehensive platform of technology and algorithms, optimizing costs and human resources.',
      'partner_id' => 3,
      'image' => '/storage/files/1/ecosystem/spring-ai.png',
      'image_dark' => '/storage/files/1/ecosystem/spring-ai.png',
      'category' => 1
    ]);
    EcoSystem::create([
      'name' => 'AI Music',
      'name_en' => 'AI Music',
      'description' => 'Our AI-composed emotional soundtrack music can empower your passion and earn money for you.',
      'description_en' => 'Our AI-composed emotional soundtrack music can empower your passion and earn money for you.',
      'partner_id' => 2,
      'image' => '/storage/files/1/ecosystem/music.png',
      'image_dark' => '/storage/files/1/ecosystem/music.png',
      'category' => 1
    ]);
    EcoSystem::create([
      'name' => 'SOFIN AI',
      'name_en' => 'SOFIN AI',
      'description' => 'Our integrated system of AI and Web3 solutions designed for the future social platform expansion.',
      'description_en' => 'Our integrated system of AI and Web3 solutions designed for the future social platform expansion.',
      'partner_id' => 1,
      'image' => '/storage/files/1/ecosystem/sofin-ai.png',
      'image_dark' => '/storage/files/1/ecosystem/sofin-ai.png',
      'category' => 1
    ]);
    EcoSystem::create([
      'name' => 'For creators',
      'name_en' => 'For creators',
      'description' => 'A platform for creators who want to collaborate to grow with lots of benefits and terms that support their dream.',
      'description_en' => 'A platform for creators who want to collaborate to grow with lots of benefits and terms that support their dream.',
      'partner_id' => 4,
      'image' => '/storage/files/1/ecosystem/for-creator.png',
      'image_dark' => '/storage/files/1/ecosystem/for-creator.png',
      'category' => 1
    ]);
    EcoSystem::create([
      'name' => 'SOFIN Foundation',
      'name_en' => 'SOFIN Foundation',
      'description' => 'Our integrated system of AI and Web3 solutions designed for the future social platform expansion.',
      'description_en' => 'Our integrated system of AI and Web3 solutions designed for the future social platform expansion.',
      'partner_id' => 5,
      'image' => '/storage/files/1/ecosystem/sofin-foundation.png',
      'image_dark' => '/storage/files/1/ecosystem/sofin-foundation.png',
      'category' => 2
    ]);
    EcoSystem::create([
      'name' => 'Snaptask',
      'name_en' => 'Snaptask',
      'description' => 'Connects millions of people to new opportunities from your competitors and produce output at higher caliber.',
      'description_en' => 'Connects millions of people to new opportunities from your competitors and produce output at higher caliber.',
      'partner_id' => 6,
      'image' => '/storage/files/1/ecosystem/snaptask.png',
      'image_dark' => '/storage/files/1/ecosystem/snaptask.png',
      'category' => 2
    ]);
    EcoSystem::create([
      'name' => 'SOFIN Mall',
      'name_en' => 'SOFIN Mall',
      'description' => '(Coming soon) Technology tool and utility distribution system based on AI, located in the SoFin Network ecosystem with the goal of commercializing the business access process.',
      'description_en' => '(Coming soon) Technology tool and utility distribution system based on AI, located in the SoFin Network ecosystem with the goal of commercializing the business access process.',
      'partner_id' => 7,
      'image' => '/storage/files/1/ecosystem/sofin-mall.png',
      'image_dark' => '/storage/files/1/ecosystem/sofin-mall.png',
      'category' => 2
    ]);
    EcoSystem::create([
      'name' => 'V-IMS',
      'name_en' => 'V-IMS',
      'description' => 'Launching a strategic plan or developing a brand requires flexible expertise skills and, more important, in-depth and practical experience of the market.',
      'description_en' => 'Launching a strategic plan or developing a brand requires flexible expertise skills and, more important, in-depth and practical experience of the market.',
      'partner_id' => 8,
      'image' => '/storage/files/1/ecosystem/v-ims.png',
      'image_dark' => '/storage/files/1/ecosystem/v-ims.png',
      'category' => 3
    ]);
    EcoSystem::create([
      'name' => 'Spinel Labs',
      'name_en' => 'Spinel Labs',
      'description' => 'Support from startups to large enterprises to build, run, and scale blockchain applications, ensuring that your business is always ahead of the game.',
      'description_en' => 'Support from startups to large enterprises to build, run, and scale blockchain applications, ensuring that your business is always ahead of the game.',
      'partner_id' => 9,
      'image' => '/storage/files/1/ecosystem/spinel.png',
      'image_dark' => '/storage/files/1/ecosystem/spinel.png',
      'category' => 3
    ]);
    EcoSystem::create([
      'name' => 'T-DEV',
      'name_en' => 'T-DEV',
      'description' => 'Provide technology solutions with the mission of creating new breakthroughs in the AI era, constantly capturing and contributing to shaping new technology trends for businesses.',
      'description_en' => 'Provide technology solutions with the mission of creating new breakthroughs in the AI era, constantly capturing and contributing to shaping new technology trends for businesses.',
      'partner_id' => 10,
      'image' => '/storage/files/1/ecosystem/tdev-solution.png',
      'image_dark' => '/storage/files/1/ecosystem/tdev-solution.png',
      'category' => 3
    ]);
    // Technology
    EcoSystem::create([
      'name' => 'Impactful AI Technology',
      'name_en' => 'Impactful AI Technology',
      'description' => 'Apply AI in content production, evaluation, and data processing.',
      'description_en' => 'Apply AI in content production, evaluation, and data processing.',
      'category' => 4
    ]);
    EcoSystem::create([
      'name' => 'Standardized Process',
      'name_en' => 'Standardized Process',
      'description' => 'Integrate content and channel optimization processes into a single application',
      'description_en' => 'Integrate content and channel optimization processes into a single application',
      'category' => 4
    ]);
    EcoSystem::create([
      'name' => 'Speedy Data Mining Network',
      'name_en' => 'Speedy Data Mining Network',
      'description' => 'Create Distribution and Exploitation system',
      'description_en' => 'Create Distribution and Exploitation system',
      'category' => 4
    ]);
    EcoSystem::create([
      'name' => 'Optimized Process',
      'name_en' => 'Optimized Process',
      'description' => 'Integrate advanced technology to create solutions',
      'description_en' => 'Integrate advanced technology to create solutions',
      'category' => 4
    ]);
  }
}