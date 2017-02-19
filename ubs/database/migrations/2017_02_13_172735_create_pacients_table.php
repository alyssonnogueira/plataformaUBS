<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->integer('person_pacient')
                  ->unsigned()
                  ->primary();
            $table->foreign('person_pacient')
                  ->references('id')
                  ->on('people');
            $table->string('sus', 45);
            $table->float('height');
            $table->float('weight');
            $table->string('skinColor');
            $table->string('locomotionProblem');
            $table->boolean('bedridden');
            $table->boolean('osteoporosis');
            $table->boolean('depression');
            $table->boolean('insanity');
            $table->boolean('needCare');
            $table->string('armPerimeter');
            $table->string('dm', 45);
            $table->string('has', 45);
            $table->boolean('bookSenior');
            $table->boolean('oralHealthRisk');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacients');
    }
}
