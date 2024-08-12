@php
$updateLeaveQuotaPermission = user()->permission('update_leaves_quota');
@endphp

    <!-- ROW START -->
<div class="row py-0 py-md-0 py-lg-3">
    <div class="col-lg-12 col-md-12 mb-4 mb-xl-0 mb-lg-4">



        <!-- Add Task Export Buttons Start -->
        <div class="d-flex justify-content-between action-bar mb-3">
            <x-forms.link-primary
                class="mr-3 float-left emergency-contacts-btn bhxh-btn"
                link="javascript:;"
                icon="plus">
                @lang('app.createNew')
            </x-forms.link-primary>
        </div>


        <div class="card bg-white border-0 b-shadow-4">
            <div class="card-header bg-white border-0 text-capitalize d-flex justify-content-between pt-4">
                <h4 class="f-18 f-w-500 mb-0"> @lang('app.qt_bhxh')</h4>



            </div>

            <div class="card-body pt-2 ">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example">
                        <thead class="">
                        <tr>
                            <th>Số BHXH</th>
                            <th>Tháng Bắt Đầu</th>
                            <th>Năm bắt Đầu</th>
                            <th>Số Thẻ</th>

                            <th>MadkyKCB</th>
                            <th>Từ </th>
                            <th>Đến </th>
                            <th>Thời gian BHTN</th>

                            <th>Từ Tháng</th>
                            <th>Năm </th>
                            <th>Phụ cấp Khu vực</th>


                            <th>Mã số TNCN</th>
                            <th>Số người PT</th>
                            <th></th>
                            <th></th>


                        </tr>
                        </thead>
                        <tbody>
                            @foreach($insurances as $item)
                                <tr class="tableRow1">
                                    <td>{{ $item->SoBHXH }}</td>
                                    <td>{{ $item->ThgBHXH }}</td>
                                    <td>{{ $item->NmBHXH }}</td>
                                    <td>{{ $item->SotheBHXH	 }}</td>

                                    <td>{{ $item->MadkyKCB	 }}</td>
                                    <td>{{ $item->NbdTheYT	 }}</td>
                                    <td>{{ $item->NktTheYT	 }}</td>
                                    <td>{{ $item->TgiaBHTN	 }}</td>

                                    <td>{{ $item->ThgBdBHTN	 }}</td>
                                    <td>{{ $item->NBdBHTN	 }}</td>
                                    <td>{{ $item->PCKVBHXH	 }}</td>
                                    <td>{{ $item->MSTtncn	 }}</td>
                                    <td>{{ $item->SoNgPgPt	 }}</td>
                                    <td class="text-right"><button type="button" class="btn btn-info" style="height: 30px;font-size: small">Xem Quá Trình</button></td>


                                    <td >
                                        <div class="task_view">

                                            <div class="dropdown">
                                                <a class="task_view_more d-flex align-items-center justify-content-center dropdown-toggle" type="link"
                                                   id="dropdownMenuLink-{{ $item->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="viewport">
                                                    <i class="icon-options-vertical icons"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-' . $contact->id . '" tabindex="0">



                                                    <a class="dropdown-item edit-insurance" href="javascript:;" data-contact-id="{{ $item->id }}">
                                                        <i class="fa fa-edit mr-2"></i>
                                                        @lang('app.edit')
                                                    </a>

                                                    <a class="dropdown-item delete-table-row" href="javascript:;" data-row-id="{{ $item->id }}">
                                                        <i class="fa fa-trash mr-2"></i>
                                                        @lang('app.delete')
                                                    </a>
                                                </div>
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
                   {{ $insurances->onEachSide(2)->links() }}
            </div>
        </div>
        <!-- Task Box End -->
    </div>
</div>

<script>
    $('body').on('click', '.bhxh-btn', function () {
        var url = "{{ route('insurances.create') }}?user_id=" + "{{ $employee->id }}";

        $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_LG, url);
    });
    //Show Information of Insurances
    $('body').on('click', '.edit-insurance', function() {
        var id = $(this).data('contact-id');

        var url = "{{ route('insurances.edit', ':id') }}";
        url = url.replace(':id', id);

        $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_LG, url);
    });
</script>



