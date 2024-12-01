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
            $table->bigInteger('user_id')->nullable();
            $table->string('categories')->nullable();
            $table->string('title')->nullable();
            $table->string('project_size')->nullable();
            $table->longText('description')->nullable();
            $table->longText('attachments')->nullable();
            $table->string('budget')->nullable();
            $table->text('location')->nullable();
            $table->longText('category_names')->nullable();
            $table->enum('status', ['Pending', 'Active', 'In Order', 'Draft', 'Finish', 'Cancel'])->default('Pending');
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
