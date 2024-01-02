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
        Schema::create('company_links', function (Blueprint $table) {
            $table->id();
            $table->morphs('complinks');
            $table->string('LinkedIn');
            $table->string('Facebook');
            $table->string('Twitter');
            $table->string('Behance');
            $table->string('Instagram');
            $table->string('GitHub');
            $table->string('StackOverflow');
            $table->string('YouTube');
            $table->string('Blog');
            $table->string('Website');
            $table->string('Other');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_links');
    }
};
