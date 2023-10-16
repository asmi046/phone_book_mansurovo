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
            $table->string('tabel_number', 100)->comment('Табельный номер');
            $table->string('dolgnost', 200)->comment('Должность');
            $table->string('organization', 200)->comment('Организация');
            $table->string('podrazdelenie', 200)->comment('Подразделение');
            $table->string('podrazdelenie_rod', 200)->comment('Подразделение родительское');
            $table->string('phone_st', 30)->comment('Телефон рабочий')->nullable();
            $table->string('phone_mobile', 30)->comment('Телефон мобильный')->nullable();
            $table->string('email', 100)->comment('Эдектронная почта')->nullable();
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
