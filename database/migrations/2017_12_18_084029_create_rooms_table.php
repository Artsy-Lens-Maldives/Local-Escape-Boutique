<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('price_night')->nullable();
            $table->string('short_description')->nullable();
            
            $table->string('facilities')->nullable();
            $table->longText('description')->nullable();
            
            $table->string('max_adults')->nullable();
            $table->string('max_child')->nullable();
            $table->string('beds')->nullable();

            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('cancellation_policy')->nullable();
            $table->string('children_bed_policy')->nullable();
            $table->string('pets_policy')->nullable();

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
        Schema::dropIfExists('rooms');
    }
}
