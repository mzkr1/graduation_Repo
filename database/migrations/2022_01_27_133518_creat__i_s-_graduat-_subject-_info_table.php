<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatISGraduatSubjectInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IS-Graduat-Subject-Info_table', function (Blueprint $table) {
            $table->id();
            $table->string('Subject_Name',50);
            $table->string('Subject_Synopsis',300);
            $table->string('Number_Of_Units',50);
            $table->string('Professor_Number',50);

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
        Schema::dropIfExists('IS-Graduat-Subject-Info_table');
    }
}
