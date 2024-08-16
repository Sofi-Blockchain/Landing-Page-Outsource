<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        CaseStudy::truncate();
        Schema::enableForeignKeyConstraints();
        CaseStudy::create([
            'name' => 'SOFIN Foundation',
            'name_en' => 'SOFIN Foundation',
            'description' => 'The integrated system of AI and Web3 for the future Social platforms. #Social #Web3 #AI',
            'description_en' => 'The integrated system of AI and Web3 for the future Social platforms. #Social #Web3 #AI',
            'video' => '/storage/files/1/casestudy/video/story3.webm',
            'video_dark' => '/storage/files/1/casestudy/video/story3.webm',
            'status' => '1',
        ]);
        CaseStudy::create([
            'name' => 'Music',
            'name_en' => 'Music',
            'description' => 'STRATEGIC COOPERATION PRODUCT WITH SOFIN NETWORK. Congratulations to the #1 Hit Vietnamese Singer Tang Duy Tan having succeeded bringing the comeback product "Cat Doi Noi Sau" into the World Music Chart and officially became one of the first Vietnamese artists who has the most Vietnamese songs reaching out to the world via SOFIN AI ads engine.',
            'description_en' => 'STRATEGIC COOPERATION PRODUCT WITH SOFIN NETWORK. Congratulations to the #1 Hit Vietnamese Singer Tang Duy Tan having succeeded bringing the comeback product "Cat Doi Noi Sau" into the World Music Chart and officially became one of the first Vietnamese artists who has the most Vietnamese songs reaching out to the world via SOFIN AI ads engine.',
            'image' => '/storage/files/1/casestudy/image/cdns.png',
            'image_dark' => '/storage/files/1/casestudy/image/cdns.png',
            'status' => '1',
        ]);
        CaseStudy::create([
            'name' => 'Farm Me',
            'name_en' => 'Farm Me',
            'description' => 'We created FARM Me. It is a fantasy metaverse game exploring all aspects of "Play, Connect, Experience, Earn" for multiplayer to experience wholeset of the first immersive farm game with a battle-to-survive element and expanded NFT Metaverse world of 9 Clouds World.',
            'description_en' => 'We created FARM Me. It is a fantasy metaverse game exploring all aspects of "Play, Connect, Experience, Earn" for multiplayer to experience wholeset of the first immersive farm game with a battle-to-survive element and expanded NFT Metaverse world of 9 Clouds World.',
            'yt_embed_url' => 'https://www.youtube.com/watch?v=7kb5zMzJdlM',
            'yt_embed_url_dark' => 'https://www.youtube.com/watch?v=7kb5zMzJdlM',
            'status' => '1',
        ]);
        CaseStudy::create([
            'name' => 'SOFIN Network',
            'name_en' => 'SOFIN Network',
            'description' => 'Say hi! — we’ are SOFIN Network.
            We ’re SOFIN Network. We ’ve created next-generation AI technologies for online creativity via global collaborations with content creators to achieve an optimal level of sustainable revenue generation.',
            'description_en' => 'Say hi! — we’ are SOFIN Network.
            We ’re SOFIN Network. We ’ve created next-generation AI technologies for online creativity via global collaborations with content creators to achieve an optimal level of sustainable revenue generation.',
            'video' => '/storage/files/1/casestudy/video/introduce.webm.crdownload',
            'video_dark' => '/storage/files/1/casestudy/video/introduce.webm.crdownload',
            'status' => '1',
        ]);
    }
}
