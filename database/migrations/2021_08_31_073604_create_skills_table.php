<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('skill1');
            $table->integer('pourcent_skill1');
            $table->string('skill2');
            $table->integer('pourcent_skill2');
            $table->string('skill3');
            $table->integer('pourcent_skill3');
            $table->string('skill4');
            $table->integer('pourcent_skill4');
            $table->string('skill5');
            $table->integer('pourcent_skill5');
            $table->string('skill6');
            $table->integer('pourcent_skill6');
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
        Schema::dropIfExists('skills');
    }
}
