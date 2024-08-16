<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('case_study', function (Blueprint $table) {
            $table->string('name_en')->after('name');
            $table->text('description_en')->after('description');
            $table->string('image_dark')->nullable()->after('image');
            $table->string('video_dark')->nullable()->after('video');
            $table->string('yt_embed_url_dark')->nullable()->after('yt_embed_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('case_study', function (Blueprint $table) {
            //
        });
    }
};
