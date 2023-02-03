<?php

namespace Database\Seeders;

use App\Models\System;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        System::create([
            'name' => 'المنظومة الاولى',
            'number_battery' => '1',
            'number_inverters' => '1',
            'watt_battery' => '5000',
            'watt_inverters' => '3500',
            'Number_hours_for_charge' => 'ساعة واربعون دقيقة',
            'details'=> 'لا يوجد',
        ]);

        System::create([
            'name' => 'المنظومة الثانية',
            'number_battery' => '1',
            'number_inverters' => '1',
            'watt_battery' => '5000',
            'watt_inverters' => '5000',
            'Number_hours_for_charge' => 'ساعة وعشرون دقيقة',
            'details'=> 'لا يوجد',
        ]);

        System::create([
            'name' => 'المنظومة الثالثة',
            'number_battery' => '2',
            'number_inverters' => '1',
            'watt_battery' => '5000',
            'watt_inverters' => '5000',
            'Number_hours_for_charge' => 'ساعتان وثلاثون دقيقة',
            'details'=> 'لا يوجد',
        ]);

        System::create([
            'name' => 'المنظومة الرابعة',
            'number_battery' => '3',
            'number_inverters' => '3',
            'watt_battery' => '5000',
            'watt_inverters' => '5000',
            'Number_hours_for_charge' => 'ساعتان وثلاثون دقيقة',
            'details'=> 'لا يوجد',
        ]);
    }
}
