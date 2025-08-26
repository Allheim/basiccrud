<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('guest_house_id')->nullable();
            $table->foreign('guest_house_id')->references('id')->on('guest_houses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
            $table->dropForeign(['guest_house_id']);
            $table->dropColumn('guest_house_id');
        });
    }
};
