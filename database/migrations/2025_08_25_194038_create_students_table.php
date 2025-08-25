<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->date('dateOfBirth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('currentLevel')->nullable();
            $table->string('fieldOfStudy')->nullable();
            $table->string('password');
            $table->enum('role', ['student', 'admin'])->default('student');
            $table->timestamps();
        });
        Schema::create('student_password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('student_sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('student_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        Schema::dropIfExists('student_password_reset_tokens');
        Schema::dropIfExists('student_sessions');
    }
};
