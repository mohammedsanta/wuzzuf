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
        Schema::create('user_career_interests', function (Blueprint $table) {
            $table->id();
            $table->morphs('usercareer');
            $table->string('CareerLevel');
            $table->string('TypesJobsYouOpen');
            $table->longText('JobTitle');
            $table->longText('CategoriesInterested');
            $table->string('MinimumSalary');
            $table->string('HideMinimum')->nullable();
            $table->string('Country');
            $table->string('CurrentJobSearchStatus');
            $table->string('CompaniesFindMe')->nullable();
            $table->string('ProfilePublic')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_career_interests');
    }
};
