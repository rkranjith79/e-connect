@extends('layouts.user')

@section('content')
    <div class="py-5 bg-white">
        <div class="container">
            <div id="form_content" class="">
                <div class="d-flex align-items-start">
                    @include('user.profile.sidebar')
                    <div class="aiz-user-panel overflow-hidden">
                        <div class="card">
                            <div id="successMessage" class="" tabindex="0"></div>
                            <div class="card-header">
                                <h5 class="mb-0 h6">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <form class="form-default" id="profile_update_form" role="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <input type="hidden" class="form-control required " value="{{ $profile->id }}"
                                            id="id" name="id" maxlength="255">
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
                                    <div class="text-center mb-3">
                                        <input type="hidden" name="otp" id="otp">
                                        <button type="button" onclick="submitForm()" class="btn btn-primary">Update <i
                                                class="fas fa-check-square"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function submitForm() {
            var formData = $("#profile_update_form").serialize(); // Serialize the form data
            var formData = new FormData(document.getElementById('profile_update_form'));
            if (typeof $('input[name=photo_file]')[0].files[0] !== 'undefined') {
                formData.append('photo_file', $('input[name=photo_file]')[0].files[0]);
            }
            if (typeof $('input[name=jathagam_file]')[0].files[0] !== 'undefined') {
                formData.append('jathagam_file', $('input[name=jathagam_file]')[0].files[0]);
            }
            formData.append('_method', 'PUT');

            $.ajax({
                type: "POST",
                url: "{{ route('user.profile_update', ['id' => $profile->id]) }}", // Replace with your server endpoint
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: formData,
                contentType: false, // Set content type to false for FormData
                processData: false, // Do not process the data, let FormData handle it

                success: function(response) {
                    if (response.status == '200') {
                        //$("#successMessage").show(); // Show success message
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            timer: 2000, // Set a timer to automatically close the alert after 2 seconds
                            timerProgressBar: true,
                            showConfirmButton: false
                        }).then(() => {
                            // Redirect to the specified URL
                            window.location.href =
                                "{{ route('user.profile_edit', ['profile' => Auth::user()->profile->id ?? '', 'uuid' => Auth::user()->profile->uuid ?? '']) }}";
                        });
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
                $("#" + key).focus();

                // $("#" + key).after('<div class="invalid-feedback">' + value[0] + '</div>'); // Display the error message
            });
        }

        function clearErrors() {
            $(".is-invalid").removeClass("is-invalid");
            // $(".invalid-feedback").remove();
        }
    </script>
@endsection
