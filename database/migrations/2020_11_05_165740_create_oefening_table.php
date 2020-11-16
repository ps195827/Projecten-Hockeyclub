<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOefeningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oefening', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titel');
            $table->string('domein_id');
            $table->string('sector_id');
            $table->string('subsector_id');
            $table->string('leerfase_id');
            $table->string('moeilijkheidsgraad_id');
            $table->text('beschrijving');
            $table->string('spelfase_id');
            $table->string('trainingsonderdeel_id');
            $table->string('duur');
            $table->text('hulpmiddelen');
            $table->text('aandachtspunten');
            $table->string('werkvorm_id');
            $table->text('fouten');
            $table->text('makkelijkmaken');
            $table->text('moeilijkmaken');
            $table->text('tips');
            $table->string('afbeelding');
            $table->string('filmpje');
            $table->string('slug');
            $table->string('auteur');
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
        Schema::dropIfExists('oefening');
    }
}
