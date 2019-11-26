<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->integer('subject_id')->nullable();
            $table->text('description')->nullable();
            $table->string('creator')->nullable();
            $table->string('source')->nullable();
            $table->string('publisher')->nullable();
            $table->date('date')->nullable();
            $table->integer('contributor_id')->nullable();
            $table->string('rights')->nullable();
            $table->string('format')->nullable();
            $table->string('language')->nullable();
            $table->integer('type_id')->nullable();
            $table->string('file')->nullable();
            $table->string('image')->nullable();
            $table->integer('collection_id')->nullable();
            $table->text('citation')->nullable();
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
        Schema::dropIfExists('resources');
    }
}
