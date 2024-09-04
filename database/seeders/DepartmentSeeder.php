<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('teams')->insert([
            'id'=>'1',
            'company_id'=>'1',
            'team_name' => 'DIA-CẢNG HÀNG KHÔNG QUỐC TẾ ĐÀ NẴNG',
            'parent_id' => null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'2',
            'company_id'=>'1',
            'team_name' => 'BAN GIÁM ĐỐC CHKQTĐN',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'3',
            'company_id'=>'1',
            'team_name' => 'PHÒNG AN TOÀN & KSCL',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'4',
            'company_id'=>'1',
            'team_name' => 'PHÒNG KẾ HOẠCH - KINH DOANH',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'5',
            'company_id'=>'1',
            'team_name' => 'PHÒNG KINH DOANH',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'6',
            'company_id'=>'1',
            'team_name' => 'PHÒNG KTCN - MÔI TRƯỜNG',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'7',
            'company_id'=>'1',
            'team_name' => 'PHÒNG TÀI CHÍNH KẾ TOÁN',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'8',
            'company_id'=>'1',
            'team_name' => 'PHÒNG TCNS',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'9',
            'company_id'=>'1',
            'team_name' => 'TRUNG TÂM ANHK ĐÀ NẴNG',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'10',
            'company_id'=>'1',
            'team_name' => 'TRUNG TÂM ĐIỀU HÀNH SÂN BAY',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'11',
            'company_id'=>'1',
            'team_name' => 'TRUNG TÂM ĐTHL ĐÀ NẴNG',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'12',
            'company_id'=>'1',
            'team_name' => 'TRUNG TÂM DVKTHK ĐÀ NẴNG',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'13',
            'company_id'=>'1',
            'team_name' => 'TRUNG TÂM KTG ĐÀ NẴNG',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'14',
            'company_id'=>'1',
            'team_name' => 'TRUNG TÂM KHAI THÁC GA ĐÀ NẴNG',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'15',
            'company_id'=>'1',
            'team_name' => 'TRUNG TÂM KTKB ĐÀ NẴNG',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'16',
            'company_id'=>'1',
            'team_name' => 'TT DV&TM HKĐN - ĐỘI KD KSHK',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'17',
            'company_id'=>'1',
            'team_name' => 'TT DV&TM HKĐN - ĐỘI KDDV NHÀ GA',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'18',
            'company_id'=>'1',
            'team_name' => 'VĂN PHÒNG CẢNG',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('teams')->insert([
            'id'=>'19',
            'company_id'=>'1',
            'team_name' => 'VĂN PHÒNG ĐẢNG ĐOÀN',
            'parent_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
