<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadeTable extends Migration
{
    public function up()
    {
        Schema::create('cidade', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_cidade');
            $table->unsignedInteger('uf_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('uf');
    }
}
