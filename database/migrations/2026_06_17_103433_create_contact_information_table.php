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
    Schema::create('contact_information', function (Blueprint $table) {
        $table->id();
        $table->string('org_name');
        $table->string('email');
        $table->string('phone');
        $table->text('address');
        $table->string('facebook')->nullable();
        $table->string('instagram')->nullable();
        $table->string('twitter')->nullable();
        $table->foreignId('updated_by')->nullable()->constrained('admins')->onDelete('set null');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_information');
    }
};
