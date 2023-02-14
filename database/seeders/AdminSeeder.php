<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $Admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('Admin');

       $Admin->givePermissionTo('استعراض الاحمال','اضافة حمل','تعديل حمل','حذف حمل','ارشيف الاحمال','استعادة حمل','حذف حمل بشكل نهائي','استعراض المنظومات','اضافة منظومة','تعديل منظومة',
    'حذف منظومة','ارشيف المنظومات','استعادة منظومة','حذف منظومة بشكل نهائي','استعراض المسؤولين','اضافة مسؤول','تعديل مسؤول','حذف مسؤول','اعطاء صلاحية',
    'استعراض صلاحيات مسؤول','سحب صلاحية','ارشيف المسؤولين','استعادة مسؤول','حذف مسؤول بشكل نهائي','استعراض الصلاحيات','اعادة تعين كلمة المرور','تعديل الملف الشخصي'
    );
    }

   
}
