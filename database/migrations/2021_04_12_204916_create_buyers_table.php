<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->string('buyer_name');
            $table->string('buyer_number1');
            $table->string('buyer_number2');
            $table->string('buyer_city');
            $table->string('buyer_area');
            $table->text('buyer_address');
            $table->text('buyer_payment');
            $table->bigInteger('buyerId')->unsigned();
            $table->timestamps();
            $table->foreign('buyerId')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyers');
    }
}
