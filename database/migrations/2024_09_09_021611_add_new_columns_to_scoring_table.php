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
        Schema::table('scoring', function (Blueprint $table) {
            // Add new columns after `larong_lahi`
            $table->integer('tag_of_war_men')->default(0)->after('larong_lahi');
            $table->integer('tag_of_war_women')->default(0)->after('tag_of_war_men');
            $table->integer('sack_race_men')->default(0)->after('tag_of_war_women');
            $table->integer('sack_race_women')->default(0)->after('sack_race_men');
            $table->integer('bakya_men')->default(0)->after('sack_race_women');
            $table->integer('bakya_women')->default(0)->after('bakya_men');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scoring', function (Blueprint $table) {
            $table->dropColumn([
                'tag_of_war_men',
                'tag_of_war_women',
                'sack_race_men',
                'sack_race_women',
                'bakya_men',
                'bakya_women',
            ]);
        });
    }
};