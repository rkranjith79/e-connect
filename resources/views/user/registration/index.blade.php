@extends('layouts.user')

@section('content')
    <div class="py-4 py-lg-5 bg-cover bg-center d-flex align-items-center position-relative"
    style="background-image: url('{{ asset('img/uploads/2.png') }}')">

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
                            </div>
                            <form class="form-default" id="registration_form" role="form" method="POST"
                                enctype="multipart/form-data">>
                                @csrf
                                <div class="form-row">
                                    @include('user.registration.profile_photo')
                                    @include('user.registration.profile_horoscope')
                                </div>
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
                                    <a href="https://econnectmatrimony.com/login">Login to your account</a>
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

            var formData = new FormData(document.getElementById('registration_form'));

            formData.append('photo_file', $('input[name=photo_file]')[0].files[0]);
            formData.append('jathagam_file', $('input[name=jathagam_file]')[0].files[0]);

            $.ajax({
                type: "POST",
                url: "{{ route('user.profile_store') }}", // Replace with your server endpoint
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: formData,
                contentType: false, // Set content type to false for FormData
                processData: false, // Do not process the data, let FormData handle it

                success: function(response) {
                    if (response.success) {
                        window.location.replace("{{ route('user.member-listing') }}"); 
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
