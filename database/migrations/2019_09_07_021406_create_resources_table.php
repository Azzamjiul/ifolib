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
            $table->string('title');
            $table->integer('subject_id');
            $table->text('description');
            $table->string('creator');
            $table->string('source');
            $table->string('publisher');
            $table->date('date');
            $table->integer('contributor_id');
            $table->string('rights');
            $table->string('format');
            $table->string('language');
            $table->integer('type_id');
            $table->string('file');
            $table->integer('collection_id');
            $table->text('citation');
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
