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
    Schema::create('employee_leaves', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->onDelete('cascade');
      $table->integer('annual_leave')->default(0);
      $table->integer('annual_leave_half')->default(0);
      $table->integer('accidental_leave')->default(0);
      $table->integer('sick_leave')->default(0);
      $table->integer('special_leave')->default(0);
      $table->integer('unpaid_leave')->default(0);
      $table->integer('maternity_leave')->default(0);
      $table->integer('compenstate_leave')->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('employee_leaves');
  }
};
