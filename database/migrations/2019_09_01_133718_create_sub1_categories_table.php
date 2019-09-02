<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSub1CategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub1_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cat_id');
            $table->string('name');
            $table->string('text_color');
            $table->string('background_color');
            $table->string('icon');
            $table->text('remark');
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
        Schema::dropIfExists('sub1_categories');
    }
}
