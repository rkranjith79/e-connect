@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createEducation">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Education</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($educations as $education)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $education->title }}</td>
                                        <td>{{ $education->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editEducation btn-sm"
                                                value="{{ $education->id }}">Edit</button>
                                            <button class="btn btn-danger deleteEducation btn-sm"
                                                value="{{ $education->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $educations->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add Education -->
    <div class="modal fade" id="createEducation" save-action="{{ route('admin.education.create') }}"
        token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Education</h4>
                    <button type="button" class="close btn btn-icon" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Education</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Education">
                                <span><small class="errorMsg" id="title_err"></small></span>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Active</label></br>
                                <input type="checkbox" name="active" checked class="form-check-input">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary createEducation">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add Education-->

    <!--Edit Education-->
    <div class="modal fade" id="editEducation" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Education</h4>
                    <button type="button" class="close btn btn-icon" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Education</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Education">
                                <span><small class="errorMsg" id="edit_title_err"></small></span>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Active</label></br>
                                <input type="checkbox" name="active" id="edit_active" class="form-check-input">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary updateEducation">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit Education-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createEducation', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createEducation').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createEducation').attr('token')
                    },
                    data: {
                        'title': title,
                        'active': active,
                    },
                    success: function(response) {
                        if (response.status == 400) {
                            $.each(response.errors, function(key, err_value) {
                                $('#' + key + '_err').removeClass('d-none');
                                $('#' + key + '_err').addClass('text-danger');
                                $('#' + key + '_err').html(err_value);
                            });
                        } else {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $("#createEducation .close").click();
                            $('#createEducation').find('input').val('');
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit Education
            $(document).on('click', '.editEducation', function(e) {

                e.preventDefault();
                var education_id = $(this).val();
                $("#editEducation").modal('show');
                $.ajax({
                    type: "GET",
                    url: "educations/edit/" + education_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.education.id),
                                $('#edit_title').val(response.education.title)
                            if (response.education.active == 1) {
                                $('#edit_active').prop('checked', true)
                            } else {
                                $('#edit_active').prop('checked', false)
                            }
                        }
                    }
                });
            });
            //Update Education
            $(document).on('click', '.updateEducation', function(e) {
                e.preventDefault();
                var education_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "educations/update/" + education_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editEducation').attr('token')
                    },
                    data: {
                        'title': $('#edit_title').val(),
                        'active': $('#edit_active').val(),
                    },
                    success: function(response) {
                        if (response.status == 400) {
                            $.each(response.errors, function(key, err_value) {
                                $('#edit_' + key + '_err').removeClass('d-none');
                                $('#edit_' + key + '_err').addClass('text-danger');
                                $('#edit_' + key + '_err').html(err_value);
                            });
                        } else {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('#editEducation').modal('hide');
                            $('#editEducation').find('input').val('');
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Education
            $(document).on('click', '.deleteEducation', function(e) {

                e.preventDefault();
                var education_id = $(this).val()
                if (confirm('Are your sure want to delete Education??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.education.delete') }}",
                        dataType: "JSON",
                        data: {
                            'education_id': education_id
                        },
                        success: function(response) {
                            if (response.status == 200) {
                                $('#success_message').html('');
                                $('#success_message').addClass('alert alert-danger');
                                $('#success_message').text(response.message);
                                $("#success_message").show();
                                setTimeout(function() {
                                    $("#success_message").hide();
                                }, 2000);
                                $('.table').load(location.href + ' .table');
                            }
                        }
                    });
                }
            });
        });
    </script>
@endpush
