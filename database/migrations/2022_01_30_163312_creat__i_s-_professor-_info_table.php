<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatISProfessorInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IS-Professor-Info_table', function (Blueprint $table) {
            $table->id();
            $table->string('Professor_Name',50);
            $table->string('Professor_degree',50);
            $table->string('Certificate',50);
            $table->string('Gender',50);
            $table->string('Professor_picture',50);

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
        Schema::dropIfExists('IS-Professor-Info_table');
    }
}
