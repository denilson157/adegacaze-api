<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressUser extends Migration
{
    public function up()
    {
        Schema::create('adress_user', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('adress_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adress_user');
    }
}
