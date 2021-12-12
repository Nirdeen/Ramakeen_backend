<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHgzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hgzs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->enum('khdma',  ['استشارة قانونية', 'مرافعة', 'صياغة عقوداو مراجعتها او تسجيلها','وساطة او تحكيم','توثيق','اخري'])->default('استشارة قانونية');
            
            $table->integer('phone');
            $table->string('email')->unique();
            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')->references("id")
            ->on("users")
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
        Schema::dropIfExists('hgzs');
    }
}
