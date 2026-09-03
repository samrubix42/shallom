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
        Schema::create('our_ranges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('our_range_category_id')->nullable()->constrained('our_range_categories')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->json('details')->nullable();
            $table->text('description')->nullable();
            $table->json('images')->nullable();
            $table->string('pdf')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_ranges');
    }
};
