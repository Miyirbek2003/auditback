<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('slide_id')->nullable();
            // $table->integer('slide_id')->unsigned()->index();
            $table->foreign('slide_id')->references('id')->on('slides')->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('inn')->nullable();
            $table->string('period_start')->nullable();
            $table->string('period_end')->nullable();
            $table->string('end_date')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('slide_translations');
    }
}
