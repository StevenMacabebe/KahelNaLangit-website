<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('donation_channels', function (Blueprint $table) {
        $table->id();
        $table->text('guidelines')->nullable();
        $table->string('bank1_name')->nullable();
        $table->string('bank1_account_name')->nullable();
        $table->string('bank1_account_number')->nullable();
        $table->string('bank2_name')->nullable();
        $table->string('bank2_account_name')->nullable();
        $table->string('bank2_account_number')->nullable();
        $table->string('gcash_name')->nullable();
        $table->string('gcash_number')->nullable();
        $table->string('gcash_qr')->nullable();
        $table->foreignId('updated_by')->nullable()->constrained('admins')->onDelete('set null');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation_channels');
    }
};
