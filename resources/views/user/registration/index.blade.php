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
                                <h1 class="h3 text-primary mb-0">{{ trans('site.create_your_account') }}</h1>
                                <p>{{ trans('site.create_your_account_sub_label') }}</p>
                            </div>
                            <form class="form-default" id="registration_form" role="form" method="POST"
                                enctype="multipart/form-data">
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
                                <div id="error_list" class="alert-danger text-danger">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var isAuthenticated = {{ Auth::check() ? 'true' : 'false' }};

        function submitForm() {
            var formData = $("#registration_form").serialize(); // Serialize the form data

            var formData = new FormData(document.getElementById('registration_form'));

            formData.append('photo_file', $('input[name=photo_file]')[0].files[0]);
            formData.append('jathagam_file', $('input[name=jathagam_file]')[0].files[0]);

            $.ajax({
                type: "POST",
                url: isAuthenticated ? "{{ route('user.profile_create_authenticated') }}" : "{{ route('user.profile_store') }}",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: formData,
                contentType: false, // Set content type to false for FormData
                processData: false, // Do not process the data, let FormData handle it

                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire({
                            title: 'Success!',
                            text: "Registration Successful",
                            icon: 'success',
                            timer: 2000, // Set a timer to automatically close the alert after 2 seconds
                            timerProgressBar: true,
                            showConfirmButton: false
                        }).then(() => {
                            // Redirect to the specified URL
                            window.location.href = "{{ route('user.member-listing') }}";
                        });
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
                },
                error: function(xhr) {
                    if (xhr.status === 400) {
                        // Handle validation error response
                        handleErrors(xhr.responseJSON.errors); // Display validation errors
                    } else {
                        console.log("An error occurred:", xhr);
                    }
                }
            });
        }

        function handleErrors(errors) {
            clearErrors();
            errorMsg = "<ul>";
            $.each(errors, function(key, value) {
                $("#" + key).addClass("is-invalid"); // Add 'is-invalid' class to the input
                $("#" + key).removeClass('is-valid').addClass('is-invalid');
                $("#" + key).parents('.input-group').removeClass('is-valid').addClass('is-invalid');
                $("#" + key).parents('.form-control').removeClass('is-valid').addClass('is-invalid');
                $("#" + key).parents('.form-group').find('.invalid-feedback').text(value[0]);
                $("#" + key).focus();
                errorMsg += "<li>" + value[0] + "</li>";
            });
            errorMsg += "</ul>";
            $("#error_list").html(errorMsg);
        }

        function clearErrors() {
            $(".is-invalid").removeClass("is-invalid");
            // $(".invalid-feedback").remove();
        }
    </script>
@endsection
