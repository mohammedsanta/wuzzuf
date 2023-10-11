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
        Schema::create('user_num_locations', function (Blueprint $table) {
            $table->id();
            $table->morphs('userNumLocation');
            $table->string('Country');
            $table->string('City');
            $table->string('Area');
            $table->string('PostalCode');
            $table->string('MobileNumber');
            $table->string('AlternativeNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_num_locations');
    }
};
