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
        Schema::create('user_experiences', function (Blueprint $table) {
            $table->id();
            $table->morphs('userexperience');
            $table->string('ExperienceType');
            $table->string('JobTitle');
            $table->string('JobCategory');
            $table->string('CompanyName');
            $table->string('StartingSinceMonth');
            $table->string('StartingSinceYear');
            $table->string('EndMonth')->nullable();
            $table->string('EndYear')->nullable();
            $table->string('CurrentlyWork')->nullable();
            $table->string('Description')->nullable();
            $table->string('Careerlevel');
            $table->string('Country');
            $table->string('CompanySize');
            $table->string('CompanyIndustry');
            $table->string('CompanyWebsite')->nullable();
            $table->string('Achievements')->nullable();
            $table->string('StartingSalary')->nullable();
            $table->string('EndingSalary')->nullable();
            $table->string('Currency')->nullable();
            $table->string('Period')->nullable();
            $table->string('SalaryInfo')->nullable();
            $table->string('HideSalary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_experiences');
    }
};
