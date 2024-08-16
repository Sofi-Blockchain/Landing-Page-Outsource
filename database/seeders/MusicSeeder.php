<?php

namespace Database\Seeders;

use App\Models\Music;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MusicSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Schema::disableForeignKeyConstraints();
    Music::truncate();
    Schema::enableForeignKeyConstraints();
    Music::create([
      'name' => 'Chơi như tụi Mỹ',
      'name_en' => 'Choi Nhu Tui My',
      'author' => 'Andree',
      'author_en' => 'Andree',
      'image' => '/storage/files/1/idols/andree.png',
      'image_dark' => '/storage/files/1/idols/andree.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Tháng 4 là lời nói dối của em',
      'name_en' => 'Thang 4 la loi noi doi cua em',
      'author' => 'Bùi Anh Tuấn',
      'author_en' => 'Bui Anh Tuan',
      'image' => '/storage/files/1/idols/bat.png',
      'image_dark' => '/storage/files/1/idols/bat.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'À Lôi',
      'name_en' => 'A Loi',
      'author' => 'Double2T',
      'author_en' => 'Double2T',
      'image' => '/storage/files/1/idols/db2t.png',
      'image_dark' => '/storage/files/1/idols/db2t.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Ta cứ đi cùng nhau',
      'name_en' => 'Ta cu di cung nhau',
      'author' => 'Đen',
      'author_en' => 'Den',
      'image' => '/storage/files/1/idols/den.png',
      'image_dark' => '/storage/files/1/idols/den.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Nơi này có anh',
      'name_en' => 'Noi nay co anh',
      'author' => 'Sơn Tùng MTP',
      'author_en' => 'Son Tung MTP',
      'image' => '/storage/files/1/idols/mtp.png',
      'image_dark' => '/storage/files/1/idols/mtp.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Có chàng trai viết lên cây',
      'name_en' => 'Co chang trai viet len cay',
      'author' => 'Phan Mạnh Quỳnh',
      'author_en' => 'Phan Manh Quynh',
      'image' => '/storage/files/1/idols/pmq.png',
      'image_dark' => '/storage/files/1/idols/pmq.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Nếu lúc đó',
      'name_en' => 'Neu luc do',
      'author' => 'Tlinh',
      'author_en' => 'Tlinh',
      'image' => '/storage/files/1/idols/tlinh.png',
      'image_dark' => '/storage/files/1/idols/tlinh.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Cô gái đến ngày hôm qua',
      'name_en' => 'Co gai ngay hom qua',
      'author' => 'Vũ Cát Tường',
      'author_en' => 'Vu Cat Tuong',
      'image' => '/storage/files/1/idols/vct.png',
      'image_dark' => '/storage/files/1/idols/vct.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Chơi như tụi Mỹ',
      'name_en' => 'Choi Nhu Tui My',
      'author' => 'Andree',
      'author_en' => 'Andree',
      'image' => '/storage/files/1/idols/andree.png',
      'image_dark' => '/storage/files/1/idols/andree.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Tháng 4 là lời nói dối của em',
      'name_en' => 'Thang 4 la loi noi doi cua em',
      'author' => 'Bùi Anh Tuấn',
      'author_en' => 'Bui Anh Tuan',
      'image' => '/storage/files/1/idols/bat.png',
      'image_dark' => '/storage/files/1/idols/bat.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'À Lôi',
      'name_en' => 'A Loi',
      'author' => 'Double2T',
      'author_en' => 'Double2T',
      'image' => '/storage/files/1/idols/db2t.png',
      'image_dark' => '/storage/files/1/idols/db2t.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Ta cứ đi cùng nhau',
      'name_en' => 'Ta cu di cung nhau',
      'author' => 'Đen',
      'author_en' => 'Den',
      'image' => '/storage/files/1/idols/den.png',
      'image_dark' => '/storage/files/1/idols/den.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Nơi này có anh',
      'name_en' => 'Noi nay co anh',
      'author' => 'Sơn Tùng MTP',
      'author_en' => 'Son Tung MTP',
      'image' => '/storage/files/1/idols/mtp.png',
      'image_dark' => '/storage/files/1/idols/mtp.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Có chàng trai viết lên cây',
      'name_en' => 'Co chang trai viet len cay',
      'author' => 'Phan Mạnh Quỳnh',
      'author_en' => 'Phan Manh Quynh',
      'image' => '/storage/files/1/idols/pmq.png',
      'image_dark' => '/storage/files/1/idols/pmq.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Nếu lúc đó',
      'name_en' => 'Neu luc do',
      'author' => 'Tlinh',
      'author_en' => 'Tlinh',
      'image' => '/storage/files/1/idols/tlinh.png',
      'image_dark' => '/storage/files/1/idols/tlinh.png',
      'status' => '1'
    ]);
    Music::create([
      'name' => 'Cô gái đến ngày hôm qua',
      'name_en' => 'Co gai ngay hom qua',
      'author' => 'Vũ Cát Tường',
      'author_en' => 'Vu Cat Tuong',
      'image' => '/storage/files/1/idols/vct.png',
      'image_dark' => '/storage/files/1/idols/vct.png',
      'status' => '1'
    ]);
  }
}