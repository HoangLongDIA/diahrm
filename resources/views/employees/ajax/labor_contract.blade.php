@php
    $updateLeaveQuotaPermission = user()->permission('update_leaves_quota');
@endphp
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
                <h4 class="f-18 f-w-500 mb-0"> Danh Sách Hợp Đồng</h4>



            </div>

            <div class="card-body pt-2 ">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example">
                        <thead class="">
                        <tr>
                            <th style="font-size: 11px">Mã HDLD</th>
                            <th style="font-size: 11px">Loại</th>
                            <th style="font-size: 11px">Người Tuyển Dụng</th>
                            <th style="font-size: 11px">Ngày Bắt đầu HĐ</th>

                            <th style="font-size: 11px">Ngày Hết Hạn HĐ</th>
                            <th style="font-size: 11px">Ngày vào làm </th>
                            <th style="font-size: 11px">Mã Ngạch </th>
                            <th style="font-size: 11px">Ngạch Lương</th>

                            <th style="font-size: 11px">Bậc</th>
                            <th style="font-size: 11px">Hệ số </th>
                            <th style="font-size: 11px">Ngày Tính L</th>


                            <th style="font-size: 11px">Mức Lương</th>
                            <th style="font-size: 11px">PCCV</th>
                            <th style="font-size: 11px">PCKV</th>
                            <th style="font-size: 11px">PCTN</th>
                            <th style="font-size: 11px">PCDH</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($laborContracts as $item)
                            <tr class="tableRow1">
                                <td>{{ $item->MAHDLD }}</td>
                                <td>{{ $item->HTLD }}</td>
                                <td>{{ $item->NguoiDD }}</td>
                                <td>{{ $item->NgayBDHD	 }}</td>

                                <td>{{ $item->NgayHHHD	 }}</td>
                                <td>{{ $item->Ngaynhan	 }}</td>
                                <td>{{ $item->MaNgach	 }}</td>
                                <td>{{ $item->NgachL	 }}</td>

                                <td>{{ $item->BacL	 }}</td>
                                <td>{{ $item->HesoL	 }}</td>
                                <td>{{ $item->TGtinhL	 }}</td>
                                <td>{{ $item->MucL	 }}</td>
                                <td>{{ $item->MucPCCV	 }}</td>
                                <td>{{ $item->HeSoPCKV	 }}</td>
                                <td>{{ $item->HeSoPCTN	 }}</td>
                                <td>{{ $item->HeSoPCDH	 }}</td>
                                <td class="text-center">

                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">No</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                         <textarea rows="5" cols="60" style="overflow-y: scroll;height: 100px;resize: none;">{{ $item->Ghichu }}
                                                        </textarea>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </td>


                                <td >
                                    <div class="task_view">

                                        <div class="dropdown">
                                            <a class="task_view_more d-flex align-items-center justify-content-center dropdown-toggle" type="link"
                                               id="dropdownMenuLink-{{ $item->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="viewport">
                                                <i class="icon-options-vertical icons"></i>
                                            </a>
                                            @if ($addClientPermission == 'all' || $addClientPermission == 'added' || $addClientPermission == 'both')
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-' . $contact->id . '" tabindex="0">



                                                    <a class="dropdown-item edit-insurance" href="javascript:;" data-contact-id="{{ $item->id }}">
                                                        <i class="fa fa-edit mr-2"></i>
                                                        @lang('app.edit')
                                                    </a>

                                                    <a class="dropdown-item delete-table-row" href="javascript:;" data-row-id="{{ $item->id }}">
                                                        <i class="fa fa-trash mr-2"></i>
                                                        Kết thúc hợp đồng
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card-footer pt-2">
                {{ $laborContracts->onEachSide(2)->links() }}
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
    //Show Information of Insurances
    $('body').on('click', '.edit-insurance', function() {
        var id = $(this).data('contact-id');

        var url = "{{ route('laborcontract.edit', ':id') }}";
        url = url.replace(':id', id);

        $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_LG, url);
    });
    //Delete Insurances
    $('body').on('click', '.delete-table-row', function() {
        var id = $(this).data('row-id');
        Swal.fire({
            title: "@lang('messages.sweetAlertTitle')",
            text: "@lang('messages.recoverRecord')",
            icon: 'warning',
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: "@lang('messages.confirmDelete')",
            cancelButtonText: "@lang('app.cancel')",
            customClass: {
                confirmButton: 'btn btn-primary mr-3',
                cancelButton: 'btn btn-secondary'
            },
            showClass: {
                popup: 'swal2-noanimation',
                backdrop: 'swal2-noanimation'
            },
            buttonsStyling: false
        }).then((result) => {
            if (result.isConfirmed) {
                var url = "{{ route('laborcontract.destroy', ':id') }}";
                url = url.replace(':id', id);

                var token = "{{ csrf_token() }}";

                $.easyAjax({
                    type: 'POST',
                    url: url,
                    blockUI: true,
                    data: {
                        '_token': token,
                        '_method': 'DELETE'
                    },
                    success: function(response) {
                        if (response.message == "ok") {
                            window.location.reload();
                        }else{
                            alert("Có Lỗi Xảy ra");
                        }
                    }
                });
            }
        });
    });


</script>



