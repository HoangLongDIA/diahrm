<?php

namespace App\Http\Controllers;

use App\Http\Requests\Insurances\StoreInsuranceRequest;
use App\Models\Insurances;
use Illuminate\Http\Request;
use App\Helper\Reply;
use Illuminate\Support\Facades\DB;
use function Psl\Type\resource;

class InsuranceController extends AccountBaseController
{
    //Create New BHXH
    public function create()
    {
        $this->pageTitle = __('app.addContact');

        $this->userId = request()->user_id ? request()->user_id : null;

        return view('insurances.create', $this->data)->render();
    }

    public function store(StoreInsuranceRequest $request)
    {
        try
        {
            //dd($request->NbdTheYT);
            $insurances = new Insurances();
            $insurances->user_id = !is_null($request->user_id) ? $request->user_id : user()->exactUserid();
            $insurances->SoBHXH = $request->SoBHXH;
            $insurances->ThgBHXH = $request->ThgBHXH;
            $insurances->NmBHXH = $request->NmBHXH;
            $insurances->SotheBHXH = $request->SotheBHXH;
            $insurances->MadkyKCB = $request->MadkyKCB;
            $insurances->NbdTheYT = companyToYmd($request->NbdTheYT);
            $insurances->NktTheYT = companyToYmd($request->NktTheYT);
            $insurances->TgiaBHTN = $request->TgiaBHTN;
            $insurances->ThgBdBHTN = $request->ThgBdBHTN;
            $insurances->NBdBHTN = $request->NBdBHTN;
            $insurances->PCKVBHXH = $request->PCKVBHXH;
            $insurances->QTrBHXH = $request->QTrBHXH;
            $insurances->MSTtncn = $request->MSTtncn;
            $insurances->SoNgPgPt = $request->SoNgPgPt;
            $insurances->save();
            return response()->json([
                'message' => 'ok'
            ]);
        }
        catch (\Exception $ex)
        {

            return response()->json([
                'message' => 'Error'
            ]) ;
        }


       /* $this->contacts = EmergencyContact::where('user_id', $emergencyContact->user_id)->get();
        $html = view('profile-settings.emergency-contacts.data', $this->data)->render();*/

        /*return Reply::successWithData(__('messages.employeeEmergencyContact'), ['html' => $html]);*/

    }
    public function edit($id)
    {
        /*$this->managePermission = user()->permission('manage_emergency_contact');

        abort_403 (
            !($this->managePermission == 'all'
                || ($emergencyContact->added_by == user()->id)
                || ($emergencyContact->user_id == user()->id)
            )
        );*/
        $this->userId = request()->user_id ? request()->user_id : null;
        $this->pageTitle = __('Chỉnh Sửa Thông Tin BHXH');
        $insurances = DB::table('user_insurances')->where('id', $id)->first();
        //dd($insurance);
        $this->insurance =  $insurances;

        return view('insurances.edit', $this->data)->render();
    }
}
