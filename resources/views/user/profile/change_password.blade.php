@extends('layouts.user')

@section('content')
    <div class="py-5 bg-white">
        <div class="container">
            <div id="form_content" class="row">
                <div class="d-flex align-items-start">
                    @include('user.profile.sidebar')
                    <div class="aiz-user-panel overflow-hidden">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Change Password</h5>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <input type="hidden" name="_token" value="gypqxyZf8IjykbEMkASsKC4vK51zE68KRz8Y65pQ">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Old Password<span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="password" name="old_password" id="old_password"
                                                class="form-control" placeholder="Old Password" required="">
                                            <button class="toggle-pwd" type="button"
                                                onclick="toggle_pwd('#old_password')"><i class="fa fa-eye"></i></button>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Password<span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="password" name="password" id="new_password" class="form-control"
                                                placeholder="Password" required="">
                                            <button class="toggle-pwd" type="button"
                                                onclick="toggle_pwd('#new_password')"><i class="fa fa-eye"></i></button>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Confirm Password<span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" name="confirm_password"
                                                onkeyup="checkPasswordValidation(123)" id="confirm_password"
                                                placeholder="Confirm Password" required="">
                                            <button class="toggle-pwd" type="button"
                                                onclick="toggle_pwd('#confirm_password')"><i
                                                    class="fa fa-eye"></i></button>
                                            <small id="confirm_password_help" class="form-text text-muted"
                                                style="color: red; display: none;">Mismatch Password.</small>
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" id="passSaveBtn"
                                                disabled="">Confirm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
