<!-- ROW START -->
<div class="row py-0 py-md-0 py-lg-2">
    <div class="col-lg-12 col-md-12 mt-2 mb-xl-0 mb-lg-4">



    <!-- Add Task Export Buttons Start -->
        <div class="d-flex justify-content-between action-bar">
            <div id="table-actions" class="d-block d-lg-flex align-items-center">
                @if ($addClientPermission == 'all' || $addClientPermission == 'added' || $addClientPermission == 'both')
                    <x-forms.link-primary
                        class="mr-3 float-left emergency-contacts-btn hdld-btn"
                        link="javascript:;"
                        icon="plus">
                        Cập Nhật
                    </x-forms.link-primary>
                    <x-forms.link-secondary
                        class="mr-3 float-left emergency-contacts-btn hdld-btn"
                        link="javascript:;"
                        icon="file-upload">
                       In Hợp Đồng
                    </x-forms.link-secondary>
            </div>


            @endif
        </div>





    </div>
    <!-- Task Box End -->
</div>
<div class="d-lg-flex">
    <div class="w-100 py-0 py-lg-3 py-md-0">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-4 mb-xl-0 mb-lg-4 mb-md-0">
                <div class="row">
                    <div class="col-xl-7 col-md-6 mb-4 mb-lg-0">
                        <x-cards.data :title="__('Thông Tin Hợp Đồng lao Động')">
                            @if($laborContract !=null)
                                <x-cards.data-row :label="__('Mã Hợp Đồng')"
                                                  :value="$laborContract->MAHDLD" />
                                <x-cards.data-row :label="__('Loại Hợp Đồng')"
                                                  :value="$laborContract->HTLD" />
                                <x-cards.data-row :label="__('Ngày Bắt Đầu Hợp Đồng')"
                                                  :value="$laborContract->NgayBDHD" />

                                <x-cards.data-row :label="__('Ngày Hết Hạn Hợp Đồng')"
                                                  :value="$laborContract->NgayHHHD" />

                                <x-cards.data-row :label="__('Mã Ngạch')"
                                                  :value="$laborContract->MaNgach" />
                                <x-cards.data-row :label="__('Ngạch Lương')"
                                                  :value="$laborContract->NgachL" />
                                <x-cards.data-row :label="__('Mức Lương')"
                                                  :value="$laborContract->MucL" />
                                <x-cards.data-row :label="__('HeSoPCCV')"
                                                  :value="$laborContract->HeSoPCCV" />
                                <x-cards.data-row :label="__('HeSoPCTN')"
                                                  :value="$laborContract->HeSoPCTN" />
                                <x-cards.data-row :label="__('HeSoPCDH')"
                                                  :value="$laborContract->HeSoPCDH" />

                            @endif


                        </x-cards.data>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <x-cards.data class="mb-4" :title="__('Đơn Vị Sử Dụng lao Động')"  >
                            @if($laborContract !=null)
                                <x-cards.data-row :label="__('Đơn Vị Sử Dụng lao Động')"
                                                  :value="$laborContract->DVSDLD" />
                                <x-cards.data-row :label="__('Người ký kết HĐ')"
                                                  :value="$laborContract->NguoiDD" />
                                <x-cards.data-row :label="__('Ngày đi làm')"
                                                  :value="$laborContract->Ngaynhan" />
                                <x-cards.data-row :label="__('Ngày tính lương')"
                                                  :value="$laborContract->TGtinhL" />
                                <x-cards.data-row :label="__('Bậc lương')"
                                                  :value="$laborContract->BacL" />
                                <x-cards.data-row :label="__('Hệ Số lương')"
                                                  :value="$laborContract->HesoL" />
                                <x-cards.data-row :label="__('MucPCCV')"
                                                  :value="$laborContract->MucPCCV" />
                                <x-cards.data-row :label="__('Hệ số phụ cấp khu vực')"
                                                  :value="$laborContract->HeSoPCCV" />
                                <x-cards.data-row :label="__('Ghi Chú hợp đồng')"
                                                  :value="$laborContract->Ghichu" />


                            @endif
                                <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                    <p class="mb-0 text-lightest f-14 w-30 text-capitalize">    </p>
                                    <p class="mb-0 text-dark-grey f-14 w-70 text-wrap"></p>
                                </div>
                                <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                    <p class="mb-0 text-lightest f-14 w-30 text-capitalize">    </p>
                                    <p class="mb-0 text-dark-grey f-14 w-70 text-wrap"></p>
                                </div>

                        </x-cards.data>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('body').on('click', '.hdld-btn', function () {
        var url = "{{ route('laborcontract.create') }}?user_id=" + "{{ $employee->id }}";

        $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_LG, url);
    });
</script>

