<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            // primary key
            $table->increments('id');

            // foreign keys
            $table->integer('department_id')->unsigned();
            $table->integer('user_id')->unsigned();

            // strings
            $table->string('first_name', 50);
            $table->string('last_name', 50);

            // $table->string('emailadres', 50);
            // $table->string('username', 50);
            // $table->string('password', 50);

            // constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            
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
        Schema::drop('employees');
    }
}
