<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditions', function (Blueprint $table) {
            $table->increments('seqAudition');
            $table->integer('person_doctor')->unsigned();
            $table->foreign('person_doctor')
                          ->references('id')
                          ->on('persons');
            $table->integer('person_pacient')->unsigned();
            $table->foreign('person_pacient')
                          ->references('id')
                          ->on('persons');
            $table->string('nutrition', 45);
            $table->string('hearing', 45);
            $table->string('vision', 45);
            $table->string('humor_depression', 45);
            $table->string('cognition_memory', 45);
            $table->string('daily_activies', 45);
            $table->string('tumble', 45);
            $table->date('create_date');
            $table->date('update_date');
            $table->boolean('sync');
            $table->index(['person_doctor', 'person_pacient'])
                          ->primary();
            $table->softDeletes();
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
        Schema::dropIfExists('auditions');
    }
}
