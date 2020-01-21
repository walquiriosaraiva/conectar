<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkTables extends Migration
{

    public function up()
    {
        Schema::table('administrador', function ($table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');;
        });
    }

    public function down()
    {
        //
    }
}
