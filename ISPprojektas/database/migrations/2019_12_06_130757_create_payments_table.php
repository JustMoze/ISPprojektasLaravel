<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->unsignedBigInteger('rezervation_id')->unsigned()->nullable();
            $table->foreign('rezervation_id')->references('id')->on('rezervacijas')->onDelete('cascade');;
            $table->string('cardCode');
            $table->integer('cvv');
            $table->string('cardName');
            $table->Date('date');
            $table->float('amount');
            $table->string('bankName');
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
        Schema::dropIfExists('payments');
    }
}
