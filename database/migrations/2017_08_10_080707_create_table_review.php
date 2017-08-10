<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table){

            $table->increments('id');
            $table->string('name');
            $table->text('review');
            $table->text('reply')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->boolean('is_pinned')->default(0);
            $table->timestamp('reviewed_at');
            $table->timestamp('replied_at')->nullable();
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
        Schema::dropIfExists('review');
    }
}
