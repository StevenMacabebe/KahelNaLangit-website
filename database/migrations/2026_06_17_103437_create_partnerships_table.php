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
    Schema::create('partnerships', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description')->nullable();
        $table->string('logo')->nullable();
        $table->string('website')->nullable();
        $table->date('start_date')->nullable();
        $table->date('end_date')->nullable();
        $table->enum('status', ['current', 'past'])->default('current');
        $table->foreignId('created_by')->constrained('admins')->onDelete('cascade');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partnerships');
    }
};
