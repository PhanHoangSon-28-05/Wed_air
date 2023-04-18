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
        Schema::create('flight', function (Blueprint $table) {
            $table->char('ma_cb', 5)->primary();
            $table->char('noi_xp', 15)->nullable(true);
            $table->char('noi_den', 15)->nullable(true);
            $table->dateTime('gio_xp');
            $table->dateTime('gio_den');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight');
    }
};
