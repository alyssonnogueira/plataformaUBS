<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->string('cpf', 11)->unique();
            $table->date('birth');
            $table->string('rg', 10);
            $table->string('phone', 12);
            $table->string('email');
            $table->string('civil_status');
            $table->boolean('sync');
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')
                ->references('id')
                ->on('addresses')
                ->onDelete('cascade');
            $table->integer('ubs_id')->unsigned();
            $table->foreign('ubs_id')
                ->references('id')
                ->on('ubses');
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
        Schema::dropIfExists('persons');
    }
}
