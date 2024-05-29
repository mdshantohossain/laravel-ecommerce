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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('sub_category_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('brand_id');
            $table->integer('unit_id');
            $table->string('name');
            $table->string('code');
            $table->integer('stoke_amount');
            $table->string('offer')->nullable();
            $table->integer('regular_price');
            $table->integer('selling_price')->nullable();
            $table->text('shor_description');
            $table->longText('long_description');
            $table->text('image');
            $table->text('slug');
            $table->tinyInteger('status')->comment("status: 1=active, 2=inactive");
            $table->integer('click_count')->nullable();
            $table->integer('featured')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
