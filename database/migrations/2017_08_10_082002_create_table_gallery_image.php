<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGalleryImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_image', function (Blueprint $table){

            $table->increments('id');
            $table->unsignedInteger('gallery_id');
            $table->string('url');
            $table->string('title')->nullable();
            $table->boolean('is_cover')->default(0);
            $table->timestamps();

            $table->foreign('gallery_id')
                ->references('id')
                ->on('gallery')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_image');
    }
}
