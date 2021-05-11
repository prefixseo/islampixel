<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePixelRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pixel_requests', function (Blueprint $table) {
            $table->id();
            $table->string("boxid");
            $table->string("emoji_name");
            $table->string("country_id");
            $table->string("weburl");
            $table->string("title");
            $table->string("email");
            $table->integer("activated");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pixel_requests');
    }
}
