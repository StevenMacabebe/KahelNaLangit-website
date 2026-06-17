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
    Schema::create('wishlist', function (Blueprint $table) {
        $table->id();
        $table->string('item_name');
        $table->text('description')->nullable();
        $table->integer('quantity_needed');
        $table->integer('quantity_received')->default(0);
        $table->enum('status', ['incomplete', 'complete', 'no_donations'])->default('no_donations');
        $table->foreignId('created_by')->constrained('admins')->onDelete('cascade');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlist');
    }
};
