<!-- ROW START -->
<div class="row py-0 py-md-0 py-lg-3">
    <div class="col-lg-12 col-md-12 mb-4 mb-xl-0 mb-lg-4">



    <!-- Add Task Export Buttons Start -->
    <div class="d-flex justify-content-between action-bar mb-3">
        @if ($addClientPermission == 'all' || $addClientPermission == 'added' || $addClientPermission == 'both')
            <x-forms.link-primary
                class="mr-3 float-left emergency-contacts-btn hdld-btn"
                link="javascript:;"
                icon="plus">
                @lang('app.createNew')
            </x-forms.link-primary>
        @endif
    </div>


    <div class="card bg-white border-0 b-shadow-4">
        <div class="card-header bg-white border-0 text-capitalize d-flex justify-content-between pt-4">
            <h4 class="f-18 f-w-500 mb-0 text-center" style="font-family: sans-serif">Thông Tin Về Hợp Đồng Lao Động</h4>
        </div>

        <div class="card-body pt-2 ">
            <div class="table-responsive">
                @if($laborContract !=null)

                        <table class="table table-bordered" id="example">

                            <tr style="font-family: sans-serif">
                                <td class="text-right"><b>Mã Hợp Đồng Lao Động :</b> </td>
                                <td class="text-left"> {{ $laborContract->MAHDLD }}</td>
                                <td class="text-right"><b>Loại Hợp Đồng :</b> </td>
                                <td class="text-left">{{ $laborContract->HTLD }}</td>
                                <td class="text-right"><b>Đơn Vị Sử Dụng:</b> </td>
                                <td class="text-left">{{ $laborContract->DVSDLD }}</td>
                                <td class="text-center"><b>Lãnh Đạo:</b> </td>
                                <td class="text-left">{{ $laborContract->NguoiDD }}</td>



                            </tr>
                            <tr style="font-family: sans-serif">
                                <td class="text-right"><b>Ngày bắt đầu Hợp Đồng :</b> </td>
                                <td class="text-left"> {{ $laborContract->NgayBDHD }}</td>
                                <td class="text-right"><b>Ngày hết hạn Hợp Đồng:</b> </td>
                                <td class="text-left">{{ $laborContract->NgayHHHD }}</td>
                                <td class="text-right"><b>Ngày Bắt Đầu Đi làm:</b> </td>
                                <td class="text-left">{{ $laborContract->Ngaynhan }}</td>
                                <td class="text-right"><b>Ngày Bắt Đầu Tính Lương:</b> </td>
                                <td class="text-left">{{ $laborContract->TGtinhL }}</td>



                            </tr>
                            <tr style="font-family: sans-serif">
                                <td class="text-right"><b>Mã ngạch lao động :</b> </td>
                                <td class="text-left"> {{ $laborContract->MaNgach }}</td>
                                <td class="text-right"><b>Ngạch Lương:</b> </td>
                                <td class="text-left">{{ $laborContract->NgachL }}</td>
                                <td class="text-right"><b>Bậc Lương :</b> </td>
                                <td class="text-left">{{ $laborContract->BacL }}</td>
                                <td class="text-right"><b>Hệ Số Lương CD :</b> </td>
                                <td class="text-left">{{ $laborContract->HesoL }}</td>



                            </tr>
                            <tr style="font-family: sans-serif">
                                <td class="text-right"><b>Mức Lương :</b> </td>
                                <td class="text-left"> {{ $laborContract->MucL }}</td>
                                <td class="text-right"><b>Hệ số PCCV:</b> </td>
                                <td class="text-left">{{ $laborContract->HeSoPCCV }}</td>
                                <td class="text-right"><b>Mức PCCV :</b> </td>
                                <td class="text-left">{{ $laborContract->MucPCCV }}</td>
                                <td class="text-right"><b>Hệ Số Phụ Cấp Khu Vực :</b> </td>
                                <td class="text-left">{{ $laborContract->HeSoPCKV }}</td>



                            </tr>
                            <tr style="font-family: sans-serif">
                                <td class="text-right"><b>Hệ Số Phụ Cấp Thâm Niên :</b> </td>
                                <td class="text-left">{{ $laborContract->HeSoPCTN }}</td>
                                <td class="text-right"><b>Hệ Số PCDH :</b> </td>
                                <td class="text-left">{{ $laborContract->HeSoPCDH }}</td>
                                <td class="text-right"><b>Thông tin liên Quan</b></td>
                                <td class="text-left" colspan="3">{{ $laborContract->Ghichu }}</td>




                            </tr>
                            <tr style="font-family: sans-serif" class="text-center">
                                <td colspan="8"><button class="btn btn-info">In Hợp Đồng</button></td>
                            </tr>

                        </table>
                @endif
            </div>

        </div>
        <div class="card-footer pt-2">

        </div>
    </div>
    <!-- Task Box End -->
    </div>
    </div>
<script>
    $('body').on('click', '.hdld-btn', function () {
        var url = "{{ route('laborcontract.create') }}?user_id=" + "{{ $employee->id }}";

        $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_LG, url);
    });
</script>

