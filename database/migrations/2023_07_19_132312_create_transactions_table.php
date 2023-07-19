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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('campaign_id');
            $table->bigInteger('donor_id')->nullable();
            $table->bigInteger('currency_id');
            $table->bigInteger('payment_method_id');
            $table->bigInteger('pledge_id')->nullable();
            $table->string('payment_reference');
            $table->double('amount', 10,2);
            $table->string('gateway');
            $table->date('payment_date');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
