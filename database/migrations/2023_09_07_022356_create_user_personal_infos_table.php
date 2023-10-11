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
        Schema::create('user_personal_infos', function (Blueprint $table) {
            $table->id();
            $table->morphs('userPersonal');
            $table->string('Birthday');
            $table->string('Gender');
            $table->string('Nationality');
            $table->string('MaritalStatus');
            $table->string('NumberDependents');
            $table->string('MilitaryStatus');
            $table->string('License');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_personal_infos');
    }
};
