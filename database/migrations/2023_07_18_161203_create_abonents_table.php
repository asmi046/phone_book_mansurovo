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
        Schema::create('abonents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100)->comment('Имя абонента');
            $table->string('podrazdelenie', 70)->comment('Подразделение');
            $table->string('otdel', 50)->comment('Отдел')->nullable();
            $table->string('dolgnost', 100)->comment('Должность');
            $table->string('phone_st', 20)->comment('Телефон внутренний')->nullable();
            $table->string('phone_mobile', 20)->comment('Телефон мобильный')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonents');
    }
};
