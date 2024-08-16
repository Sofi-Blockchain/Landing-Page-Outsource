<?php

namespace Database\Seeders;

use App\Models\Director;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Scalar\MagicConst\Dir;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Director::truncate();
        Schema::enableForeignKeyConstraints();
        Director::factory()->count(1)->create();
        Director::create([
             //
        ]);
    }
}
