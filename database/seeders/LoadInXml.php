<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class LoadInXml extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patch = public_path('/base-src/1c_phone_book.XML');
        $xmlFile = file_get_contents($patch);
        $xmlObject = simplexml_load_string($xmlFile);

        $podr = [];

        for  ($i = 0; $i < count($xmlObject->Подразделение); $i++)
        {
            $pdr_code = trim((string)$xmlObject->Подразделение[$i]->attributes()->ПодразделениеОрганизацииКод);
            $pdr_name = trim((string)$xmlObject->Подразделение[$i]->attributes()->ПодразделениеОрганизации);
            $podr[$pdr_code] = $pdr_name;

        }




        $sotr = [];

        for  ($i = 0; $i < count($xmlObject->Сотрудник); $i++)
        {
            $tmp = [];
            $tmp["name"] = trim((string)$xmlObject->Сотрудник[$i]->attributes()->ФИО);
            $tmp["tabel_number"] = trim((string)$xmlObject->Сотрудник[$i]->attributes()->ТабельныйНомер);
            $tmp["dolgnost"] = trim((string)$xmlObject->Сотрудник[$i]->attributes()->Должность);
            $tmp["podrazdelenie"] = trim((string)$xmlObject->Сотрудник[$i]->attributes()->ПодразделениеОрганизации);
            $tmp["podrazdelenie_rod"] = trim((string)$xmlObject->Сотрудник[$i]->attributes()->ПодразделениеОрганизацииРодитель);
            $tmp["organization"] = trim((string)$xmlObject->Сотрудник[$i]->attributes()->Организация);
            $tmp["phone_st"] = trim((string)$xmlObject->Сотрудник[$i]->attributes()->ТелефонРабочий);
            $tmp["phone_mobile"] = trim((string)$xmlObject->Сотрудник[$i]->attributes()->ТелефонМобильный);
            $tmp["email"] = trim((string)$xmlObject->Сотрудник[$i]->attributes()->Почта);

            $sotr[] = $tmp;

        }

        DB::table("abonents")->insert($sotr);

        print_r($sotr);

    }
}
