<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playeds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artist_id');
            $table->unsignedBigInteger('track_id');
            $table->unsignedBigInteger('album_id');
            $table->foreign('album_id')->on('albums')->references('id')->onDelete('cascade');
            $table->foreign('artist_id')->on('artists')->references('id')->onDelete('cascade');
            $table->foreign('track_id')->on('tracks')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('playeds');
    }
}
