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
        Schema::create('certification', function (Blueprint $table) {
            $table->id();
            $table->char('ma_phi_cong', 5)->nullable(true);
            $table->foreign('ma_phi_cong')->references('ma_phi_cong')->on('pilot')->onDelete('cascade');
            $table->char('ma_phi_co', 5)->nullable(true);
            $table->foreign('ma_phi_co')->references('ma_phi_co')->on('aircraft')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certification');
    }
};
