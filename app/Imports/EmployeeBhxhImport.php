<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToArray;

class EmployeeBhxhImport implements ToArray
{

    public static function fields(): array
    {
        return array(
            //Them manv
            array('id' => 'manv', 'name' => __('Mã Nhân Viên'), 'required' => 'Yes',),
            array('id' => 'hoten', 'name' => __('Họ và Tên'), 'required' => 'Yes',),
            array('id' => 'email', 'name' => __('modules.employees.employeeEmail'), 'required' => 'Yes',),
            array('id' => 'sobhxh', 'name' => __('sobhxh'), 'required' => 'Yes',),
            array('id' => 'thgbhxh', 'name' => __('thgbhxh'), 'required' => 'Yes',),
            array('id' => 'nmbhxh', 'name' => __('nmbhxh'), 'required' => 'Yes',),
            array('id' => 'sothebhxh', 'name' => __('sothebhxh'), 'required' => 'Yes',),
            array('id' => 'madkykcb', 'name' => __('madkykcb'), 'required' => 'Yes',),
            array('id' => 'nbdtheyt', 'name' => __('nbdtheyt'), 'required' => 'Yes',),
            array('id' => 'nkttheyt', 'name' => __('nkttheyt'), 'required' => 'Yes',),
            array('id' => 'tgiabhtn', 'name' => __('tgiabhtn'), 'required' => 'Yes',),
            array('id' => 'thgbdbhtn', 'name' => __('thgbdbhtn'), 'required' => 'Yes',),
            array('id' => 'nbdbhtn', 'name' => __('nbdbhtn'), 'required' => 'Yes',),
            array('id' => 'qtrbhxh', 'name' => __('qtrbhxh'), 'required' => 'Yes',),
            array('id' => 'qtrbdbhxh', 'name' => __('qtrbdbhxh'), 'required' => 'Yes',),
            array('id' => 'hesolcb', 'name' => __('hesolcb'), 'required' => 'Yes',),
            array('id' => 'pccvbhxh', 'name' => __('pccvbhxh'), 'required' => 'Yes',),
            array('id' => 'pckvbhxh', 'name' => __('pckvbhxh'), 'required' => 'Yes',),


            array('id' => 'ngaynhan', 'name' => __('ngaynhan'), 'required' => 'Yes',),
            array('id' => 'htld', 'name' => __('htld'), 'required' => 'Yes',),
            array('id' => 'dvsdld', 'name' => __('dvsdld'), 'required' => 'Yes',),
            array('id' => 'nguoidd', 'name' => __('nguoidd'), 'required' => 'Yes',),
            array('id' => 'ngaybdhd', 'name' => __('ngaybdhd'), 'required' => 'Yes',),
            array('id' => 'ngayhhhd', 'name' => __('ngayhhhd'), 'required' => 'Yes',),
            array('id' => 'ghichu', 'name' => __('ghichu'), 'required' => 'Yes',),
            array('id' => 'mangach', 'name' => __('mangach'), 'required' => 'Yes',),
            array('id' => 'ngachl', 'name' => __('ngachl'), 'required' => 'Yes',),
            array('id' => 'bacl', 'name' => __('bacl'), 'required' => 'Yes',),
            array('id' => 'hesol', 'name' => __('hesol'), 'required' => 'Yes',),
            array('id' => 'tgtinhl', 'name' => __('tgtinhl'), 'required' => 'Yes',),
            array('id' => 'mucl', 'name' => __('mucl'), 'required' => 'Yes',),
            array('id' => 'hesopccv', 'name' => __('hesopccv'), 'required' => 'Yes',),
            array('id' => 'mucpccv', 'name' => __('mucpccv'), 'required' => 'Yes',),
            array('id' => 'hesopckv', 'name' => __('hesopckv'), 'required' => 'Yes',),
            array('id' => 'hesopctn', 'name' => __('hesopctn'), 'required' => 'Yes',),
            array('id' => 'msttncn', 'name' => __('msttncn'), 'required' => 'Yes',),
            array('id' => 'songpgpt', 'name' => __('SoNgPgPt'), 'required' => 'Yes',),



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
