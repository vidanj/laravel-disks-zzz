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
        Schema::create('agents_owned', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('agents_id')->constrained();
            $table->foreignId('disks_id_1')->constrained();
            $table->foreignId('disks_id_2')->constrained();
            $table->foreignId('disks_id_3')->constrained();
            $table->foreignId('disks_id_4')->constrained();
            $table->foreignId('disks_id_5')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents_owned');
    }
};
