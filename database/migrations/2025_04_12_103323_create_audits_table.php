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
        Schema::create('audits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->uuid('users_id'); // ⬅️ WAJIB sebelum bikin foreign key
            $table->string('event'); // created, updated, deleted
            $table->morphs('auditable'); // auditable_type & auditable_id
            $table->json('old_values')->nullable();
            $table->json('new_values')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audits');
    }
};