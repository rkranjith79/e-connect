@extends('layouts.admin')
@section('content')
    <div class="row " id="page_details">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>

                    <button type="button" class="btn btn-primary btn-sm float-end" onclick="submitForm()">
                        Save
                    </button>
                    <a class="float-end  pr-4" href="{{ route('admin.information_admin.index') }}">Back</a>
                </div>
                <div class="card-body table-body">
                    <form method="post" id="registration_form">

                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $form_data['id'] ?? '' }}">
                        <div class="form-group">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $form_data['title'] ?? '' }}">
                            <small class="form-text text-muted text-help"></small>
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label for="title" class="form-label">Code <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="code" name="code" placeholder="Code" value="{{ $form_data['code'] ?? '' }}">
                            <small class="form-text text-muted text-help"></small>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" class="form-control" rows="15" height="500px" name="content">value="{{ $form_data['content'] ?? '' }}"</textarea>
                            <small class="form-text text-muted text-help"></small>
                            <span class="invalid-feedback"></span>
                        </div>
                    </form>                      
                </div>
                <div class="card-footer clearfix">
                    <button type="button" class="btn btn-primary btn-sm float-end" onclick="submitForm()">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    
@endsection
@push('script')
<script>
    $(document).ready(function() {
  $('#summernote').summernote({
        placeholder: 'Fill',
        tabsize: 2,
        height: 500
      });
});

</script>

<script>
    function submitForm() {
        var form_data = new FormData(document.getElementById('registration_form'));  

        $.ajax({
            type: "POST",
            url: "{{ route('admin.information_admin.store') }}", // Replace with your server endpoint
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: form_data,
            contentType: false, // Set content type to false for FormData
            processData: false, // Do not process the data, let FormData handle it
        
            success: function(response) {
                if (response.success) {
                    $("#registration_form")[0].reset(); // Reset the form
                    $("#successMessage").show(); // Show success message
                    clearErrors(); // Clear any previous error messages
                    window.location.replace("{{ route('admin.information_admin.index') }}");

                } else {
                    handleErrors(response.errors); // Display validation errors
                } // Handle the server response as needed
            },
            error: function(error) {
                if (response.success) {
                    $("#registration_form")[0].reset(); // Reset the form
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
@endpush