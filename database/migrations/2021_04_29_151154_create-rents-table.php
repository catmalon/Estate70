<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->boolean('state')->default(1);
            $table->integer('size');
            $table->integer('room');
            $table->enum('type',['獨立套房','分租套房','雅房','整層住家','獨棟']);
            $table->integer('price');
            $table->integer('floor');
            $table->json('photo')->nullable();
            $table->string('location_city');
            $table->string('location_detail');
            $table->foreignId('landlord_id')->constrained('landlords')->cascadeOnDelete();
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
        Schema::dropIfExists('rents');
    }
}
