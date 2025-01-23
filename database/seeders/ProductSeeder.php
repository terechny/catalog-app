<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([

            ['id' => 1, 'id_group' => 11, 'name' => 'Смартфон Apple iPhone 12 mini 128 ГБ'],
            ['id' => 2, 'id_group' => 11, 'name' => 'Смартфон Xiaomi Redmi 9A 2/32 ГБ, серый'],
            ['id' => 3, 'id_group' => 11, 'name' => 'Смартфон Xiaomi Redmi Note 11 4/128 ГБ, голубой'],
            ['id' => 4, 'id_group' => 11, 'name' => 'Смартфон Xiaomi 12 Pro 12/256 ГБ, фиолетовый'],
            ['id' => 5, 'id_group' => 24, 'name' => 'Умные часы Pro Smart Watch 7 / Смарт часы женские, мужские / Фитнес браслет, 44mm'],
            ['id' => 6, 'id_group' => 24, 'name' => 'Умные часы Smart Watch 7 Series, 45mm, черный'],
            ['id' => 7, 'id_group' => 25, 'name' => 'Фитнес-браслет Xiaomi Mi Band 7, черный'],
            ['id' => 8, 'id_group' => 26, 'name' => 'Ремешок для часов фитнес браслета Huawei Watch Fit NEW Elegant , Хуавей вотч фит'],
            ['id' => 9, 'id_group' => 26, 'name' => 'Умное кольцо UK2 с поддержкой NFC, размер 8, белое'],
            ['id' => 10, 'id_group' => 26, 'name' => 'Смарт-кольцо R5 / Водонепроницаемое пылезащитное / Jakcom IC ID NFC Wear для IOS Android'],
            ['id' => 11, 'id_group' => 26, 'name' => 'Jakcom Смарт-кольцо R4 / Водонепроницаемое пылезащитное / IC ID NFC Wear для IOS Android'],
            ['id' => 12, 'id_group' => 27, 'name' => 'Кабель переходник USB 3.0 - SATA lll HDD / SSD адаптер для внешнего жесткого диска / SSD'],
            ['id' => 13, 'id_group' => 27, 'name' => '1 ТБ Внутренний SSD диск Western Digital Blue SN570 M.2 PCI-E 3.0 (WDS100T3B0C)'],
            ['id' => 14, 'id_group' => 27, 'name' => '120 ГБ Внутренний SSD диск AMD R5 Series 2.5" SATA3 6.0 Гбит/с (R5SL120G)'],
            ['id' => 15, 'id_group' => 27, 'name' => '240 ГБ Внутренний SSD диск Exegate NextPro UV500TS240 (EX280465RUS)'],
            ['id' => 16, 'id_group' => 27, 'name' => '240 ГБ Внутренний SSD диск AMD SSD накопитель AMD R5 Series 240GB, R5SL240G (R5SL240G)'],
            ['id' => 17, 'id_group' => 28, 'name' => 'Видеокарта Colorful GeForce RTX 3080 10 ГБ (3080-10GB-UTWOC)'],
            ['id' => 18, 'id_group' => 28, 'name' => 'Устройство видеозахвата EasyCAP (HD)'],
            ['id' => 19, 'id_group' => 28, 'name' => 'Конвертер PALMEXX HDMI to USB карта видеозахвата и стриминга'],
            ['id' => 20, 'id_group' => 29, 'name' => 'Оперативная память Compit Модуль памяти 1x8 ГБ (CMPTDDR48GBD2400 )'],
            ['id' => 21, 'id_group' => 29, 'name' => 'Оперативная память Micron DDR3 SO-DIMM 4Gb 1.5V 1600Mhz для ноутбука 1x4 ГБ (0)'],
            ['id' => 22, 'id_group' => 29, 'name' => 'Оперативная память OEM Kingston SODIMM DDR3L 8Gb 1600 1.35V 1x8 ГБ (KVR16LS11/8)'],
            ['id' => 23, 'id_group' => 30, 'name' => 'Материнская плата Gigabyte Z490M'],
            ['id' => 24, 'id_group' => 30, 'name' => 'Материнская плата Gigabyte B560M DS3H V2'],
            ['id' => 25, 'id_group' => 30, 'name' => 'Материнская плата Gigabyte H510M S2H V2'],
            ['id' => 26, 'id_group' => 30, 'name' => 'Материнская плата Gigabyte B660M GAMING AC'],
            ['id' => 27, 'id_group' => 30, 'name' => 'Материнская плата Gigabyte A320M S2H Ryzen AM4'],
            ['id' => 28, 'id_group' => 31, 'name' => 'Процессор intel i5-12600KF'],
            ['id' => 29, 'id_group' => 31, 'name' => 'Процессор AMD Ryzen 5 5600X OEM (без кулера)'],
            ['id' => 30, 'id_group' => 31, 'name' => 'Процессор AMD Ryzen 7 7700X BOX (без кулера)'],
            ['id' => 31, 'id_group' => 31, 'name' => 'Процессор intel i5-12600K'],
            ['id' => 32, 'id_group' => 31, 'name' => 'Процессор, Серверный процессор XEON Xeon E5-2640v3 OEM (без кулера)'],
            ['id' => 33, 'id_group' => 31, 'name' => 'Процессор Core i3-12100F OEM (CM8071504651013)'],
            ['id' => 34, 'id_group' => 31, 'name' => 'Процессор AMD Threadripper 5975WX BOX (без кулера)'],
            ['id' => 35, 'id_group' => 32, 'name' => 'Блузка Tom Tailor'],
            ['id' => 36, 'id_group' => 32, 'name' => 'Блузка'],
            ['id' => 37, 'id_group' => 33, 'name' => 'Рубашка ELIZA group'],
            ['id' => 38, 'id_group' => 33, 'name' => 'Рубашка Boutique. Итальянская мода (журнал)'],
            ['id' => 39, 'id_group' => 33, 'name' => 'Рубашка DOCTOR HOUSE'],
            ['id' => 40, 'id_group' => 17, 'name' => 'Брюки EA7 Core Identity'],
            ['id' => 41, 'id_group' => 17, 'name' => 'Брюки Dervirga`s'],
            ['id' => 42, 'id_group' => 17, 'name' => 'Брюки утепленные CEVAT`S'],
            ['id' => 43, 'id_group' => 17, 'name' => 'Брюки спортивные CEVAT`S Комфорт'],
            ['id' => 44, 'id_group' => 17, 'name' => 'Брюки Soft home'],
            ['id' => 45, 'id_group' => 18, 'name' => 'Пальто пуховое Nike'],
            ['id' => 46, 'id_group' => 18, 'name' => 'Куртка Hanster'],
            ['id' => 47, 'id_group' => 18, 'name' => 'Куртка DSGdong'],
            ['id' => 48, 'id_group' => 18, 'name' => 'Пуховик EA7 Core Shield'],
            ['id' => 49, 'id_group' => 19, 'name' => 'Морозильный ларь Haier HCE143R'],
            ['id' => 50, 'id_group' => 19, 'name' => 'Холодильник Ascoli Холодильник двухкамерный с морозильником Ascoli ARDFRY250, с холодильной и морозильной камерой No Frost, кремовый, бежевый'],
            ['id' => 51, 'id_group' => 19, 'name' => 'Холодильник БИРЮСА Б-90, однокамерный, белый'],
            ['id' => 52, 'id_group' => 19, 'name' => 'Холодильник двухкамерный Hansa FK3356.2DFW, No frost, объем 341 литра, электронная панель управления, LED подсветка, сигнал открытой двери, автосохранение холода'],
            ['id' => 53, 'id_group' => 19, 'name' => 'Холодильник БИРЮСА Б-120, двухкамерный , белый'],
            ['id' => 54, 'id_group' => 19, 'name' => 'Холодильник Candy CCRN 6200W, белый'],
            ['id' => 55, 'id_group' => 19, 'name' => 'Холодильник двухкамерный Zarget ZRB 310NS1WM, NO frost, класс энергопотребления А+, регулирующие полки из ударопрочного стекла, объем 302 литра'],
            ['id' => 56, 'id_group' => 19, 'name' => 'Холодильник Comfee RCT124WH1R, двухкамерный, белый'],
            ['id' => 57, 'id_group' => 20, 'name' => 'Морозильный ларь Willmark CF-170CS, 100 Вт, 165 л, 6.5 кг/сут, 42 дБ, суперзаморозка, белый'],
            ['id' => 58, 'id_group' => 20, 'name' => 'Морозильная камера Hyundai CU1007, черный'],
            ['id' => 59, 'id_group' => 20, 'name' => 'Морозилка БИРЮСА Б-240KX'],
            ['id' => 60, 'id_group' => 20, 'name' => 'Морозильный ларь Willmark CF-250CS, 130 Вт, 225 л, 9.2 кг/сутки, 42 дБ, суперзаморозка, белый'],
            ['id' => 61, 'id_group' => 20, 'name' => 'Морозильная камера Comfee RCU102WH1R, белый'],
            ['id' => 62, 'id_group' => 20, 'name' => 'Морозильная камера САРАТОВ 153, белый'],
            ['id' => 63, 'id_group' => 20, 'name' => 'Морозильный ларь Willmark CF-120CS, объем 105 л, класс A, 5 кг/сутки, быстрая заморозка, белый'],
            ['id' => 64, 'id_group' => 20, 'name' => 'Морозилка БИРЮСА Б-285KX, белый'],
            ['id' => 65, 'id_group' => 20, 'name' => 'Морозильный ларь Бирюса 355KX, белый'],
            ['id' => 66, 'id_group' => 21, 'name' => 'Встраиваемая стиральная машина Weissgauff WMI 6128 D, белый'],
            ['id' => 67, 'id_group' => 21, 'name' => 'Встраиваемая стиральная машина Indesit IWUD 4105 (CIS), белый'],
            ['id' => 68, 'id_group' => 21, 'name' => 'Встраиваемая стиральная машина Indesit BI WMIL 71252'],
            ['id' => 69, 'id_group' => 22, 'name' => 'Встраиваемая сушильная машина Haier HD90-A2959 белый, черный, серебристый'],
            ['id' => 70, 'id_group' => 22, 'name' => 'Встраиваемая сушильная машина Miele T4859 CiL'],
            ['id' => 71, 'id_group' => 23, 'name' => 'Посудомоечная машина встраиваемая Monsher MD 4503'],
            ['id' => 72, 'id_group' => 23, 'name' => 'Встраиваемая посудомоечная машина Weissgauff BDW 4004, серый'],
            ['id' => 73, 'id_group' => 23, 'name' => 'Встраиваемая посудомоечная машина Weissgauff BDW 6062 D'],
            ['id' => 74, 'id_group' => 23, 'name' => 'Посудомоечная машина встраиваемая Kuppersberg GSM 4574'],
            ['id' => 75, 'id_group' => 23, 'name' => 'Встраиваемая посудомоечная машина Weissgauff BDW 6042'],
            ['id' => 76, 'id_group' => 14, 'name' => '24" Моноблок MonoX Shark (Intel Core i5-6500 (3.2 ГГц), RAM 8 ГБ, SSD 480, Windows 10 Pro), черный, черный матовый'],
            ['id' => 77, 'id_group' => 14, 'name' => '19.5" Моноблок Alfa computers ALFA-19 (Intel Core i5-520M (2.4 ГГц), RAM 8 ГБ, SSD 512, Intel HD Graphics, Windows 10 Pro), черно-серый, Российская клавиатура'],
            ['id' => 78, 'id_group' => 14, 'name' => '23.8" Моноблок YB36 (Intel Core i7-8550U (1.8 ГГц), RAM 8 ГБ, SSD 256, Intel UHD Graphics 620, Windows 10 Pro), белый, Российская клавиатура'],
            ['id' => 79, 'id_group' => 15, 'name' => 'Системный блок Matrix (Intel Core i5-10400F (2.9 ГГц), RAM 16 ГБ, SSD 500 ГБ, NVIDIA GeForce RTX 3060 (12 Гб), Windows 10 Pro), черный'],
            ['id' => 80, 'id_group' => 15, 'name' => 'Системный блок с монитором 24" IPS + DVD привод полный комплект (Intel Core i5-2400 (3.4 ГГц), RAM 8 ГБ, SSD 480 ГБ, Intel HD Graphics, Windows 10 Pro), ALFA, черны'],
            ['id' => 81, 'id_group' => 15, 'name' => 'Системный блок KING KOMP KK10004437 Intel Core i9-12900KF, GeForce RTX 4090, RAM 64GB, SSD 250GB + SSD 1TB (Intel Core i9-12900KF (3.9 ГГц), RAM 64 ГБ, SSD 2256 ГБ, NVIDIA GeForce RTX 4090 (24 Гб), Windows 10 Pro), черный'],
            ['id' => 82, 'id_group' => 15, 'name' => 'Системный блок Matrix (AMD Ryzen 5 5600G (3.9 ГГц), SSD 500 ГБ, AMD Radeon Vega 7, Windows 10 Pro), черный']

        ]);
    }
}
