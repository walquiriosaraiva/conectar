<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUfTable extends Migration
{
    public function up()
    {
        Schema::create('uf', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_uf');
            $table->string('sig_uf');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('administrador');
    }
}
