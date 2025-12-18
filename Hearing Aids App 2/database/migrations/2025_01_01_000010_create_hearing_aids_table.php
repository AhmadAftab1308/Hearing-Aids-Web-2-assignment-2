<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hearing_aids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained('brands')->cascadeOnDelete();
            $table->string('instrument');
            $table->decimal('price_per_pair', 8, 2);
            $table->boolean('rechargeable')->default(true);

            // 1-5 rating scale (stars)
            $table->unsignedTinyInteger('sound_quality');
            $table->unsignedTinyInteger('suitability_active_lifestyles');
            $table->unsignedTinyInteger('suitability_small_groups');
            $table->unsignedTinyInteger('social_situations');

            $table->text('description')->nullable();
            $table->timestamps();

            $table->index(['brand_id', 'price_per_pair']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hearing_aids');
    }
};
