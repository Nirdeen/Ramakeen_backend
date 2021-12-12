<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingaddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billingaddresses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('state');
            $table->integer('phone');
            $table->string('country');
            $table->string('email')->unique();
            $table->string('address');
            $table->integer('exp year');
            $table->integer('exp month');
            $table->integer('cvv');
            $table->integer('code');
            $table->string('name of credit card');
            $table->integer('credit card number');
            $table->unsignedBigInteger("wasata_id");
            $table->foreign('wasata_id')->references("id")
            ->on("wasatas")
            ->onUpdate("cascade")
            ->onDelete("cascade");
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
        Schema::dropIfExists('billingaddresses');
    }
}
