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
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('user_id', 3);
      $table->string('first_name', 50);
      $table->string('last_name', 50);
      $table->enum('gender', [1, 2]);
      $table->foreignId('position_id')->constrained();
      $table->foreignId('department_id')->constrained();
      $table->string('tel', 15)->nullable();
      $table->enum('role', [1, 2, 3])->default(3);
      $table->string('password', 255);
      $table->date('joined_at')->default(now());
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('users');
  }
};
