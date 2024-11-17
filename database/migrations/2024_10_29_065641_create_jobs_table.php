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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('project_size')->nullable();
            $table->longText('description')->nullable();
            $table->string('attacments')->nullable();
            $table->string('budget')->nullable();
            $table->enum('status', ['Active', 'In Order', 'Draft', 'Finish', 'Cancel'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
