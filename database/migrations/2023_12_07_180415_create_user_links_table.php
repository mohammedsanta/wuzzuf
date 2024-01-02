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
        Schema::create('user_links', function (Blueprint $table) {
            $table->id();
            $table->morphs('userlink');
            $table->string('LinkedIn')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('Twitter')->nullable();
            $table->string('Behance')->nullable();
            $table->string('Instagram')->nullable();
            $table->string('GitHub')->nullable();
            $table->string('Overflow')->nullable();
            $table->string('YouTube')->nullable();
            $table->string('Blog')->nullable();
            $table->string('Website')->nullable();
            $table->string('Other')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_links');
    }
};
