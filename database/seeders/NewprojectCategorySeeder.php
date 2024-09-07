<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewprojectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('project_category')->insert([
            'company_id' => '1',
            'category_name' => 'Chi phí SCTX nhà cửa, vật kiến trúc',
            'added_by'=>'1',
            'last_updated_by'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('project_category')->insert([
            'company_id' => '1',
            'category_name' => 'Chi phí SCTX máy móc thiết bị',
            'added_by'=>'1',
            'last_updated_by'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('project_category')->insert([
            'company_id' => '1',
            'category_name' => 'Chi phí SCTX phương tiện vận tải',
            'added_by'=>'1',
            'last_updated_by'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('project_category')->insert([
            'company_id' => '1',
            'category_name' => 'SỬA CHỮA LỚN -nhà cửa, vật kiến trúc',
            'added_by'=>'1',
            'last_updated_by'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('project_category')->insert([
            'company_id' => '1',
            'category_name' => 'SỬA CHỮA LỚN - máy móc thiết bị',
            'added_by'=>'1',
            'last_updated_by'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('project_category')->insert([
            'company_id' => '1',
            'category_name' => 'SỬA CHỮA LỚN - SỬA CHỮA TÀI SẢN',
            'added_by'=>'1',
            'last_updated_by'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('project_category')->insert([
            'company_id' => '1',
            'category_name' => 'MUA MỚI CÔNG CỤ DỤNG CỤ LAO ĐỘNG',
            'added_by'=>'1',
            'last_updated_by'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('project_category')->insert([
            'company_id' => '1',
            'category_name' => 'Chi sửa chữa CCDC TRANG THIẾT BỊ VĂN PHÒNG',
            'added_by'=>'1',
            'last_updated_by'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('project_category')->insert([
            'company_id' => '1',
            'category_name' => 'Chi sửa chữa CCDC TRANG THIẾT BỊ NHÀ GA',
            'added_by'=>'1',
            'last_updated_by'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('project_category')->insert([
            'company_id' => '1',
            'category_name' => 'Chi sửa chữa CCDC BÀN GHẾ, TỦ, QUẦY, VẬT DỤNG',
            'added_by'=>'1',
            'last_updated_by'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

    }
}
