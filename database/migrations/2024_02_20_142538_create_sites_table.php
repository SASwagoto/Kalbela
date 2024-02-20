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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('email')->nullable();
            $table->string('adv_email')->nullable();
            $table->string('phone_a')->nullable();
            $table->string('phone_b')->nullable();
            $table->string('adv_phone_a')->nullable();
            $table->string('adv_phone_b')->nullable();
            $table->string('mobile_a')->nullable();
            $table->string('mobile_b')->nullable();
            $table->string('adv_mobile_a')->nullable();
            $table->string('adv_mobile_b')->nullable();
            $table->string('fax_a')->nullable();
            $table->string('fax_b')->nullable();
            $table->string('address')->nullable();
            $table->string('copyright')->nullable();
            $table->string('footer_credit')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('site_icon')->nullable();
            $table->string('fb_links')->nullable();
            $table->string('yt_links')->nullable();
            $table->string('ln_links')->nullable();
            $table->string('x_links')->nullable();
            $table->string('inst_links')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
