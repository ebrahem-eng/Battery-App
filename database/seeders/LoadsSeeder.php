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
            'name'=>'براد',
            'value'=>'200',
           
        ]);
        Loads::create([
            'name'=>'غسالة',
            'value'=>'300',
        ]);
        Loads::create([
            'name'=>'فريزر',
            'value'=>'500',
        ]);
        Loads::create([
            'name'=>'كولر ماء',
            'value'=>'100',
        ]);
    }
}
