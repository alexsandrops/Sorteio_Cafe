<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSorteiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteios', function (Blueprint $table) {
            $table->bigIncrements('sorteio_id')->unique();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('datas_id');
            $table->date('compras_final');
            $table->enum('status', ['OK', 'Pendente']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('users_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('datas_id')->references('datas_id')->on('data_sorteios')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sorteios');
    }
}
