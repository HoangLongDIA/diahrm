<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToArray;

class EmployeeImport implements ToArray
{

    public static function fields(): array
    {
        return array(
              //Them manv
              array('id' => 'manv', 'name' => __('Mã Nhân Viên'), 'required' => 'Yes',),
              array('id' => 'hoten', 'name' => __('Họ và Tên'), 'required' => 'Yes',),
              array('id' => 'gtinh', 'name' => __('Giới Tính'), 'required' => 'Yes',),
              //Bang Employee
              array('id' => 'ngaysinh', 'name' => __('Ngày Sinh'), 'required' => 'Yes',),
            //$marital_status  Employee
             array('id' => 'qhvochong', 'name' => __('Vợ Chồng'), 'required' => 'Yes',),
            //232 mac Dinh
            array('id' => 'quoctich', 'name' => __('Quốc Tịch'), 'required' => 'Yes',),
            array('id' => 'dantoc', 'name' => __('Dân Tộc'), 'required' => 'Yes',),
            array('id' => 'tongiao', 'name' => __('Tôn Giáo'), 'required' => 'Yes',),
            array('id' => 'thuongtru', 'name' => __('Thường Trú'), 'required' => 'Yes',),
            array('id' => 'tamtru', 'name' => __('Tạm Trú'), 'required' => 'Yes',),
            //From Designation table
            array('id' => 'chucdanh', 'name' => __('Chức Danh'), 'required' => 'Yes',),
            array('id' => 'mobil', 'name' => __('Mobile'), 'required' => 'Yes',),
            array('id' => 'email', 'name' => __('Hộp Thư'), 'required' => 'Yes',),
            array('id' => 'trdovh', 'name' => __('Trình độ văn hoá'), 'required' => 'Yes',),

            array('id' => 'trdohv', 'name' => __('Trình độ học vấn'), 'required' => 'Yes',),
            // Primary Job
            array('id' => 'ngnghiep', 'name' => __('Nghề Nghiệp'), 'required' => 'Yes',),
            array('id' => 'sotruong', 'name' => __('Sở Trường'), 'required' => 'Yes',),
            array('id' => 'dtpccc', 'name' => __('dtpccc'), 'required' => 'Yes',),
            array('id' => 'chuyenco', 'name' => __('chuyenco'), 'required' => 'Yes',),
            array('id' => 'ttxep', 'name' => __('ttxep'), 'required' => 'Yes',),
            array('id' => 'pkhoild', 'name' => __('pkhoild'), 'required' => 'Yes',),
            array('id' => 'dbcdoan', 'name' => __('dbcdoan'), 'required' => 'Yes',),
            array('id' => 'qh2126', 'name' => __('qh2126'), 'required' => 'Yes',),
            //About Me
            array('id' => 'ghichuhd', 'name' => __('ghichuhd'), 'required' => 'Yes',),
            array('id' => 'cuucb', 'name' => __('cuucb'), 'required' => 'Yes',),
            array('id' => 'tuve', 'name' => __('tuve'), 'required' => 'Yes',),
            array('id' => 'dangvien', 'name' => __('Đảng Viên'), 'required' => 'Yes',),
            //More Info
            array('id' => 'cdanhhd', 'name' => __('cdanhhd'), 'required' => 'Yes',),
            array('id' => 'tendv', 'name' => __('tendv'), 'required' => 'Yes',),
            array('id' => 'sosldcmnd', 'name' => __('sosldcmnd'), 'required' => 'Yes',),
            array('id' => 'ngaycmnd', 'name' => __('ngaycmnd'), 'required' => 'Yes',),
            array('id' => 'noicmnd', 'name' => __('noicmnd'), 'required' => 'Yes',),
            array('id' => 'noisinh', 'name' => __('noisinh'), 'required' => 'Yes',),
            array('id' => 'quequan', 'name' => __('quequan'), 'required' => 'Yes',),
            array('id' => 'xuatthan', 'name' => __('xuatthan'), 'required' => 'Yes',),
            array('id' => 'phanloainv', 'name' => __('phanloainv'), 'required' => 'Yes',),
            array('id' => 'qtct', 'name' => __('qtct'), 'required' => 'Yes',),
            array('id' => 'moiqh', 'name' => __('moiqh'), 'required' => 'Yes',),
            array('id' => 'hotencha', 'name' => __('hotencha'), 'required' => 'Yes',),
            array('id' => 'hotenme', 'name' => __('hotenme'), 'required' => 'Yes',),
            array('id' => 'hotenvc', 'name' => __('hotenvc'), 'required' => 'Yes',),
            array('id' => 'socon', 'name' => __('socon'), 'required' => 'Yes',)




//            array('id' => 'name', 'name' => __('modules.employees.employeeName'), 'required' => 'Yes',),
//            array('id' => 'email', 'name' => __('modules.employees.employeeEmail'), 'required' => 'Yes',),
//            array('id' => 'mobile', 'name' => __('app.mobile'), 'required' => 'No',),
//            array('id' => 'gender', 'name' => __('modules.employees.gender'), 'required' => 'No',),
//            array('id' => 'employee_id', 'name' => __('modules.employees.employeeId'), 'required' => 'Yes'),
//            array('id' => 'joining_date', 'name' => __('modules.employees.joiningDate'), 'required' => 'Yes'),
//            array('id' => 'address', 'name' => __('app.address'), 'required' => 'No'),
//            array('id' => 'hourly_rate', 'name' => __('modules.employees.hourlyRate'), 'required' => 'No'),

        );
    }

    public function array(array $array): array
    {
        return $array;
    }

}
