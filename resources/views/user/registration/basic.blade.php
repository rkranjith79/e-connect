<h4 class="section-title">{{ trans('fields.section_basic') }}</h4>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="title">{{ trans('fields.name') }}<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
                <input type="text" class="form-control required "
                    value="{{ old('title') ?? ($profile->title ?? '') }}" id="title" name="title" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"><span class="text-success">முடிந்தவரை தமிழில் பதிவு
                    செய்யவும்.</span></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="email">{{ trans('fields.email') }}
                {{-- <span class="require-star">*</span> --}}
            </label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                @php
                    $user_mail = Auth::user()->email ?? '';
                @endphp
                <input type="email" class="form-control required "
                    value="{{ old('email') ?? ($user_mail) }}" id="email" name="email"
                    maxlength="255" @readonly($user_mail)>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    @if (Auth::check() == false)
        <div class="col-sm-4">
            <div class="form-group mb-3">
                <label class="form-label" for="passwd">{{ trans('fields.password') }}<span
                        class="require-star">*</span></label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control required " value="{{ old('password') ?? '' }}" id="password" name="password"
                        maxlength="100"><button id="toggle-pwd" type="button"><i class="fa fa-eye"></i></button><span
                        class="">
                </div>
                <small class="form-text text-muted text-help">New Password for
                    login.</small>
                <span class="invalid-feedback"></span>
            </div>
        </div>
    @endif
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="gender_id">{{ trans('fields.gender') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="gender_id" id="gender_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['genders'])
                        @foreach ($record['genders'] as $value => $label)
                            <option value="{{ $value }}" @selected(old('gender_id') ?? ($profile->gender_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4 div-marital_status_id">
        <div class="form-group mb-3">
            <label class="form-label" for="marital_status_id">{{ trans('fields.marital_status') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="marital_status_id" id="marital_status_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto"
                    onchange="toggleChildrenDetailds()">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['marital_statuses'])
                        @foreach ($record['marital_statuses'] as $value => $label)
                            <option value="{{ $value }}" @selected(old('marital_status_id') ?? ($profile->marital_status_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>




    <div class="col-sm-4 div-children-details hide">
        <div class="form-group mb-3">
            <label class="form-label" for="children_details">{{ trans('fields.children_details') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-pen"></i></span>
                </div>
                <input type="text" class="form-control required "
                    value="{{ old('children_details') ?? ($profile->children_details ?? '') }}" id="children_details"
                    name="children_details" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="registered_by_id">{{ trans('fields.registered_by') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-caret-down"></i></span></div>
                <select type="select" name="registered_by_id" id="registered_by_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['registered_bies'])
                        @foreach ($record['registered_bies'] as $value => $label)
                            <option value="{{ $value }}" @selected(old('registered_by_id') ?? ($profile->registered_by_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function toggleChildrenDetailds() {
            var marital_status_id = $("#marital_status_id").val();
            if (marital_status_id == 2) {
                $(".div-children-details").removeClass('hide');
                return true;
            }
            $(".div-children-details").addClass('hide');

            return true;
        }
        toggleChildrenDetailds();

        $('#toggle-pwd').click(function() {
            var passwordField = $('#password');
            var fieldType = passwordField.attr('type');

            if (fieldType === 'password') {
                passwordField.attr('type', 'text');
                $('#toggle-pwd i').removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                passwordField.attr('type', 'password');
                $('#toggle-pwd i').removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
    </script>
@endpush
