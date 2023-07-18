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
            $table->string(100, 'name')->comment('Имя абонента');
            $table->string(70, 'podrazdelenie')->comment('Подразделение');
            $table->string(50, 'otdel')->comment('Отдел');
            $table->string(100, 'dolgnost')->comment('Должность');
            $table->string(15, 'phone_st')->comment('Телефон внутренний');
            $table->string(20, 'phone_mobile')->comment('Телефон мобильный');
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
