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
        Schema::create('invoices', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->index();
            $table->string('invoice_number', 45)->nullable();
            $table->string('invoice_date', 45)->nullable();
            $table->string('invoice_due_date', 45)->nullable();
            $table->string('invoice_status', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
