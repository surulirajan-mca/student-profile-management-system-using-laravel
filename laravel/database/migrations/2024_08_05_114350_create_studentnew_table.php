<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentnewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentnew', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('name', 50);
            $table->string('email', 50);
            $table->integer('mobile');
            $table->integer('age');
            $table->string('department', 20);
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
        Schema::dropIfExists('studentnew');
    }
}
