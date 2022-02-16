<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('amount');
            $table->string('description' , 200);
            $table->string('destinationFirstname' , 200);
            $table->string('destinationLastname' , 200);
            $table->bigInteger('destinationNumber');
            $table->integer('inquiryDate');
            $table->integer('inquirySequence');
            $table->integer('inquiryTime');
            $table->tinyText('message')->nullable();
            $table->integer('paymentNumber');
            $table->bigInteger('refCode');
            $table->string('sourceFirstname' , 200);
            $table->string('sourceLastname' , 200);
            $table->bigInteger('sourceNumber');
            $table->string('type' , 50);
            $table->integer('reasonDescription');
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
        Schema::dropIfExists('user_transactions');
    }
}
