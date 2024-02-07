<h4 class="section-title">Personal Details</h4>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="physical_status_id">Physical Status<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="physical_status_id" id="physical_status_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['registered_bies'])
                                                @foreach ($record['registered_bies'] as $value => $label)
                                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <label class="form-label" for="height_id">Height<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-hashtag"></i></span></div>
                                        <select type="select" name="height_id" id="height_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['heights'])
                                                @foreach ($record['heights'] as $value => $label)
                                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <label class="form-label" for="weight_id">Weight<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-hashtag"></i></span></div>
                                        <select type="select" name="weight_id" id="weight_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['weights'])
                                                @foreach ($record['weights'] as $value => $label)
                                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <label class="form-label" for="body_type_id">Body Type<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="body_type_id" id="body_type_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['body_types'])
                                                @foreach ($record['body_types'] as $value => $label)
                                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <label class="form-label" for="color_id">Color<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="color_id" id="color_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['colors'])
                                                @foreach ($record['colors'] as $value => $label)
                                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <label class="form-label" for="blood_group_id">Blood Group<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="blood_group_id" id="blood_group_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['blood_groups'])
                                                @foreach ($record['blood_groups'] as $value => $label)
                                                    <option value="{{ $value }}">{{ $label }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
