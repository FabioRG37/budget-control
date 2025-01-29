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
        Schema::table('expense_reports', function (Blueprint $table) {
            $table->foreignId('category_id', 10, 2)->constrained()->onDelete('cascade');
            $table->decimal('total_expense', 10, 2);
            $table->year('year');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expense_reports', function (Blueprint $table) {
            $table->dropColumn(['category_id', 'total_expense', 'year']);
        });
    }
};
