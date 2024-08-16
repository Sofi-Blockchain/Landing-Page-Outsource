<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Blog::truncate();
        Schema::enableForeignKeyConstraints();
        Blog::create([
            'name' => 'SOFIN TOOL UNIQUE FEATURES',
            'name_en' => 'SOFIN TOOL UNIQUE FEATURES',
            'description' => 'Content AI Social Listening Integrated processing of content optimization from raw files, SEO with shortening time. Our process is based on multi-channel database,...',
            'description_en' => 'Content AI Social Listening Integrated processing of content optimization from raw files, SEO with shortening time. Our process is based on multi-channel database,...',
            'image' => '/storage/files/1/blogs/b1.jpg',
            'image_dark' => '/storage/files/1/blogs/b1.jpg',
            'link' => 'https://flipboarddaily.online/sofin-tool-unique-features/',
            'link_en' => 'https://flipboarddaily.online/sofin-tool-unique-features/',
            'category' => 1
          ]);
          Blog::create([
            'name' => 'AI MUSICIO THERAPY MODEL',
            'name_en' => 'AI MUSICIO THERAPY MODEL',
            'description' => 'The Mental Health Market Statistically, at least 1 in 8 people have at least one mental health diagnosis, i.e. anger, depression, anxiety, stress disorder,...',
            'description_en' => 'The Mental Health Market Statistically, at least 1 in 8 people have at least one mental health diagnosis, i.e. anger, depression, anxiety, stress disorder,...',
            'image' => '/storage/files/1/blogs/b2.png',
            'image_dark' => '/storage/files/1/blogs/b2.png',
            'link' => 'https://flipboarddaily.online/ai-musicio-therapy-model/',
            'link_en' => 'https://flipboarddaily.online/ai-musicio-therapy-model/',
            'category' => 1
          ]);
          Blog::create([
            'name' => 'SOFIN SOLUTIONS',
            'name_en' => 'SOFIN SOLUTIONS',
            'description' => 'Impactful AI Technology We apply AI in content production, evaluation, and data processing based on user behavior, connecting with access to websites with more relevant.',
            'description_en' => 'Impactful AI Technology We apply AI in content production, evaluation, and data processing based on user behavior, connecting with access to websites with more relevant.',
            'image' => '/storage/files/1/blogs/b3.jpg',
            'image_dark' => '/storage/files/1/blogs/b3.jpg',
            'link' => 'https://flipboarddaily.online/ai-musicio-therapy-model/',
            'link_en' => 'https://flipboarddaily.online/ai-musicio-therapy-model/',
            'category' => 1
          ]);
          Blog::create([
            'name' => 'Why AI Is a Game-Changer for the Music Industry',
            'name_en' => 'Why AI Is a Game-Changer for the Music Industry',
            'description' => 'AI is bridging the gap between artists and fans. It’s personalizing experiences, recommending music, and even writing songs that resonate with individual listeners. Let’s discover...',
            'description_en' => 'AI is bridging the gap between artists and fans. It’s personalizing experiences, recommending music, and even writing songs that resonate with individual listeners. Let’s discover...',
            'image' => '/storage/files/1/blogs/b4.jpg',
            'image_dark' => '/storage/files/1/blogs/b4.jpg',
            'link' => 'https://flipboarddaily.online/why-ai-is-a-game-changer-for-the-music-industry/',
            'link_en' => 'https://flipboarddaily.online/why-ai-is-a-game-changer-for-the-music-industry/',
            'category' => 2
          ]);
          Blog::create([
            'name' => 'WELCOME TO OUR BLOGS',
            'name_en' => 'WELCOME TO OUR BLOGS',
            'description' => 'AI Game Changer in the Music Industry The world of music is dancing to a new beat, thanks to AI. From unlocking creativity to transforming...',
            'description_en' => 'AI Game Changer in the Music Industry The world of music is dancing to a new beat, thanks to AI. From unlocking creativity to transforming...',
            'image' => '/storage/files/1/blogs/b5.jpeg',
            'image_dark' => '/storage/files/1/blogs/b5.jpeg',
            'link' => 'https://flipboarddaily.online/welcome-to-our-blogs/',
            'link_en' => 'https://flipboarddaily.online/welcome-to-our-blogs/',
            'category' => 2
          ]);
          Blog::create([
            'name' => 'How AI Is Helping Musicians Unlock Their Creativity',
            'name_en' => 'How AI Is Helping Musicians Unlock Their Creativity',
            'description' => 'AI is not just a tool; it’s a partner in creativity. Musicians are using AI to compose new songs, discover unique sounds, and even predict...',
            'description_en' => 'AI is not just a tool; it’s a partner in creativity. Musicians are using AI to compose new songs, discover unique sounds, and even predict...',
            'image' => '/storage/files/1/blogs/b6.png',
            'image_dark' => '/storage/files/1/blogs/b6.png',
            'link' => 'https://flipboarddaily.online/how-ai-is-helping-musicians-unlock-their-creativity/',
            'link_en' => 'https://flipboarddaily.online/how-ai-is-helping-musicians-unlock-their-creativity/',
            'category' => 2
          ]);
          Blog::create([
            'name' => 'THE PROBLEM IN SOCIAL MEDIA ADS',
            'name_en' => 'THE PROBLEM IN SOCIAL MEDIA ADS',
            'description' => 'Insight Analysis Lack of searching, collecting, measuring, and detailed evaluating of insights (regions, fields, habits, interests, etc.), user behavior, and market trends. Quality of Content...',
            'description_en' => 'Insight Analysis Lack of searching, collecting, measuring, and detailed evaluating of insights (regions, fields, habits, interests, etc.), user behavior, and market trends. Quality of Content...',
            'image' => '/storage/files/1/blogs/b7.png',
            'image_dark' => '/storage/files/1/blogs/b7.png',
            'link' => 'https://flipboarddaily.online/the-problem-in-social-media-ads/',
            'link_en' => 'https://flipboarddaily.online/the-problem-in-social-media-ads/',
            'category' => 3
          ]);
          Blog::create([
            'name' => 'MAXIMIZE YOUR SOCIAL MEDIA IMPACT',
            'name_en' => 'MAXIMIZE YOUR SOCIAL MEDIA IMPACT',
            'description' => 'SOFIN Tools All in our integrated Social/Web3/AI platform Content Creation We create engaging video content that tells your brand’s story and resonates with your audience...',
            'description_en' => 'SOFIN Tools All in our integrated Social/Web3/AI platform Content Creation We create engaging video content that tells your brand’s story and resonates with your audience...',
            'image' => '/storage/files/1/blogs/b8.png',
            'image_dark' => '/storage/files/1/blogs/b8.png',
            'link' => 'https://flipboarddaily.online/maximize-your-social-media-impact/',
            'link_en' => 'https://flipboarddaily.online/maximize-your-social-media-impact/',
            'category' => 3
          ]);
          Blog::create([
            'name' => 'SOFIN iCMS',
            'name_en' => 'SOFIN iCMS',
            'description' => 'SOFIN iCMS (Intelligence Content Management System) is an AI-powered platform built for all musicians and artists, not just those signed to record labels or music publishers.',
            'description_en' => 'SOFIN iCMS (Intelligence Content Management System) is an AI-powered platform built for all musicians and artists, not just those signed to record labels or music publishers.',
            'image' => '/storage/files/1/blogs/b9.jpg',
            'image_dark' => '/storage/files/1/blogs/b9.jpg',
            'link' => 'https://flipboarddaily.online/sofin-icms/',
            'link_en' => 'https://flipboarddaily.online/sofin-icms/',
            'category' => 3
          ]);
    }
}
