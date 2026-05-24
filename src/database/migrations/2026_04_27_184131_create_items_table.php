<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('price');
        $table->string('brand_name')->nullable();
        $table->text('description')->nullable();
        $table->string('condition')->nullable();
        $table->string('image_url')->nullable();
        $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('items');
    }
}
