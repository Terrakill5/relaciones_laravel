<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('number');


           /*  $table->unsignedBigInteger('user_id');
            $table->foreign('user_id') //Esta linea hace referencia al campo anterior que quiero referenciar
            ->references('id') //esta linea referencia al campo que quiero hacer referencia en la otra tabla
            ->on('users') //aqui aplico el nombre de esa otra tabla
            ->onDelete('cascade') //en esta linea digo que si se llega a borrar el usuario que hace referencia, esto tambien se borra
            ->onUpdate('cascade'); //En esta linea digo que si se cambia el id del usuario que referencia, se actualiza la referencia en este dato
 */

            //Para hacer lo anterior se reduce en esto

            $table->foreignId('user_id') //en esta linea se sigue la convencion de usar primero el nombre de la tabla y luego el campo a referenciar
            ->constrained()
            ->onDelete('cascade') //a partir de aca igual a todo lo demas
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
