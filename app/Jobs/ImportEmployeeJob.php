<?php

namespace App\Jobs;

use App\Models\EmployeeDetails;
use App\Models\Role;
use App\Models\UniversalSearch;
use App\Models\User;
use App\Traits\ExcelImportable;
use App\Traits\UniversalSearchTrait;
use Carbon\Exceptions\InvalidFormatException;
use Exception;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ImportEmployeeJob implements ShouldQueue, ShouldBeUnique
{

    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels, UniversalSearchTrait;
    use ExcelImportable;

    private $row;
    private $columns;
    private $company;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($row, $columns, $company = null)
    {
        $this->row = $row;
        $this->columns = $columns;
        $this->company = $company;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->isColumnExists('hoten') && $this->isColumnExists('email')) {

            $user = User::where('email', $this->getColumnValue('email'))->first();

            if ($user) {
                $this->failJobWithMessage(__('Check lại Email của ') . $this->getColumnValue('hoten'));

                return;
            }

            $employeeDetails = EmployeeDetails::where('employee_id', $this->getColumnValue('manv'))->first();

            if ($employeeDetails) {
                $this->failJobWithMessage(__('Check lại ID bị trùng của') . $this->getColumnValue('manv').$this->getColumnValue('hoten'));
            }
            else {

                DB::beginTransaction();
                try {
                    $user = new User();
                    $user->company_id = $this->company?->id;

                    $user->name = $this->getColumnValue('hoten');
                    $user->manv = $this->getColumnValue('manv');
                    //$user->gender = $this->getColumnValue('gtinh');

                    $user->folk = $this->getColumnValue('dantoc');
                    $user->religion = $this->getColumnValue('tongiao');
                    $user->tempAddress = $this->getColumnValue('tamtru');
                    $user->trdohv = $this->getColumnValue('trdohv');
                    $user->educationLevel = $this->getColumnValue('trdovh');
                    $user->sotruong = $this->isColumnExists('sotruong') ? $this->getColumnValue('sotruong'):'';

                    $user->CdanhHD = $this->getColumnValue('cdanhhd');
                    $user->TENDV = $this->getColumnValue('tendv');
                    $user->SoSLDCMND = $this->getColumnValue('sosldcmnd');
                    if($this->getColumnValue('ngaycmnd')){
                        $ngaycmnd  = Date::excelToDateTimeObject($this->getColumnValue('ngaycmnd'));
                        $ngaycmnd1 = $ngaycmnd->format('d-m-Y');
                    }

                    $user->NgayCMND = isset($ngaycmnd1)?$ngaycmnd1:null;
                    $user->NoiCMND = $this->getColumnValue('noicmnd');
                    $user->Noisinh = $this->getColumnValue('noisinh');
                    $user->QUEQUAN = $this->getColumnValue('quequan');
                    $user->Xuatthan = $this->getColumnValue('xuatthan');
                    $user->PhanLoaiNV = $this->getColumnValue('phanloainv');
                    $user->QTCT = $this->getColumnValue('qtct');
                    $user->MoiQH = $this->getColumnValue('moiqh');
                    $user->Hotencha = $this->getColumnValue('hotencha');
                    $user->Hotenme = $this->getColumnValue('hotenme');
                    $user->HotenVC = $this->getColumnValue('hotenvc');
                    $user->SoCon = $this->getColumnValue('socon');


                    $user->email = $this->getColumnValue('email');

                    $user->password = bcrypt(123456);

                    $user->mobile = $this->isColumnExists('mobil') ? $this->getColumnValue('mobil') : null;
                    if($this->getColumnValue('gtinh') == "1")
                    {
                        $user->gender  = "male";
                    }
                    else
                    {
                        $user->gender  = "female";
                    }
                    $user->country_id = 232;
                    $user->primaryJob = $this->isColumnExists('ngnghiep') ? $this->getColumnValue('ngnghiep') : "";
                    $user->dtpccc = $this->isColumnExists('dtpccc') ? $this->getColumnValue('dtpccc') : "";
                    $user->chuyenco = $this->isColumnExists('chuyenco') ? $this->getColumnValue('chuyenco') : "";
                    $user->ttxep = $this->isColumnExists('ttxep') ? $this->getColumnValue('ttxep') : "";
                    $user->pkhoild = $this->isColumnExists('pkhoild') ? $this->getColumnValue('pkhoild') : "";
                    $user->qh2126 = $this->isColumnExists('qh2126') ? $this->getColumnValue('qh2126') : "";
                    $user->ctcuucb = $this->isColumnExists('cuucb') ? $this->getColumnValue('cuucb') : "";
                    $user->cttuve = $this->isColumnExists('tuve') ? $this->getColumnValue('tuve') : "";
                    $user->ctdangvien = $this->isColumnExists('dangvien') ? $this->getColumnValue('dangvien') : "";
                    $user->chucdanh = $this->isColumnExists('chucdanh') ? $this->getColumnValue('chucdanh') : "";
                    $user->save();

                    if ($user->id) {

                        $employee = new EmployeeDetails();
                        $employee->company_id = $this->company?->id;
                        $employee->user_id = $user->id;

                        //$time_input = strtotime($this->getColumnValue('ngaysinh'));
                        $time_input  = Date::excelToDateTimeObject($this->getColumnValue('ngaysinh'));
                        //$time_input  =  $time_input->format('Y-m-d');

                        $employee->date_of_birth = Carbon::instance($time_input);

                        if($this->getColumnValue('qhvochong') == 'COGIADINH' || $this->getColumnValue('qhvochong') == 'COGADINH'){
                            $employee->marital_status = 'engaged';
                        }else{
                            $employee->marital_status = 'single';
                        }


                        $employee->address = $this->isColumnExists('thuongtru') ? $this->getColumnValue('thuongtru') : null;
                        $employee->about_me = $this->isColumnExists('ghichuhd') ? $this->getColumnValue('ghichuhd') : '';
                        $employee->employee_id = $this->isColumnExists('manv') ? $this->getColumnValue('manv') : (EmployeeDetails::max('id') + 1);
                        //$employee->joining_date = $this->isColumnExists('joining_date') ? Carbon::createFromFormat('Y-m-d', $this->getColumnValue('joining_date')) : null;
                        //$employee->hourly_rate = $this->isColumnExists('hourly_rate') ? preg_replace('/[^0-9.]/', '', $this->getColumnValue('hourly_rate')) : null;
                        $employee->save();
                    }

                    $employeeRole = Role::where('name', 'employee')->first();
                    $user->attachRole($employeeRole);
                    $user->assignUserRolePermission($employeeRole->id);
                    $this->logSearchEntry($user->id, $user->name, 'employees.show', 'employee', $user->company_id);
                    DB::commit();
                } catch (InvalidFormatException $e) {

                    DB::rollBack();
                    $this->failJob(__('messages.invalidDate'));
                } catch (Exception $e) {

                    DB::rollBack();
                    $this->failJobWithMessage($e->getMessage());
                }
            }
        }
        else {
            $this->failJob(__('messages.invalidData'));
        }
    }

}
