<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_path');
            $table->integer('content_id')->unsigned()->index();
            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
            $table->date('created_at')->useCurrent();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_images');
    }
}
