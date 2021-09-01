<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('qualification');
            $table->string('description2');
            $table->string('birthday');
            $table->string('siteweb');
            $table->string('phone');
            $table->string('city');
            $table->integer('age');
            $table->string('degree',40);
            $table->string('email');
            $table->string('status',30);
            $table->text('description3');
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
        Schema::dropIfExists('abouts');
    }
}
