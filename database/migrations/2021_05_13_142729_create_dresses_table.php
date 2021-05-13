<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dresses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->string('size', 4);
            $table->text('description')->nullable(); //nullable -> ovvero che, in questo caso, la descrizione posso anche non riempirla per forza con delle informazioni
            $table->float('price', 6, 2);   //1240,15 -> ovvero il prezzo sarà composto di 6 cifre, di cui 2 saranno decimali
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
        Schema::dropIfExists('dresses');
    }
}
