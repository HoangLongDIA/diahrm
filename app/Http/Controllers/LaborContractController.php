<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaborContract\StoreLaborContractRequest;
use App\Models\LaborContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaborContractController extends Controller
{
    //
    public function create()
    {
        $viewPermission = user()->permission('view_clients');
        $this->addClientPermission = user()->permission('add_clients');
        abort_403(!in_array($viewPermission, ['all', 'added', 'both']));

        $this->pageTitle = __('app.addLaborContract');

        $this->userId = request()->user_id ? request()->user_id : null;
        $this->addId = user()->id;

        return view('labor.create', $this->data)->render();
    }

    public function store(StoreLaborContractRequest $request)
    {
        $viewPermission = user()->permission('view_clients');
        $this->addClientPermission = user()->permission('add_clients');
        abort_403(!in_array($viewPermission, ['all', 'added', 'both']));
        try
        {
            $laborContract = new LaborContract();
            $laborContract->user_id = !is_null($request->user_id) ? $request->user_id : user()->id;
            $laborContract->add_id = user()->exactUserid();
            $laborContract->MAHDLD = $request->MAHDLD;
            $laborContract->HTLD = $request->HTLD;
            $laborContract->DVSDLD = $request->DVSDLD;
            $laborContract->NguoiDD = $request->NguoiDD;
            $laborContract->NgayBDHD = companyToYmd($request->NgayBDHD);
            $laborContract->NgayHHHD = companyToYmd($request->NgayHHHD);
            $laborContract->Ngaynhan = companyToYmd($request->Ngaynhan);
            $laborContract->MaNgach = $request->MaNgach;
            $laborContract->NgachL = $request->NgachL;
            $laborContract->BacL = $request->BacL;
            $laborContract->HesoL = $request->HesoL;
            $laborContract->TGtinhL = companyToYmd($request->TGtinhL);
            $laborContract->MucL = $request->MucL;
            $laborContract->HeSoPCCV = $request->HeSoPCCV;
            $laborContract->MucPCCV = $request->MucPCCV;
            $laborContract->HeSoPCKV = $request->HeSoPCKV;
            $laborContract->HeSoPCTN = $request->HeSoPCTN;
            $laborContract->HeSoPCDH = $request->HeSoPCDH;
            $laborContract->Ghichu = $request->Ghichu;
            $laborContract->save();
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
    }
    public function edit($id)
    {
        $viewPermission = user()->permission('view_clients');
        $this->addClientPermission = user()->permission('add_clients');
        abort_403(!in_array($viewPermission, ['all', 'added', 'both']));
        $this->userId = request()->user_id ? request()->user_id : null;
        $this->addId = user()->id;
        $this->pageTitle = __('Chỉnh Sửa Thông Tin Hợp Đồng');
        $laborContract = DB::table('labor_contracts')->where('id', $id)->first();
        $this->laborcontract = $laborContract;
        return view('labor.edit', $this->data)->render();
    }

}
