<div class="col-md-6 text-center mx-auto">
    <div class="form-group mx-auto">
        <label class="form-label w-100" for="jathagam_file">{{ trans('fields.jathagam_file') }}<span
                class="require-star">*</span></label>
        <div class="input-group fileinput fileinput-new text-center" data-provides="fileinput">
            <div class="fileinput-new thumbnail img-raised" height="150px" width="250px">
                    <img src="{{ ($profileJathagam->jathagamFile) ?? asset('img/registration/horoscope.png') }}" alt="jathagam file">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
            <div>
                <span class="btn btn-raised btn-round btn-primary btn-file btn-sm">
                    <span class="fileinput-new"
                        onclick="$('#jathagam_file').trigger('click');">{{ trans('fields.jathagam_file') }}</span>
                    <span class="fileinput-exists" onclick="$('#jathagam_file').trigger('click');">Change</span>
                    <input type="file" class="required" name="jathagam_file" id="jathagam_file"
                        accept=".jpg,.jpeg,.png" />
                </span>
                <a href="#pablo" class="btn btn-danger btn-round btn-sm fileinput-exists" data-dismiss="fileinput"><i
                        class="fas fa-times"></i> Remove</a>
            </div>
        </div>
        <h5 class="info-text mb-0" id="jathagam_file_help"></h5>
        <small class="form-text text-muted">Only jpeg, jpg, png files less than <span class="text-bold">2 MB</span>
            are allowed.</small>
        <span class="invalid-feedback"></span>
    </div>
</div>
