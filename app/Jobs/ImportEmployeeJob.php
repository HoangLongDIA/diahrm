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
        if ($this->isColumnExists('hoten') && $this->isColumnExists('email') && $this->isEmailValid($this->getColumnValue('email'))) {

            $user = User::where('email', $this->getColumnValue('email'))->first();

            if ($user) {
                $this->failJobWithMessage(__('messages.duplicateEntryForEmail') . $this->getColumnValue('email'));

                return;
            }

            $employeeDetails = EmployeeDetails::where('employee_id', $this->getColumnValue('manv'))->first();

            if ($employeeDetails) {
                $this->failJobWithMessage(__('messages.duplicateEntryForEmployeeId') . $this->getColumnValue('employee_id'));
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

                    $user->email = $this->getColumnValue('email');
                    $user->password = bcrypt(123456);

                    $user->mobile = $this->isColumnExists('mobil') ? $this->getColumnValue('mobil') : null;
                    $user->gender = $this->isColumnExists('gtinh') ? strtolower($this->getColumnValue('gtinh')) : null;

                    $user->save();

                    if ($user->id) {

                        $employee = new EmployeeDetails();
                        $employee->company_id = $this->company?->id;
                        $employee->user_id = $user->id;

                        //$time_input = strtotime($this->getColumnValue('ngaysinh'));
                        //dd($this->getColumnValue('ngaysinh'));
                        //$employee->date_of_birth = getdate($time_input);
                        if($this->getColumnValue('qhvochong') == 'COGIADINH' || $this->getColumnValue('qhvochong') == 'COGADINH'){
                            $employee->marital_status = 'engaged';
                        }else{
                            $employee->marital_status = 'single';
                        }


                        $employee->address = $this->isColumnExists('thuongtru') ? $this->getColumnValue('thuongtru') : null;

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
