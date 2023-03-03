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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('st_name');
            $table->string('st_gender');
            $table->string('st_hobby');
            $table->bigInteger('st_mobile');
            $table->string('st_email');
            $table->string('st_password');
            $table->string('st_bloodgroup');
            $table->string('st_address');
            $table->string('st_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
