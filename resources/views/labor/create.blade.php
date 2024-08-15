<x-form id="save-labor-form">
    <div class="modal-header">
        <h5 class="modal-title" style="font-family: sans-serif">Thêm mới thông tin hợp đồng lao động</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
        <div class="portlet-body">

            <div class="add-client bg-white rounded">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12">
                        <input type="hidden" name="user_id" value="{{ $userId }}">
                        <input type="hidden" name="add_id" value="{{ $addId }}">
                        <input type="hidden" name="DVSDLD" value="CHKQTĐN">

                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <x-forms.text fieldId="MAHDLD" :fieldLabel="__('Mã HĐLĐ')"
                                              fieldName="MAHDLD" fieldRequired="true"

                                              :fieldPlaceholder="__('Mã : DAD-045025')">
                                </x-forms.text>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <x-forms.select fieldId="HTLD" fieldName="HTLD"
                                                :fieldLabel="__('Loại Hợp Đồng ')" fieldRequired="true">
                                        <option value="HDTV1" >Hợp Đồng thử việc 1 tháng</option>
                                        <option value="HDTV2" >Hợp Đồng thử việc 2 tháng</option>
                                        <option value="HD1N" >Hợp Đồng thử việc 1 năm</option>
                                        <option value="HD3N" >Hợp Đồng thử việc 3 năm</option>
                                        <option value="HD3N" >Hợp Đồng Không Xác Định Thời Hạn</option>
                                </x-forms.select>
                            </div>

                            <div class="col-md-6 col-sm-6" >
                                <x-forms.text fieldId="NguoiDD" :fieldLabel="__('Người Nhận')"
                                              fieldName="NguoiDD" fieldRequired="true"
                                              :fieldPlaceholder="__('Phan Kiều Hưng')">
                                </x-forms.text>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <x-forms.datepicker fieldId="NgayBDHD" :fieldLabel="__('Ngày Bắt Đâu Hơp Đồng')"
                                                    :fieldPlaceholder="__('Ngày Bắt Đâu')"
                                                    fieldName="NgayBDHD" fieldRequired="true" />
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <x-forms.datepicker fieldId="NgayHHHD" :fieldLabel="__('Ngày Hết Hạn Hơp Đồng')"
                                                    :fieldPlaceholder="__('Ngày Hết Hạn')"
                                                    fieldName="NgayHHHD" fieldRequired="true" />
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <x-forms.datepicker fieldId="Ngaynhan" :fieldLabel="__('Ngày Đi làm')"
                                                    :fieldPlaceholder="__('Ngày Đi làm')"
                                                    fieldName="Ngaynhan" fieldRequired="true" />
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <x-forms.select fieldId="MaNgach" fieldName="MaNgach"
                                                :fieldLabel="__('Mã Ngạch')" fieldRequired="true">
                                    <option value="C-I-2" >C-I-2</option>
                                    <option value="C-I-3" >C-I-3</option>
                                    <option value="C-I-4" >C-I-4</option>
                                    <option value="CVKS" >CVKS</option>
                                    <option value="CS-KTV" >CS-KTV</option>
                                    <option value="AN-AT" >AN-AT</option>
                                </x-forms.select>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <x-forms.text fieldId="NgachL" :fieldLabel="__('Ngạch Lương')"
                                              fieldName="NgachL" fieldRequired="true"
                                              >
                                </x-forms.text>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <x-forms.text fieldId="BacL" :fieldLabel="__('Bậc Lương')"
                                              fieldName="BacL" fieldRequired="true"
                                >
                                </x-forms.text>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <x-forms.text fieldId="HesoL" :fieldLabel="__('Hệ số Lương')"
                                              fieldName="HesoL" fieldRequired="true"
                                >
                                </x-forms.text>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <x-forms.datepicker fieldId="TGtinhL" :fieldLabel="__('Thời Gian Tính Lương')"
                                                    :fieldPlaceholder="__('Thời Gian Tính Lương')"
                                                    fieldName="TGtinhL" fieldRequired="true" />
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <x-forms.text fieldId="MucL" :fieldLabel="__('Mức Lương')"
                                              fieldName="MucL" fieldRequired="true"
                                >
                                </x-forms.text>
                            </div>

                            <div class="col-md-2 col-sm-2">
                                <x-forms.text fieldId="HeSoPCCV" :fieldLabel="__('Hệ số PCCV')"
                                              fieldName="HeSoPCCV" fieldRequired="true"
                                >
                                </x-forms.text>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <x-forms.text fieldId="MucPCCV" :fieldLabel="__('Mức PCCV')"
                                              fieldName="MucPCCV" fieldRequired="true"
                                >
                                </x-forms.text>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <x-forms.text fieldId="HeSoPCKV" :fieldLabel="__('Hệ số PCKV')"
                                              fieldName="HeSoPCKV" fieldRequired="true"
                                >
                                </x-forms.text>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <x-forms.text fieldId="HeSoPCTN" :fieldLabel="__('Hệ số PCTN')"
                                              fieldName="HeSoPCTN" fieldRequired="true"
                                >
                                </x-forms.text>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <x-forms.text fieldId="HeSoPCDH" :fieldLabel="__('Hệ số PCDH')"
                                              fieldName="HeSoPCDH" fieldRequired="true"
                                >
                                </x-forms.text>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <x-forms.textarea class="mr-0 mr-lg-2 mr-md-2" :fieldLabel="__('Ghi Chú')"
                                                  fieldName="Ghichu" fieldId="Ghichu"
                                                  :fieldPlaceholder="__('Ghi Chú')" >
                                </x-forms.textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="modal-footer">
        <x-forms.button-cancel data-dismiss="modal" class="border-0 mr-3">@lang('app.cancel')</x-forms.button-cancel>
        <x-forms.button-primary id="save-contact" icon="check">@lang('app.save')</x-forms.button-primary>
    </div>
</x-form>
<script>
    $(document).ready(function() {
        datepicker('#NgayBDHD', {
            position: 'bl',
            maxDate: new Date(),
            ...datepickerConfig
        });
        datepicker('#NgayHHHD', {
            position: 'bl',
            maxDate: new Date(),
            ...datepickerConfig
        });
        datepicker('#Ngaynhan', {
            position: 'bl',
            maxDate: new Date(),
            ...datepickerConfig
        });
        datepicker('#TGtinhL', {
            position: 'bl',
            maxDate: new Date(),
            ...datepickerConfig
        });


        $('#save-contact').click(function () {

            const url = "{{ route('laborcontract.store') }}";

            $.easyAjax({
                url: url,
                container: '#save-labor-form',
                type: "POST",
                disableButton: true,
                buttonSelector: "#save-contact",
                data: $('#save-labor-form').serialize(),
                success: function (response) {
                    if (response.message === 'ok') {
                        /* $('#example tbody').html(response.html);*/
                        $(MODAL_LG).modal('hide');
                        window.location.reload();
                    }
                    else{
                        alert("Có lỗi xảy ra");
                    }
                }
            })
        });

    });
</script>
