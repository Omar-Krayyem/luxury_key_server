<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('bio')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password')->min(8);
            $table->string('profile_picture')->nullable();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
