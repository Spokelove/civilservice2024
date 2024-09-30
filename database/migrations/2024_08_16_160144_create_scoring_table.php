<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('scoring', function (Blueprint $table) {
            $table->id();
            $table->string('cluster'); // Cluster or category
            $table->string('logo')->nullable(); // Path or URL to the logo image
            $table->integer('best_in_parade')->nullable(); // Score for Best in Parade
            $table->integer('banner_pulling')->nullable(); // Score for Banner Pulling
            $table->integer('cheerdance')->nullable(); // Score for Cheerdance
            $table->integer('larong_lahi')->nullable(); // Score for Larong Lahi
            $table->integer('basketball_men')->nullable(); // Score for Basketball Men
            $table->integer('basketball_women')->nullable(); // Score for Basketball Women
            $table->integer('badminton_men')->nullable(); // Score for Badminton Men
            $table->integer('badminton_women')->nullable(); // Score for Badminton Women
            $table->integer('badminton_mixed')->nullable(); // Score for Badminton Mixed
            $table->integer('chess_men')->nullable(); // Score for Chess Men
            $table->integer('chess_women')->nullable(); // Score for Chess Women
            $table->integer('dart_men')->nullable(); // Score for Dart Men
            $table->integer('dart_women')->nullable(); // Score for Dart Women
            $table->integer('dart_mixed')->nullable(); // Score for Dart Mixed
            $table->integer('mr_civil_service')->nullable(); // Score for Mr. Civil Service
            $table->integer('miss_civil_service')->nullable(); // Score for Miss Civil Service
            $table->integer('table_tennis_men')->nullable(); // Score for Table Tennis Men
            $table->integer('table_tennis_women')->nullable(); // Score for Table Tennis Women
            $table->integer('table_tennis_mixed')->nullable(); // Score for Table Tennis Mixed
            $table->integer('volleyball_men')->nullable(); // Score for Volleyball Men
            $table->integer('volleyball_women')->nullable(); // Score for Volleyball Women

            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scoring');
    }
};
