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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->string('slug')->unique();
            $table->text('article');
            $table->string('feature_photo')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('category_id')->default(0);
            $table->unsignedInteger('division_id')->nullable();
            $table->unsignedInteger('district_id')->nullable();
            $table->unsignedInteger('upazila_id')->nullable();
            $table->boolean('isPublished')->default(true);
            $table->boolean('isFeature')->default(false);
            $table->timestamp('published_at');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('post_tag', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');
        });

        Schema::create('post_meta', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->string('key', 50);
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('post_meta');
    }
};
