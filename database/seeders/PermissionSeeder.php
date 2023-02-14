<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'استعراض الاحمال']);

        Permission::create(['name'=>'اضافة حمل']);

        Permission::create(['name'=>'تعديل حمل']);

        Permission::create(['name'=>'حذف حمل']);

        Permission::create(['name'=>'ارشيف الاحمال']);

        Permission::create(['name'=>'استعادة حمل']);

        Permission::create(['name'=>'حذف حمل بشكل نهائي']);

        Permission::create(['name'=>'استعراض المنظومات']);

        Permission::create(['name'=>'اضافة منظومة']);

        Permission::create(['name'=>'تعديل منظومة']);

        Permission::create(['name'=>'حذف منظومة']);

        Permission::create(['name'=>'ارشيف المنظومات']);

        Permission::create(['name'=>'استعادة منظومة']);

        Permission::create(['name'=>'حذف منظومة بشكل نهائي']);

        Permission::create(['name'=>'استعراض المسؤولين']);

        Permission::create(['name'=>'اضافة مسؤول']);

        Permission::create(['name'=>'تعديل مسؤول']);

        Permission::create(['name'=>'حذف مسؤول']);

        Permission::create(['name'=>'اعطاء صلاحية']);

        Permission::create(['name'=>'ارشيف المسؤولين']);

        Permission::create(['name'=>'استعادة مسؤول']);

        Permission::create(['name'=>'حذف مسؤول بشكل نهائي']);

        Permission::create(['name'=>'استعراض الصلاحيات']);

        Permission::create(['name'=>'اعادة تعين كلمة المرور']);
    }
}
