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
        Schema::create('workingtimes', function (Blueprint $table) {
            $table->id();
            $table->string('student_cif')->unique();
            $table->string('student_name');
            $table->boolean('hrs_reached')->default(0);
            $table->unsignedInteger('hour_num');
            $table->string('hr_event');
            $table->dateTime('hr_registered_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workingtimes');
    }
};
