<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_visits', function (Blueprint $table) {
            $table->increments('id');

            // foreign keys
            $table->integer('patient_id')->unsigned();

            // text
            $table->text('description');

            // datetimes
            $table->dateTime('date_arrival');
            $table->dateTime('date_discharged');

            // booleans
            $table->boolean('emergency');

            // constraints
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

            // timestamps
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
        Schema::drop('patient_visits');
    }
}
