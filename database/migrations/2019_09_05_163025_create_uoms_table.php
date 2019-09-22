<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uoms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->boolean('is_delete');
            $table->timestamps();
        });
        Schema::create('group_uoms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->boolean('is_delete');
            $table->timestamps();
        });
        Schema::create('group_define_uoms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uom_id')->unsigned();
            $table->foreign('uom_id')->references('id')->on('uoms')->onDelete('cascade');
            $table->integer('group_uom_id')->unsigned();
            $table->foreign('group_uom_id')->references('id')->on('group_uoms')->onDelete('cascade');
            $table->decimal('alt_qty', 18, 2);
            $table->string('operator');
            $table->decimal('base_qty', 18, 2);
            $table->boolean('is_delete');
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
        Schema::dropIfExists('uoms');
        Schema::dropIfExists('group_uoms');
        Schema::dropIfExists('group_define_uoms');
    }
}
