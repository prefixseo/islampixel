<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialLinksToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("social_fb")->nullable();
            $table->string("social_insta")->nullable();
            $table->string("social_yt")->nullable();
            $table->string("social_twt")->nullable();
            $table->string("social_github")->nullable();
            $table->string("social_lin")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("social_fb")->nullable();
            $table->string("social_insta")->nullable();
            $table->string("social_yt")->nullable();
            $table->string("social_twt")->nullable();
            $table->string("social_github")->nullable();
            $table->string("social_lin")->nullable();
        });
    }
}
