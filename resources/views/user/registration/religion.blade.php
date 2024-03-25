<h4 class="section-title">{{ trans("fields.section_religion") }}</h4>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="religion_id">{{ trans("fields.religion") }}<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="religion_id" id="religion_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto" onchange="dependencyDropDown($parent_id='religion_id',$child_id='caste_id',$data_id='religion-id')">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['religions'])
                    @foreach($record['religions'] as $value => $label)
                        <option value="{{ $value }}" @selected(old('religion_id') ?? ($profileBasic->religion_id ?? '') == $value)>{{ $label }}</option>
                    @endforeach
                @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="caste_id">{{ trans("fields.caste") }}<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="caste_id" id="caste_id" onchange="dependencyDropDown($parent_id='caste_id',$child_id='sub_caste_id',$data_id='caste-id')" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['castes'])
                        @foreach ($record['castes'] as $value => $label)
                            <option value="{{ $label['id'] }}" data-religion-id="{{ $label['religion_id'] }}" @selected(old('caste_id') ?? ($profileBasic->caste_id ?? '') == $label['id'])>{{ $label['title'] }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="sub_caste_id">{{ trans("fields.sub_caste") }}<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="sub_caste_id" id="sub_caste_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option data-caste-id="" style="display:none" value="">-- Select --</option>
                    @isset($record['sub_castes'])
                        @foreach ($record['sub_castes'] as $value => $label)                        
                            <option value="{{ $label['id'] }}" data-caste-id="{{ $label['caste_id'] }}" @selected(old('sub_caste_id') ?? ($profileBasic->sub_caste_id ?? '') == $label['title'])>{{ $label['title'] }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="temple">{{ trans("fields.temple") }}<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                </div>
                <input type="text" class="form-control required " value="{{ old('temple') ?? ($profileBasic->temple ?? '') }}" id="temple" name="temple"
                    maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
@push('scripts')
<script >
        
    $(document).ready(function(){

       // 
    //    $('#sub_caste_id').removeClass('aiz-selectpicker');
    //    $('#sub_caste_id').addClass('aiz-selectpicker').selectpicker('refresh');
        // $('#sub_caste_id').selectpicker("destroy");
        //  $('#sub_caste_id').selectpicker('refresh');


      
    }).change();

    </script>
@endpush