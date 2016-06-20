<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientVisitEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_visit_employees', function (Blueprint $table) {
            $table->primary(array('patient_visit_id', 'employee_id'));

            // foreign keys
            $table->integer('patient_visit_id')->unsigned();
            $table->integer('employee_id')->unsigned();

            // datetimes
            $table->dateTime('date_start');
            $table->dateTime('date_end');

            // constraints
            $table->foreign('patient_visit_id')->references('id')->on('patient_visits')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');

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
        Schema::drop('patient_visit_employees');
    }
}
