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
            $table->string('moeilijkheidsgraad');
            $table->text('beschrijving');
            $table->string('intensiteit_id');
            $table->string('spelfase_id');
            $table->string('trainingsonderdeel_id');
            $table->string('uitvoering_id');
            $table->string('minimaleveldoppervlak_id');
            $table->string('minimalegroepsgrootte');
            $table->string('maximalegroepsgrootte');
            $table->string('duur');
            $table->text('organisatie');
            $table->string('keeper');
            $table->string('hesjes');
            $table->string('pilonnen');
            $table->string('dopjes');
            $table->string('goaltjes');
            $table->string('goals');
            $table->string('hulpmiddelen');
            $table->text('aandachtspunten');
            $table->text('fouten');
            $table->string('verzwaring');
            $table->string('doelgroep_id');
            $table->string('filmpje');
            $table->string('afbeelding');
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
