<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientVisitRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_visit_rooms', function (Blueprint $table) {
            // foreign keys and the composite primary key
            $table->primary(array('patient_visit_id', 'date_enter'));
            $table->integer('patient_visit_id')->unsigned();
            $table->integer('room_id')->unsigned();



            // constraints
            $table->foreign('patient_visit_id')->references('id')->on('patient_visits')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');

            // datetimes
            $table->dateTime('date_enter');
            $table->dateTime('date_leave');

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
        Schema::drop('patient_visit_rooms');
    }
}
