<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            //Definicion de llave foranea
            $table->unsignedBigInteger('user_id');//Para que sea del mismo tipo de dato que el de la otra tabla
            $table->foreign('user_id')->on('users')->references('id');//Llave foranea de la tabla users que apunta al id
            
            $table->string('number_account');
            $table->date('date_open');
            $table->string('status')->comment('active,inactiva');//Se pone un comentario, para saber que puede tener ese campo
            $table->float('balance');
            $table->string('type')->comment('ahorros, corriente');
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
        Schema::dropIfExists('bank_accounts');
    }
};
