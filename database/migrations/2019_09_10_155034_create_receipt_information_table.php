<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('address');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('logo');
            $table->string('note_kh');
            $table->string('note_en');
            $table->string('branch_name');
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
        Schema::dropIfExists('receipt_information');
    }
}
