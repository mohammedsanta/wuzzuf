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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('job_id')->constrained('jobs');
            $table->morphs('jobDetailsAble');
            $table->string('ExperienceNeeded');
            $table->string('CareerLevel');
            $table->string('EducationLevel');
            $table->string('Salary');
            $table->string('JobCategories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};
