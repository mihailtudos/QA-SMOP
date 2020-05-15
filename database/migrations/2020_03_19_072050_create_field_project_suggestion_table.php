<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldProjectSuggestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_project_suggestion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_suggestion_id');
            $table->unsignedBigInteger('field_id');
            $table->timestamps();

            $table->foreign('project_suggestion_id')->references('id')->on('project_suggestions')->onDelete('cascade');
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('field_suggestion');
    }
}
