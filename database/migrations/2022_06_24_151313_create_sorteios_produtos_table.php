<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSorteiosProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteios_produtos', function (Blueprint $table) {
            $table->bigIncrements('sorteio_produtos_id')->unique();
            $table->unsignedBigInteger('sorteio_id');
            $table->unsignedBigInteger('produto_id');
            $table->boolean('is_comprado');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sorteio_id')->references('sorteio_id')->on('sorteios')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('produto_id')->references('produto_id')->on('produtos')
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
        Schema::dropIfExists('sorteios_produtos');
    }
}
