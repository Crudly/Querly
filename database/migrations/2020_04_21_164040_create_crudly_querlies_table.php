<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Crudly\Connectly\Connectly;

class CreateCrudlyQuerliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crudly_querlies', function (Blueprint $table) {
            $table->id();
            $table->json('config');
            $table->unsignedBigInteger('connectly_id');
            $table->foreign('connectly_id')->references('id')->on(with(new Connectly)->getTable());
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
        Schema::dropIfExists('crudly_querlies');
    }
}
