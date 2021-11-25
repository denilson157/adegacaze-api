<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjustesCamposNulos extends Migration
{
    public function up()
    {
        Schema::table('adresses', function (Blueprint $table) {
            $table->string('complete')->nullable()->change();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->string('observation')->nullable()->change();
        });
    }

    
    public function down()
    {
    }
}
