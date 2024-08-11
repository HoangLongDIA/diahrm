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
                                <td>Số BHXH</td>
                                <td>Tháng Bắt Đầu</td>
                                <td>Năm bắt Đầu</td>
                                <td>Số Thẻ</td>

                                <td>MadkyKCB</td>
                                <td>NbdTheYT</td>
                                <td>NktTheYT</td>
                                <td>TgiaBHTN</td>

                                <td>ThgBdBHTN</td>
                                <td>NBdBHTN</td>
                                <td>PCKVBHXH</td>
                                <td>MSTtncn</td>
                                <td>SoNgPgPt</td>
                                <td class="text-right"><button type="button" class="btn btn-success">Xem Quá Trình</button></td>


                                <td class="text-left">
                                    <button type="button" class="btn btn-primary">Edit </button>
                                    <button type="button" class="btn btn-danger">Remove</button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
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
</script>



