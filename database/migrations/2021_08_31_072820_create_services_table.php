<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('subtitle1');
            $table->string('sub1description');
            $table->string('subtitle2');
            $table->string('sub2description');
            $table->string('subtitle3');
            $table->string('sub3description');
            $table->string('subtitle4');
            $table->string('sub4description');
            $table->string('subtitle5');
            $table->string('sub5description');
            $table->string('subtitle6');
            $table->string('sub6description');
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
        Schema::dropIfExists('services');
    }
}
