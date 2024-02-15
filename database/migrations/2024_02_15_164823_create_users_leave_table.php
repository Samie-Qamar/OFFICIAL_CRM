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
        Schema::create('users_leave', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->enum('type',['emergency','cascual','sick']);
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->integer('total_days')->nullable();
            $table->string('remarks')->nullable();
            $table->enum('status',['pending','approved'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_leave');
    }
};
