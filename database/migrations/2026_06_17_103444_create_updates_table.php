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
    Schema::create('updates', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->string('image')->nullable();
        $table->date('event_date')->nullable();
        $table->enum('category', ['announcement', 'project_update'])->default('announcement');
        $table->foreignId('created_by')->constrained('admins')->onDelete('cascade');
        $table->foreignId('updated_by')->nullable()->constrained('admins')->onDelete('set null');
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('updates');
    }
};
