<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigInteger('connectly_id');
            $table->timestamps();

            $table->index('connectly_id', 'crudly_querly_connectly');
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
