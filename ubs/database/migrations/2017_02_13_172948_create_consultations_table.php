<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->increments('seqConsultation');
            $table->integer('person_doctor')->unsigned();
            $table->foreign('person_doctor')
                          ->references('id')
                          ->on('people');
            $table->integer('person_pacient')->unsigned();
            $table->foreign('person_pacient')
                          ->references('id')
                          ->on('people');
            $table->string('blood_presure', 45);
            $table->float('weight');
            $table->string('observations');
            $table->string('physical_exam');
            $table->string('foot_exam');
            $table->date('created_date');
            $table->date('updated_date');
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
        Schema::dropIfExists('consultations');
    }
}
