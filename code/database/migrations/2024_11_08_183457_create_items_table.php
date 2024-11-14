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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('created_by');
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->cascadeOnDelete();
            $table->foreign('created_by')->references('id')->on('admins')->cascadeOnDelete();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};