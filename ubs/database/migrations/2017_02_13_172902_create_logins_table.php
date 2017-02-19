<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logins', function (Blueprint $table) {
            $table->integer('person_doctor_login')->unsigned();
            $table->foreign('person_doctor_login')
                          ->references('id')
                          ->on('people')
                          ->onDelete('cascade')
                          ->primary();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('sync');
            $table->rememberToken();
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
        Schema::dropIfExists('logins');
    }
}
