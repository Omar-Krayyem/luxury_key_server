<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->integer('isImage');
            $table->timestamps();
            $table->unsignedBigInteger('gorup_id')->nullable();
            $table->unsignedBigInteger('sender_id');
            $table->unsignedBigInteger('receiver_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
