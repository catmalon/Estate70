<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rent_id')->constrained('rents');
            $table->boolean('air');
            $table->boolean('lundry');
            $table->boolean('refrigerator');
            $table->boolean('gas');
            $table->boolean('bed');
            $table->boolean('closet');
            $table->boolean('sofa');
            $table->boolean('balcony');
            $table->boolean('elevator');
            $table->boolean('pet');
            $table->boolean('TV');
            $table->boolean('tvCable');
            $table->boolean('wifi');
            $table->boolean('notRooftop');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipments');
    }
}
