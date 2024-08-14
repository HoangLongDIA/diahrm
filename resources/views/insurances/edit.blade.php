<x-form id="save-insurance-form">
    <div class="modal-header">
        <h5 class="modal-title">@lang('modules.insurances.editInsurance')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
        <div class="portlet-body">

            <div class="add-client bg-white rounded">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12">
                        <input type="hidden" name="user_id" value="{{ $userId }}">

                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <x-forms.text fieldId="SoBHXH" :fieldLabel="__('app.SoBHXH')"
                                              fieldName="SoBHXH" fieldRequired="true"
                                              :fieldPlaceholder="__('Số BHXH : 333338899')"
                                              :fieldValue="$insurance->SoBHXH"
                                >
                                </x-forms.text>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <x-forms.text fieldId="MSTtncn" :fieldLabel="__('Ms Thu nhập cá nhân')"
                                              fieldName="MSTtncn" fieldRequired="true"
                                              :fieldValue="$insurance->MSTtncn"
                                              :fieldPlaceholder="__('Số TNCN : 333338899')">
                                </x-forms.text>
                            </div>

                            <div class="col-md-3 col-sm-3" >
                                <x-forms.select fieldId="ThgBHXH" fieldName="ThgBHXH"
                                                :fieldLabel="__('Tháng Tham gia BHXH')" fieldRequired="true">

                                    @for($i=1; $i <= 12; $i++)
                                        <option value="{{ $i }}" {{ $insurance->ThgBHXH == $i ? 'selected' :'' }}>Tháng {{ $i }}</option>
                                    @endfor


                                </x-forms.select>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <x-forms.text fieldId="NmBHXH" :fieldLabel="__('Năm bắt đầu tham gia')"
                                              fieldName="NmBHXH" fieldRequired="true"
                                              :fieldValue="$insurance->NmBHXH"
                                              :fieldPlaceholder="__('Năm bắt đầu tham gia')">
                                </x-forms.text>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <x-forms.tel fieldId="SotheBHXH" :fieldLabel="__('Số Thẻ BHXH')" fieldName="SotheBHXH"
                                             :fieldValue="$insurance->SotheBHXH"
                                             :fieldPlaceholder="__('48004893099')" fieldRequired="true"></x-forms.tel>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <x-forms.text :fieldLabel="__('Mã đăng ký khám chữa bệnh')" fieldName="MadkyKCB"
                                              fieldId="MadkyKCB" :fieldPlaceholder="__('Mã đăng ký khám chữa bệnh')"
                                              :fieldValue="$insurance->MadkyKCB"
                                              fieldRequired="true"/>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <x-forms.datepicker fieldId="NbdTheYT" :fieldLabel="__('Ngày Bắt Đâu Thẻ BH Y tế')"
                                                    fieldName="NbdTheYT" :fieldPlaceholder="__('Ngày Bắt Đâu Thẻ BH Y tế')"
                                                    :fieldValue="date('d-m-Y', strtotime($insurance->NbdTheYT))"
                                                    fieldRequired="true" />
                            </div>

                            <div class="col-md-3 col-sm-3">
                                <x-forms.datepicker fieldId="NktTheYT" :fieldLabel="__('Ngày hết hạn Thẻ BH Y tế')"
                                                    :fieldValue="date('d-m-Y', strtotime($insurance->NktTheYT))"
                                                    fieldName="NktTheYT" :fieldPlaceholder="__('Ngày hết hạn Thẻ BH Y tế')" fieldRequired="true" />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <x-forms.text :fieldLabel="__('Phụ cấp khu vực tính BHXH')" fieldName="PCKVBHXH"
                                              :fieldValue="$insurance->PCKVBHXH"
                                              fieldId="PCKVBHXH" :fieldPlaceholder="__('0.00')" fieldRequired="true"
                                />
                            </div>
                            <div class="col-md-3 col-sm-3"></div>
                            <div class="col-md-3 col-sm-3">
                                <x-forms.text :fieldLabel="__('Thời gian BHTN')" fieldName="TgiaBHTN"
                                              :fieldValue="$insurance->TgiaBHTN"
                                              fieldId="TgiaBHTN" :fieldPlaceholder="__('1 năm')"
                                />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <x-forms.select fieldId="ThgBdBHTN" fieldName="ThgBdBHTN"
                                                :fieldLabel="__('Tháng bắt đầu BHTN')">

                                    @for($i=1; $i <= 12; $i++)
                                        <option value="{{ $i }}" {{ $insurance->ThgBdBHTN == $i ? 'selected' :'' }}>Tháng {{ $i }}</option>
                                    @endfor


                                </x-forms.select>
                            </div>
                            <div class="col-md- col-sm-3">
                                <x-forms.text :fieldLabel="__('Năm bắt Đầu BHTN')" fieldName="NBdBHTN"
                                              :fieldValue="$insurance->NBdBHTN"
                                              fieldId="NBdBHTN" :fieldPlaceholder="__('Năm bắt Đầu BHTN')"
                                />
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <x-forms.tel :fieldLabel="__('Số Người Phục Thuộc')" fieldName="SoNgPgPt"
                                             :fieldValue="$insurance->SoNgPgPt"
                                             fieldId="SoNgPgPt" :fieldPlaceholder="__('0')" fieldRequired="true"
                                />
                            </div>

                            <div class="col-md-12 col-sm-12">

                                <x-forms.textarea class="mr-0 mr-lg-2 mr-md-2" :fieldLabel="__('Quá Trình Tham Gia BHXH')"
                                                  fieldName="QTrBHXH" fieldId="QTrBHXH"
                                                  :fieldValue="$insurance->QTrBHXH"
                                                  :fieldPlaceholder="__('Từ tháng/năm dến tháng/năm hệ số')" >
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
        //quillImageLoad('#QTrBHXH');
        datepicker('#NbdTheYT', {
            position: 'bl',
            maxDate: new Date(),
            ...datepickerConfig
        });
        datepicker('#NktTheYT', {
            position: 'bl',
            maxDate: new Date(),
            ...datepickerConfig
        });

        $('#save-contact').click(function () {
            /*const url = "{{ route('emergency-contacts.store') }}";*/
           // const url = "{{ route('insurances.store') }}";
            var url = "{{ route('insurances.update', $insurance->id) }}";
            $.easyAjax({
                url: url,
                container: '#save-insurance-form',
                type: "POST",
                disableButton: true,
                buttonSelector: "#save-contact",
                data: $('#save-insurance-form').serialize(),
                success: function (response) {
                    if (response.message === 'ok') {
                        /* $('#example tbody').html(response.html);
                         $(MODAL_LG).modal('hide');*/
                        
                        window.location.reload();
                    }
                    else{
                        //console.log(response);
                        alert("Có lỗi xảy ra");
                    }
                }
            })
        });

    });
</script>
