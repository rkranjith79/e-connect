   <div class="col-md-6 div-photo text-center">
       <div class="form-group mx-auto">
           <label class="form-label w-100" for="photo">{{ trans('fields.photo_file') }}<span
                   class="require-star">*</span></label>
           <div class="input-group fileinput fileinput-new text-center" data-provides="fileinput">
               <div class="fileinput-new thumbnail img-raised" height="150px" width="250px">
                   <img loading="lazy" src="{{ ($profile->photo) ?? asset('img/registration/profile.png') }}" alt="photo">
               </div>
               <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
               <div>
                   <span class="btn btn-raised btn-round btn-primary btn-file btn-sm">
                       <span class="fileinput-new"
                           onclick="$('#photo').trigger('click');">{{ trans('fields.photo_file') }}</span>
                       <span class="fileinput-exists" onclick="$('#photo').trigger('click');">Change</span>
                       <input type="file" name="photo_file" id="photo_file"
                           accept=".jpg,.jpeg,.png" />
                   </span>
                   <a href="#pablo" class="btn btn-danger btn-round btn-sm fileinput-exists"
                       data-dismiss="fileinput"><i class="fas fa-times"></i> Remove</a>
               </div>
           </div>
           <h5 class="info-text mb-0" id="photo_help"></h5>
           <small class="form-text text-muted">Only jpeg, jpg, png files less than <span class="text-bold">2 MB</span>
               are allowed.</small>
           <span class="invalid-feedback"></span>
       </div>
   </div>
