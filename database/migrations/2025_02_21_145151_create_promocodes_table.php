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
        Schema::create('promocodes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // Код промокода
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade'); // Продавец (Компания)
            $table->decimal('discount', 5, 2); // Скидка
            $table->boolean('is_active')->default(true); // Статус активации
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promocodes');
    }
};
