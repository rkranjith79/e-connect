@extends('layouts.user')

@section('content')
    <div class="py-4 py-lg-5 bg-cover bg-center d-flex align-items-center position-relative"
        style="background-image: url(https://ganeshkongumatrimony.com/uploads/all/iajOd79XuUcPqOVehemGLDHv8YBk3wj2tn4H4M0w.jpg)">
        <span class="mask"></span>
        <div class="container-fluid">
            <div id="form_content" class="row">
                <div class="col-12 col-xl-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2 text-center">
                                <h1 class="h3 text-primary mb-0">Create Your Account</h1>
                                <p>Register yourself in our website to access thousands of profiles and find your
                                    life partner.</p>
                                <form>
                                    <label class="text-primary font-weight-bold pr-2">Language/மொழி</label>
                                    <a href="https://ganeshkongumatrimony.com/set_language/in"
                                        class="text-reset font-weight-bold pr-2">
                                        <div class="aiz-radio aiz-radio-inline">
                                            <input type="radio" name="lang"> தமிழ்<span
                                                class="aiz-rounded-check"></span>
                                        </div>
                                    </a>
                                    <a href="https://ganeshkongumatrimony.com/set_language/en"
                                        class="text-reset font-weight-bold pl-2">
                                        <div class="aiz-radio aiz-radio-inline">
                                            <input type="radio" name="lang" checked> English<span
                                                class="aiz-rounded-check"></span>
                                        </div>
                                    </a>
                                </form>
                            </div>
                            <form class="form-default" id="registration_form" role="form" method="POST">
                                @csrf
                                @include('user.registration.basic')
                                @include('user.registration.personal')
                                @include('user.registration.religion')

                                @include('user.registration.education')
                                @include('user.registration.contact')
                                @include('user.registration.family')
                                @include('user.registration.asset')
                                @include('user.registration.astro')
                                @include('user.registration.expectation')
                                

                
                            

                                <div class="mt-3 text-center">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" name="tandc" required checked disabled>
                                        <span class="opacity-60">By signing up you agree to our
                                            <a href="/terms-conditions" target="_blank">Terms and Conditions.</a>
                                        </span>
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>

                                <div class="text-center mb-3">
                                    <input type="hidden" name="otp" id="otp">
                                    <button type="button" onclick="submitForm()" class="btn btn-primary">Register <i
                                            class="fas fa-check-square"></i></button>
                                </div>

                                <div class="text-center">
                                    <p class="text-muted mb-0">Already have an account?</p>
                                    <a href="https://ganeshkongumatrimony.com/login">Login to your account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function submitForm() {
            var formData = $("#registration_form").serialize(); // Serialize the form data

            $.ajax({
                type: "POST",
                url: "{{ route('user.profile_store') }}", // Replace with your server endpoint
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: formData,
                success: function(response) {
                    if (response.success) {
                        $("#myForm")[0].reset(); // Reset the form
                        $("#successMessage").show(); // Show success message
                        clearErrors(); // Clear any previous error messages
                    } else {
                        handleErrors(response.errors); // Display validation errors
                    } // Handle the server response as needed
                },
                error: function(error) {
                    if (response.success) {
                        $("#myForm")[0].reset(); // Reset the form
                        $("#successMessage").show(); // Show success message
                        clearErrors(); // Clear any previous error messages
                    } else {
                        handleErrors(response.errors); // Display validation errors
                    }
                }
            });
        }

        function handleErrors(errors) {
            clearErrors();

            $.each(errors, function(key, value) {
                $("#" + key).addClass("is-invalid"); // Add 'is-invalid' class to the input
                $("#" + key).removeClass('is-valid').addClass('is-invalid');
                $("#" + key).parents('.input-group').removeClass('is-valid').addClass('is-invalid');
                $("#" + key).parents('.form-control').removeClass('is-valid').addClass('is-invalid');


                $("#" + key).parents('.form-group').find('.invalid-feedback').text(value[0]);

                // $("#" + key).after('<div class="invalid-feedback">' + value[0] + '</div>'); // Display the error message
            });
        }

        function clearErrors() {
            $(".is-invalid").removeClass("is-invalid");
            // $(".invalid-feedback").remove();
        }
    </script>
@endsection
