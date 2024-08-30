<?php

namespace App\Jobs;

use App\Models\EmployeeDetails;
use App\Models\Insurances;
use App\Models\LaborContract;
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

class ImportEmployeeBhHdJob implements ShouldQueue, ShouldBeUnique
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

        if (str_contains($this->getColumnValue('ngaynhan'), '/')) {
            $str_ngaynhan = str_replace('/', '-', $this->getColumnValue('ngaynhan'));

        }
        $nbdyt = $this->getColumnValue('nbdtheyt');
        $time_input_nbdyt  = Date::excelToDateTimeObject($this->getColumnValue('nbdtheyt'));
        $result = $time_input_nbdyt->format('d-m-Y');
        if($this->getColumnValue('ngaybdhd')){
            $time_input_nbdhdld  = Date::excelToDateTimeObject($this->getColumnValue('ngaybdhd'));
            $result_nbdhdld = $time_input_nbdhdld->format('d-m-Y');

        }
        if($this->getColumnValue('ngayhhhd')){
            $time_input_nhhdld  = Date::excelToDateTimeObject($this->getColumnValue('ngayhhhd'));
            $result_nhhhdld = $time_input_nhhdld->format('d-m-Y');
        }
        if($this->getColumnValue('tgtinhl')){
            $time_input_tgtinhl  = Date::excelToDateTimeObject($this->getColumnValue('tgtinhl'));
            $result_tgtinhl = $time_input_tgtinhl->format('d-m-Y');
        }


        if($nbdyt){

            $insurancesNbdTheYT = companyToYmd($result);
            $enrollment_date = date_create_from_format("m-d-Y", "12-31-2012")->format("Y-m-d");
        }


        if ($this->isColumnExists('manv') && $this->isColumnExists('email')) {
            $employeeDetails = EmployeeDetails::where('employee_id', $this->getColumnValue('manv'))->first();
            if ($employeeDetails){
               // $user = User::where('email', $this->getColumnValue('email'))->first();


                    $insurances = Insurances::where('SoBHXH', $this->getColumnValue('sobhxh'))->first();
                    $laborContract = LaborContract::where('user_id', $employeeDetails->user_id)->first();
                    DB::beginTransaction();
                    try{
                        if($insurances){
                            //$insurances->user_id = $user->id;
                            $insurances->SoBHXH = $this->getColumnValue('sobhxh');
                            $insurances->ThgBHXH = $this->getColumnValue('thgbhxh');
                            $insurances->NmBHXH = $this->getColumnValue('nmbhxh');
                            $insurances->SotheBHXH = $this->getColumnValue('sothebhxh');
                            $insurances->MadkyKCB = $this->getColumnValue('madkykcb');
                            if(isset($insurancesNbdTheYT)){
                                $insurances->NbdTheYT = $insurancesNbdTheYT;
                                $insurances->NktTheYT = $enrollment_date;
                            }

                            $insurances->TgiaBHTN = $this->getColumnValue('tgiabhtn');
                            $insurances->ThgBdBHTN = $this->getColumnValue('thgbdbhtn');
                            $insurances->NBdBHTN =  $this->getColumnValue('nbdbhtn');
                            $insurances->PCKVBHXH = $this->getColumnValue('pckvbhxh');
                            $insurances->QTrBHXH = $this->getColumnValue('qtrbhxh');
                            $insurances->MSTtncn = $this->getColumnValue('msttncn');
                            $insurances->SoNgPgPt = $this->getColumnValue('songpgpt');
                            $insurances->updated_at = date('Y-m-d H:i:s');


                            $insurances->save();
                            //Phan Hop Dong Lao dong


                            //End Phan hop Dong Lao Dong
                        }else{
                            $insurances = new Insurances();
                            $insurances->user_id  = $employeeDetails->user_id;
                            $insurances->SoBHXH = $this->getColumnValue('sobhxh');
                            $insurances->ThgBHXH = $this->getColumnValue('thgbhxh');
                            $insurances->NmBHXH = $this->getColumnValue('nmbhxh');
                            $insurances->SotheBHXH = $this->getColumnValue('sothebhxh');
                            $insurances->MadkyKCB = $this->getColumnValue('madkykcb');
                            if(isset($insurancesNbdTheYT)){
                                $insurances->NbdTheYT = $insurancesNbdTheYT;
                                $insurances->NktTheYT = $enrollment_date;
                            }

                            $insurances->TgiaBHTN = $this->getColumnValue('tgiabhtn');
                            $insurances->ThgBdBHTN = $this->getColumnValue('thgbdbhtn');
                            $insurances->NBdBHTN =  $this->getColumnValue('nbdbhtn');
                            $insurances->PCKVBHXH = $this->getColumnValue('pckvbhxh');
                            $insurances->QTrBHXH = $this->getColumnValue('qtrbhxh');
                            $insurances->MSTtncn = $this->getColumnValue('msttncn');
                            $insurances->SoNgPgPt = $this->getColumnValue('songpgpt');
                            $insurances->save();
                        }
                        //Phan hop Dong lao dong
                        if($laborContract)
                        {
                            //$laborContract = new LaborContract();
                            //$laborContract->user_id = !is_null($request->user_id) ? $request->user_id : user()->id;
                            //$laborContract->add_id = user()->exactUserid();
                            $laborContract->MAHDLD =  $this->getColumnValue('manv');
                            $laborContract->HTLD =  $this->getColumnValue('htld');
                            $laborContract->DVSDLD =  $this->getColumnValue('dvsdld');
                            $laborContract->NguoiDD = $this->getColumnValue('nguoidd');
                            $laborContract->NgayBDHD = isset($result_nbdhdld)?$result_nbdhdld:null;
                            $laborContract->NgayHHHD = isset($result_nhhhdld)?$result_nhhhdld:null;
                            $laborContract->Ngaynhan = isset($str_ngaynhan)?$str_ngaynhan : null;
                            $laborContract->MaNgach = $this->getColumnValue('mangach');
                            $laborContract->NgachL = $this->getColumnValue('ngachl');
                            $laborContract->BacL = $this->getColumnValue('bacl');
                            $laborContract->HesoL = $this->getColumnValue('hesol');
                            $laborContract->TGtinhL = isset($result_tgtinhl)?$result_tgtinhl:null;
                            $laborContract->HeSoPCCV = $this->getColumnValue('hesopccv');
                            $laborContract->MucPCCV = $this->getColumnValue('mucpccv');
                            $laborContract->HeSoPCKV = $this->getColumnValue('hesopckv');
                            $laborContract->HeSoPCTN = $this->getColumnValue('hesopctn');
                            $laborContract->HeSoPCDH = $this->getColumnValue('hesopcdh');
                            $laborContract->Ghichu = $this->getColumnValue('ghichu');
                            $laborContract->save();
                        }
                        else
                        {
                            $laborContract = new LaborContract();
                            $laborContract->user_id = $employeeDetails->user_id;
                            $laborContract->add_id = user()->exactUserid();
                            $laborContract->MAHDLD =  $this->getColumnValue('manv');
                            $laborContract->HTLD =  $this->getColumnValue('htld');
                            $laborContract->DVSDLD =  $this->getColumnValue('dvsdld');
                            $laborContract->NguoiDD = $this->getColumnValue('nguoidd');
                            $laborContract->NgayBDHD = isset($result_nbdhdld)?$result_nbdhdld:null;
                            $laborContract->NgayHHHD = isset($result_nhhhdld)?$result_nhhhdld:null;
                            $laborContract->Ngaynhan = isset($str_ngaynhan)?$str_ngaynhan : null;
                            $laborContract->MaNgach = $this->getColumnValue('mangach');
                            $laborContract->NgachL = $this->getColumnValue('ngachl');
                            $laborContract->BacL = $this->getColumnValue('bacl');
                            $laborContract->HesoL = $this->getColumnValue('hesol');
                            $laborContract->TGtinhL = isset($result_tgtinhl)?$result_tgtinhl:null;
                            $laborContract->HeSoPCCV = $this->getColumnValue('hesopccv');
                            $laborContract->MucPCCV = $this->getColumnValue('mucpccv');
                            $laborContract->HeSoPCKV = $this->getColumnValue('hesopckv');
                            $laborContract->HeSoPCTN = $this->getColumnValue('hesopctn');
                            $laborContract->HeSoPCDH = $this->getColumnValue('hesopcdh');
                            $laborContract->Ghichu = $this->getColumnValue('ghichu');
                            $laborContract->save();
                        }
                        //$this->logSearchEntry($insurances->SoBHXH, $insurances->SoBHXH, 'employees.show', 'employee', $user->company_id);
                        //dd($insurances);
                        DB::commit();
                    }catch (InvalidFormatException $e){
                        //dd($e->getMessage());
                        DB::rollBack();
                        $this->failJobWithMessage($e->getMessage());
                    }catch (\Exception $e){
                        //dd($e->getMessage());
                        DB::rollBack();
                        $this->failJobWithMessage($e->getMessage());
                    }



            }
            else
            {
                //dd($this->getColumnValue('manv'));
                $this->failJobWithMessage(__('Ma Nv khong ton tai  của') . $this->getColumnValue('manv') . $this->getColumnValue('hoten'));
            }
//
//            $user = User::where('email', $this->getColumnValue('email'))->first();
//
//            if ($user) {
//                $this->failJobWithMessage(__('Check lại Email của ') . $this->getColumnValue('hoten'));
//
//                return;
//            }
//
//            $employeeDetails = EmployeeDetails::where('employee_id', $this->getColumnValue('manv'))->first();
//
//            if ($employeeDetails) {
//                $this->failJobWithMessage(__('Check lại ID bị trùng của') . $this->getColumnValue('manv').$this->getColumnValue('hoten'));
//            }
//            else {
//
//                DB::beginTransaction();
//                try {
//                    $user = new User();
//                    $user->company_id = $this->company?->id;
//
//                    $user->name = $this->getColumnValue('hoten');
//                    $user->manv = $this->getColumnValue('manv');
//                    //$user->gender = $this->getColumnValue('gtinh');
//
//                    $user->folk = $this->getColumnValue('dantoc');
//                    $user->religion = $this->getColumnValue('tongiao');
//                    $user->tempAddress = $this->getColumnValue('tamtru');
//                    $user->trdohv = $this->getColumnValue('trdohv');
//                    $user->educationLevel = $this->getColumnValue('trdovh');
//                    $user->sotruong = $this->isColumnExists('sotruong') ? $this->getColumnValue('sotruong'):'';
//
//                    /* if($this->getColumnValue('email') != "0" || $this->getColumnValue('email')!= "")
//                     {
//                         $user->email = $this->getColumnValue('email');
//                     }else
//                     {
//                         $user->email = "";
//                     }*/
//
//                    $user->email = $this->getColumnValue('email');
//
//                    $user->password = bcrypt(123456);
//
//                    $user->mobile = $this->isColumnExists('mobil') ? $this->getColumnValue('mobil') : null;
//                    if($this->getColumnValue('gtinh') == "1")
//                    {
//                        $user->gender  = "male";
//                    }
//                    else
//                    {
//                        $user->gender  = "female";
//                    }
//                    $user->country_id = 232;
//                    $user->primaryJob = $this->isColumnExists('ngnghiep') ? $this->getColumnValue('ngnghiep') : "";
//                    $user->dtpccc = $this->isColumnExists('dtpccc') ? $this->getColumnValue('dtpccc') : "";
//                    $user->chuyenco = $this->isColumnExists('chuyenco') ? $this->getColumnValue('chuyenco') : "";
//                    $user->ttxep = $this->isColumnExists('ttxep') ? $this->getColumnValue('ttxep') : "";
//                    $user->pkhoild = $this->isColumnExists('pkhoild') ? $this->getColumnValue('pkhoild') : "";
//                    $user->qh2126 = $this->isColumnExists('qh2126') ? $this->getColumnValue('qh2126') : "";
//                    $user->ctcuucb = $this->isColumnExists('cuucb') ? $this->getColumnValue('cuucb') : "";
//                    $user->cttuve = $this->isColumnExists('tuve') ? $this->getColumnValue('tuve') : "";
//                    $user->ctdangvien = $this->isColumnExists('dangvien') ? $this->getColumnValue('dangvien') : "";
//                    $user->chucdanh = $this->isColumnExists('chucdanh') ? $this->getColumnValue('chucdanh') : "";
//                    $user->save();
//
//                    if ($user->id) {
//
//                        $employee = new EmployeeDetails();
//                        $employee->company_id = $this->company?->id;
//                        $employee->user_id = $user->id;
//
//                        //$time_input = strtotime($this->getColumnValue('ngaysinh'));
//                        $time_input  = Date::excelToDateTimeObject($this->getColumnValue('ngaysinh'));
//                        //$time_input  =  $time_input->format('Y-m-d');
//
//                        $employee->date_of_birth = Carbon::instance($time_input);
//
//                        if($this->getColumnValue('qhvochong') == 'COGIADINH' || $this->getColumnValue('qhvochong') == 'COGADINH'){
//                            $employee->marital_status = 'engaged';
//                        }else{
//                            $employee->marital_status = 'single';
//                        }
//
//
//                        $employee->address = $this->isColumnExists('thuongtru') ? $this->getColumnValue('thuongtru') : null;
//                        $employee->about_me = $this->isColumnExists('ghichuhd') ? $this->getColumnValue('ghichuhd') : '';
//                        $employee->employee_id = $this->isColumnExists('manv') ? $this->getColumnValue('manv') : (EmployeeDetails::max('id') + 1);
//                        //$employee->joining_date = $this->isColumnExists('joining_date') ? Carbon::createFromFormat('Y-m-d', $this->getColumnValue('joining_date')) : null;
//                        //$employee->hourly_rate = $this->isColumnExists('hourly_rate') ? preg_replace('/[^0-9.]/', '', $this->getColumnValue('hourly_rate')) : null;
//                        $employee->save();
//                    }
//
//                    $employeeRole = Role::where('name', 'employee')->first();
//                    $user->attachRole($employeeRole);
//                    $user->assignUserRolePermission($employeeRole->id);
//                    $this->logSearchEntry($user->id, $user->name, 'employees.show', 'employee', $user->company_id);
//                    DB::commit();
//                } catch (InvalidFormatException $e) {
//
//                    DB::rollBack();
//                    $this->failJob(__('messages.invalidDate'));
//                } catch (Exception $e) {
//
//                    DB::rollBack();
//                    $this->failJobWithMessage($e->getMessage());
//                }
//            }
//        }
//        else {
//            $this->failJob(__('messages.invalidData'));
//        }
        }
    }
}
