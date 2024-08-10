@php
$updateLeaveQuotaPermission = user()->permission('update_leaves_quota');
@endphp

    <!-- ROW START -->
<div class="row py-0 py-md-0 py-lg-3">
    <div class="col-lg-12 col-md-12 mb-4 mb-xl-0 mb-lg-4">



        <!-- Add Task Export Buttons Start -->
        <div class="d-flex justify-content-between action-bar mb-3">
            <x-forms.link-primary
                class="mr-3 float-left emergency-contacts-btn"
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Relationship</th>
                            <th class="text-right"></th>
                        </tr>
                        </thead>
                        <tbody><tr class="tableRow1">
                            <td>Test</td>
                            <td>Test@gmail.com</td>
                            <td>111111</td>
                            <td>Test</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-primary">Edit information</button>
                                <button type="button" class="btn btn-danger">Remove</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Task Box End -->
    </div>
</div>

<script>
    $('body').on('click', '.emergency-contacts-btn', function () {
        var url = "{{ route('emergency-contacts.create') }}?user_id=" + "{{ $employee->id }}";

        $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_LG, url);
    });
</script>



