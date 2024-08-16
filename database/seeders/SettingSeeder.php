<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::truncate();
        $settings = [
            [
                'key' => 'logo',
                'default' => '/assets/images/black-white-logo.png',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'logo_dark',
                'default' => '/assets/images/black-white-logo.png',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'full_name',
                'default' => 'SOFIN Network, Inc.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'short_name',
                'default' => 'SOFIN',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'email',
                'default' => 'info@sofinnetwork.com',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'phone_vie',
                'default' => '+84.935.789.789',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'phone_eng',
                'default' => '+1.714.757.2607',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'address',
                'default' => '895 Dove Street, Suite 300, Newport Beach, CA 92660, USA.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'release_year',
                'default' => '2023',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'slogan_1',
                'default' => 'BUILD YOUR BRAND VOICE FOR SUCCESS',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'slogan_2',
                'default' => 'SPEED AI SOCIAL MEDIA SOLUTIONS',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'slogan_3',
                'default' => 'HUMAN AND TECHNOLOGICAL FUSION',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'slogan_4',
                'default' => 'BRING THE WORLD CLOSER TOGETHER',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'hashtag',
                'default' => '#Regenerative AI #Technology #Social #Entertainment',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'marquee',
                'default' => 'Bring the world closer together.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'copyright',
                'default' => '2023 SOFIN NETWORK, INC. All Rights Reserved.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'introduction',
                'default' => 'A digital transformation of the technology & entertainment ecosystem which integrates Big Data, AI, Web3 products, and global connections with social network platform expansion.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'foreword',
                'default' => 'We believe that a business with effective AI tools can make a global impact. Take the first step to contact us, and together, we will reach your company\'s goals.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'contact_banner_description',
              'default' => 'We have a large-scale groups to support each other in our partnerships. Join us to get our latest news and follow our latest announcements!',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'banner_about_us_1',
              'default' => 'Creating a digital revolution for the future of social media, putting our partners\' benefits first, and generating sustainable revenue while developing a meaningful ecosystem for the betterment of our global society.',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'banner_about_us_2',
              'default' => 'We believe that the human factor is the key to success.',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'our_economic_standard',
              'default' => 'Join hands to create <i>sustainable values</i> globally.
Solving problems of jobs and labor resources <i>(SDG)</i> for sustainable development.
Identifying factors supporting environmental, social & corporate governance <i>(ESG)</i> compliance.</p>
                              ',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'our_culture',
                'default' => 'We value personal growth, thereby promoting team growth. Comprised of a united and professional team sharing the same vision and ethics, we stand firm against any challenges with perserverance.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'our_ecosystem',
                'default' => 'We believe that a business with effective AI tools can make an impact globally.
Take the first step to contact us, and together, we will reach your company\'s goals.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'our_partner',
                'default' => 'We have a large scale group to support each other in this game, Join us to get the news as soon as possible and follow our latest announcements.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'sofin_stream',
                'default' => 'SOFIN Stream is a platform that allows millions of users from around the world to post, interact and donate directly to each other.

Using high-quality interactive technology, audiences can interact with streamers, along with unprecedented access to top streamers in the region. Join SOFIN Stream now to access the entertainment platform as well as become a content creator, earn money and more!',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'sofin_music',
                'default' => 'With SOFIN Music as a music and podcast app, you can stream millions of songs, albums and original podcasts anytime, anywhere!

At SOFIN Music, we provide a music and podcast listening platform where you can explore a treasure trove of playlists and become a fellow creator on the platform to satisfy your passion and earn money.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'about_us',
                'default' => 'For the past several years, we have helped music and entertainment businesses create their brand presence and achieve their revenue goals.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'promoting_1',
                'default' => 'Promoting a creativity culture.
Bringing motivation for new investments.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'promoting_2',
                'default' => 'We constantly welcome changes in technology, thereby providing optimal solutions for each activity and project, especially in the field of creation and application of AI to improve data mining efficiency.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'mission',
                'default' => 'We provide a suite of innovative AI and Web3 platforms to enhance and monetize social media presence, aiming to revolutionize the music and entertainment industry while unleashing the immense potential of sustainable growth with online revenues for individuals and businesses.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'vision',
                'default' => 'We pioneer the applications of advanced technologies to support online resource exploitation with a passion to architect sustainable growth and speedily unlock the full potential of new brands, new ecosystems, and emerging visionaries around the world.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'blog_wordpress',
                'default' => 'https://flipboarddaily.online/',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'stream_platform',
                'default' => 'https://stream.sofinnetwork.com/',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'facebook',
                'default' => '/',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'linkedin',
                'default' => '/',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'key' => 'instagram',
                'default' => '/',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'twitter',
              'default' => '/',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'youtube',
              'default' => '/',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'multi_sector_strategic_partners',
              'default' => '20',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'developing_projects',
              'default' => '15',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'hi_speed_servers',
              'default' => '3K',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'employees',
              'default' => '200',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'years_in_business',
              'default' => '10',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'badge',
              'default' => '/assets/images/circle-pin.png',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'menu_background',
              'default' => '/assets/images/off-canvas-cover.png',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'banner_about_us',
              'default' => '/assets/images/about-banner.png',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'banner_about_us_1_img',
              'default' => '/assets/images/bg-5.png',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'banner_about_us_2_img',
              'default' => '/assets/images/bg-6.png',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'banner_ecosystem',
              'default' => '/assets/images/banner1.png',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'banner_music',
              'default' => '/assets/images/bg-3.png',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'career_background',
              'default' => '/assets/images/off-canvas-cover.png',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
            [
              'key' => 'blog_background',
              'default' => '/assets/images/bg-8.png',
              'created_at' =>  \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ],
        ];
        Setting::factory()->createMany($settings);
    }
}
