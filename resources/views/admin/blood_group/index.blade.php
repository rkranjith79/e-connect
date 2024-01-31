@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createBloodGroup">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Blood Group</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blood_groups as $blood_group)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blood_group->title }}</td>
                                        <td>{{ $blood_group->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editBloodGroup btn-sm"
                                                value="{{ $blood_group->id }}">Edit</button>
                                            <button class="btn btn-danger deleteBloodGroup btn-sm"
                                                value="{{ $blood_group->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $blood_groups->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add Blood Group -->
    <div class="modal fade" id="createBloodGroup" save-action="{{ route('admin.blood_group.create') }}"
        token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Blood Group</h4>
                    <button type="button" class="close btn btn-icon" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Blood Group</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Blood Group">
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
                        <button type="submit" class="btn btn-primary createBloodGroup">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add BloodGroup-->

    <!--Edit BloodGroup-->
    <div class="modal fade" id="editBloodGroup" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Blood Group</h4>
                    <button type="button" class="close btn btn-icon" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Blood Group</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Blood Group">
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
                        <button type="submit" class="btn btn-primary updateBloodGroup">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit BloodGroup-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createBloodGroup', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createBloodGroup').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createBloodGroup').attr('token')
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
                            $("#createBloodGroup .close").click();
                            $("#success_message").show();
                            $('#createBloodGroup').find('input').val('');
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit BloodGroup
            $(document).on('click', '.editBloodGroup', function(e) {
                e.preventDefault();
                var blood_group_id = $(this).val();
                $("#editBloodGroup").modal('show');
                $.ajax({
                    type: "GET",
                    url: "blood_groups/edit/" + blood_group_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.blood_group.id),
                                $('#edit_title').val(response.blood_group.title)
                            if (response.blood_group.active == 1) {
                                $('#edit_active').prop('checked', true)
                            } else {
                                $('#edit_active').prop('checked', false)
                            }
                        }
                    }
                });
            });
            //Update BloodGroup
            $(document).on('click', '.updateBloodGroup', function(e) {
                e.preventDefault();
                var blood_group_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "blood_groups/update/" + blood_group_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editBloodGroup').attr('token')
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
                            $('#editBloodGroup').modal('hide');
                            $('#editBloodGroup').find('input').val('');
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Blood Group
            $(document).on('click', '.deleteBloodGroup', function(e) {
                e.preventDefault();
                var blood_group_id = $(this).val()
                if (confirm('Are your sure want to delete BloodGroup??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.blood_group.delete') }}",
                        dataType: "JSON",
                        data: {
                            'blood_group_id': blood_group_id
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
