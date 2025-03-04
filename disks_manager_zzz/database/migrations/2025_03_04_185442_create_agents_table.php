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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->double('hp');
            $table->double('def');
            $table->double('atk');
            $table->double('impact');
            $table->double('crit_rate');
            $table->double('crit_dmg');
            $table->double('anomaly_mastery');
            $table->double('anomaly_proficiency');
            $table->double('pen');
            $table->double('pen_ratio');
            $table->double('energy');
            $table->double('energy_regen');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
