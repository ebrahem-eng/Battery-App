<?php

namespace Database\Seeders;

use App\Models\Loads;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loads::create([
            'name' => 'ثلاجة 16 قدم',
            'value' => '200',
            'number' => '1',
        ]);



        Loads::create([
            'name' => 'ثلاجة 20 قدم',
            'value' => '300',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'غسالة الملابس الاتوماتيك بدون حرارة',
            'value' => '500',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'الغسالة اليدوية بدون حرارة',
            'value' => '300',
            'number' => '1',
        ]);



        Loads::create([
            'name' => 'غسالة الأطباق',
            'value' => '1300',
            'number' => '1',
        ]);



        Loads::create([
            'name' => 'الفرن الكهربائي',
            'value' => '1700',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'الكولر',
            'value' => '300',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'المكرويف',
            'value' => '800',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'الخلاط',
            'value' => '500',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'غلاية المياه',
            'value' => '1500',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'العجانة الكهربائية ',
            'value' => '300',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'القلاية الكهربائية',
            'value' => '1500',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'التوستر',
            'value' => '850',
            'number' => '1',
        ]);


        Loads::create([
            'name' => ' شاشة LCD ',
            'value' => '150',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'شاشة بلازما',
            'value' => '200',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'شاشة LED',
            'value' => '100',
            'number' => '1',
        ]);

        Loads::create([
            'name' => 'مروحة بوكس',
            'value' => '200',
            'number' => '1',
        ]);

        Loads::create([
            'name' => 'مروحة سقف',
            'value' => '500',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'مدفأة ',
            'value' => '1500',
            'number' => '1',
        ]);


        Loads::create([
            'name' => 'سخان المياه',
            'value' => '2000',
            'number' => '1',
        ]);

        Loads::create([
            'name' => 'مكواة',
            'value' => '1500',
            'number' => '1',
        ]);

        Loads::create([
            'name' => 'مجفف الشعر (السيشوار)',
            'value' => '1500',
            'number' => '1',
        ]);

        Loads::create([
            'name' => 'مكيف 1 طن ',
            'value' => '1200',
            'number' => '1',
        ]);

        Loads::create([
            'name' => 'مكيف 2 طن',
            'value' => '3000',
            'number' => '1',
        ]);

        Loads::create([
            'name' => 'الانارة',
            'value' => '200',
            'number' => '1',
        ]);

        Loads::create([
            'name' => 'لابتوب',
            'value' => '50',
            'number' => '1',
        ]);

        Loads::create([
            'name' => 'الكمبيوتر العادي',
            'value' => '500',
            'number' => '1',
        ]);
    }
}
