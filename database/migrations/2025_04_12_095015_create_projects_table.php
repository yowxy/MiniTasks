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
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->uuid('department_id');
            $table->string('name');
            $table->dateTime('start_date');
            $table->boolean('is_active')->default(true);
            $table->json('metadata')->nullable(); // custom detail tambahan
            $table->string('file_path'); // path file PDF (100–500kb)
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};