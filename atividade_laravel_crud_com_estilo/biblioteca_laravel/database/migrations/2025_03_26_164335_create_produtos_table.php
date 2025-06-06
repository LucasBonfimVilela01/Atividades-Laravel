<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->decimal('valor');
            $table->integer('estoque');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}