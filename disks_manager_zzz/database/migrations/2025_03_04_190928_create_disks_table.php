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
        Schema::create('disks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('sets_id')->constrained();

            $table->integer('level');
            $table->string('slot');
            $table->string('main_stat');
            $table->double('main_stat_value');
            $table->string('sub_stat_1');
            $table->string('sub_stat_2');
            $table->string('sub_stat_3');
            $table->string('sub_stat_4');
            $table->double('sub_stat_1_value');
            $table->double('sub_stat_2_value');
            $table->double('sub_stat_3_value');
            $table->double('sub_stat_4_value');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disks');
    }
};
