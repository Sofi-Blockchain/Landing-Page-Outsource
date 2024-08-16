<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Schema::disableForeignKeyConstraints();
    FAQ::truncate();
    Schema::enableForeignKeyConstraints();
    FAQ::create([
      'answer' => '<p>SOFIN Network is an Integrated AI social media technology company. We provide a suite of innovative music and video production solutions to enhance and speedily monetize social media presence with our proprietary artificial intelligence and Web3 platforms aiming to revolutionize the music industry and unlock the immense potential of sustainable growth in the entertainment industry and music therapy business in the burgeoning healthcare industry.</p>',
      'answer_en' => '<p>SOFIN Network is an Integrated AI social media technology company. We provide a suite of innovative music and video production solutions to enhance and speedily monetize social media presence with our proprietary artificial intelligence and Web3 platforms aiming to revolutionize the music industry and unlock the immense potential of sustainable growth in the entertainment industry and music therapy business in the burgeoning healthcare industry.</p>',
      'question' => 'Who is SOFIN Network?',
      'question_en' => 'Who is SOFIN Network?',
      'status' => 1
    ]);
    FAQ::create([
        'answer' => '<p><em>SOFIN Network works with businesses of all sizes and industries, including startups, small businesses, and large corporations. We offer sustainable monetizing engines for musicians, singers, actors and actresses, music productions, motion picture companies, healthcare providers, and emerging growth publicly traded companies in various industry sectors.</em></p>',
        'answer_en' => '<p><em>SOFIN Network works with businesses of all sizes and industries, including startups, small businesses, and large corporations. We offer sustainable monetizing engines for musicians, singers, actors and actresses, music productions, motion picture companies, healthcare providers, and emerging growth publicly traded companies in various industry sectors.</em></p>',
        'question' => 'What kind of businesses does SOFIN Network work with?',
        'question_en' => 'What kind of businesses does SOFIN Network work with?',
        'status' => 1
      ]);
      FAQ::create([
        'answer' => '<p><em>SOFIN Network offers a variety of AI-powered technology services: </em></p>
        <ol>
        <li><em>SOFIN XSocion instigates an extensive traffic mining system to efficiently generate revenue for online content by recommending and producing trending content topic related to the Music and Entertainment sector including social media strategy development, content creation, community management, social media advertising, behavioral analytics and reporting. </em></li>
        <li><em>2. SOFIN iCMS generates exploded fan base for musicians and entertainment artists to share their work in progress, and then publish their complete tracks for all the world to recognize. Our CMS platform can build clients "revenue quickly via proprietary AI-driven social media advertising tools to create, grow, and monetize your talents. 3. SOFIN AI Musicio Therapy technology offers medical-grade music created by deep tech to help improve mental wellness. Produced by our proprietary SOFIN AI engine, we have developed AI-generated songs with unique insights into the brain and behavior to build emotional fitness, supported by ubiquitous computing to harness the therapeutic power of music for people from every walk of life for anti depression, anti anxiety, pain and anger management.</em></li>
        </ol>',
        'answer_en' => '<p><em>SOFIN Network offers a variety of AI-powered technology services: </em></p>
        <ol>
        <li><em>SOFIN XSocion instigates an extensive traffic mining system to efficiently generate revenue for online content by recommending and producing trending content topic related to the Music and Entertainment sector including social media strategy development, content creation, community management, social media advertising, behavioral analytics and reporting. </em></li>
        <li><em>2. SOFIN iCMS generates exploded fan base for musicians and entertainment artists to share their work in progress, and then publish their complete tracks for all the world to recognize. Our CMS platform can build clients "revenue quickly via proprietary AI-driven social media advertising tools to create, grow, and monetize your talents. 3. SOFIN AI Musicio Therapy technology offers medical-grade music created by deep tech to help improve mental wellness. Produced by our proprietary SOFIN AI engine, we have developed AI-generated songs with unique insights into the brain and behavior to build emotional fitness, supported by ubiquitous computing to harness the therapeutic power of music for people from every walk of life for anti depression, anti anxiety, pain and anger management.</em></li>
        </ol>',
        'question' => 'What services does SOFIN Network offer?',
        'question_en' => 'What services does SOFIN Network offer?',
        'status' => 1
      ]);
    }
}
