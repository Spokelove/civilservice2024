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
            $table->integer('additional_points')->nullable()->after('volleyball_women'); // Add the new column after 'volleyball_men'
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
            $table->dropColumn('additional_points'); // Remove the column if rolling back
        });
    }
};
