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
        Schema::create('user_education_degrees', function (Blueprint $table) {
            $table->id();
            $table->morphs('useredudeg');
            $table->string('DegreeLevel');
            $table->string('Country');
            $table->string('University')->nullable();
            $table->string('FieldStudy');
            $table->string('StartYear')->nullable();
            $table->string('EndYear');
            $table->string('Grade');
            $table->string('StudiedSubjects')->nullable();
            $table->string('Additional')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_education_degrees');
    }
};
