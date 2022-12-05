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
        Schema::table('trainer', function (Blueprint $table) {
            $table->unsignedBigInteger('jadwal_id')->after('id')->nullable();
            $table->foreign('jadwal_id')->references('id')->on('jadwal')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainer', function (Blueprint $table) {
            $table->dropForeign('jadwal_id');
            $table->dropColumn('jadwal_id');
        });
    }
};