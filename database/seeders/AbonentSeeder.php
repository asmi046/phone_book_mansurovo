<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class AbonentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("abonents")->insert(
            [
                [
                    'name' => "Иван Иванычь",
                    'podrazdelenie'  => "Агрохолдинг",
                    'otdel'  => "Снабжение",
                    'dolgnost'  => "Снабженец",
                    'phone_st'  => "03-13",
                    'phone_mobile' => "+7 (000) 000-00-00",
                ],

                [
                    'name' => "Петр Петров",
                    'podrazdelenie'  => "Конезавод",
                    'otdel'  => "Бухгалтерия",
                    'dolgnost'  => "Бухгалтер",
                    'phone_st'  => "03-14",
                    'phone_mobile' => "+7 (000) 000-00-01",
                ],

                [
                    'name' => "Сидор сидоров",
                    'podrazdelenie'  => "Агрохолдинг",
                    'otdel'  => "Автопарк",
                    'dolgnost'  => "Механик",
                    'phone_st'  => "03-15",
                    'phone_mobile' => "+7 (000) 000-00-02",
                ],

                [
                    'name' => "Карен Кареныч",
                    'podrazdelenie'  => "Агрохолдинг",
                    'otdel'  => "Автопарк",
                    'dolgnost'  => "Механик",
                    'phone_st'  => "03-16",
                    'phone_mobile' => "+7 (000) 000-00-03",
                ],

                [
                    'name' => "Евпат Игнатыч",
                    'podrazdelenie'  => "Агрохолдинг",
                    'otdel'  => "Автопарк",
                    'dolgnost'  => "Механик",
                    'phone_st'  => "03-16",
                    'phone_mobile' => "+7 (000) 000-00-04",
                ],


            ]);
    }
}
