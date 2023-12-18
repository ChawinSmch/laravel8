<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyfavoritefootballerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myfavoritefootballer', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('Number')->nullable();
            $table->float('Height')->nullable();
            $table->string('Country')->nullable();
            $table->date('Age')->nullable();
            $table->text('Skill')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('myfavoritefootballer');
    }
}
