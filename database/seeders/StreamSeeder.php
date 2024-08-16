<?php

namespace Database\Seeders;

use App\Models\Stream;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Stream::truncate();
        Schema::enableForeignKeyConstraints();
        Stream::create([
            'name' => 'Stream 1',
            'name_en' => 'Stream 1',
            'image' => '/storage/files/1/stream/stream1.jpg',
            'image_dark' => '/storage/files/1/stream/stream1.jpg',
            'link' => 'https://stream.sofinnetwork.com/channel/RM_WzmPpMVMet5N',
          ]);
          Stream::create([
            'name' => 'Stream 2',
            'name_en' => 'Stream 2',
            'image' => '/storage/files/1/stream/stream2.jpg',
            'image_dark' => '/storage/files/1/stream/stream2.jpg',
            'link' => 'https://stream.sofinnetwork.com/channel/RM_aXoh4VBfSf3e',
          ]);
          Stream::create([
            'name' => 'Stream 3',
            'name_en' => 'Stream 3',
            'image' => '/storage/files/1/stream/stream3.jfif',
            'image_dark' => '/storage/files/1/stream/stream3.jfif',
            'link' => 'https://stream.sofinnetwork.com/channel/RM_KuFPKFAv9EAu',
          ]);
          Stream::create([
            'name' => 'Stream 4',
            'name_en' => 'Stream 4',
            'image' => '/storage/files/1/stream/stream4.jfif',
            'image_dark' => '/storage/files/1/stream/stream4.jfif',
            'link' => 'https://stream.sofinnetwork.com/channel/RM_kA4cfjNKpQoF',
          ]);
          Stream::create([
            'name' => 'Stream 5',
            'name_en' => 'Stream 5',
            'image' => '/storage/files/1/stream/stream5.jpg',
            'image_dark' => '/storage/files/1/stream/stream5.jpg',
            'link' => 'https://stream.sofinnetwork.com/channel/RM_YUEzmMNpZGGG',
          ]);
          Stream::create([
            'name' => 'Stream 6',
            'name_en' => 'Stream 6',
            'image' => '/storage/files/1/stream/stream6.jpg',
            'image_dark' => '/storage/files/1/stream/stream6.jpg',
            'link' => 'https://stream.sofinnetwork.com/channel/RM_CLaAGXAKrqhd',
          ]);
          Stream::create([
            'name' => 'Stream 7',
            'name_en' => 'Stream 7',
            'image' => '/storage/files/1/stream/stream7.jpeg',
            'image_dark' => '/storage/files/1/stream/stream7.jpeg',
            'link' => 'https://stream.sofinnetwork.com/channel/RM_SM4wmoWyKBsv',
          ]);
    }
}
