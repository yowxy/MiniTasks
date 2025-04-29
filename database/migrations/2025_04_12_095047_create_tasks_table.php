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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            // $table->foreign('projects_id')->references('id')->on('projects')->onDelete('cascade');
            // $table->foreign('assigned_to')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();  
            // $table->foreignId('assigned_to')->constrained()->cascadeOnDelete();    
            
            $table->string('title');
            $table->dateTime('due_date');
            $table->boolean('is_completed')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};