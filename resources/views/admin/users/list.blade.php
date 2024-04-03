@extends('layouts.admin')
@section('content')
    <div class="row " id="page_details">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createUser">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editUser btn-sm"
                                                value="{{ $user->id }}">Edit</button>
                                            <button class="btn btn-danger deleteUser btn-sm"
                                                value="{{ $user->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add user -->
    <div class="modal fade" id="createUser" save-action="{{ route('admin.user.create') }}" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="close btn btn-icon" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <ul id="saveform_errorlist"></ul>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="">
                                <span><small class="errorMsg" id="name_err"></small></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email">
                                <span><small class="errorMsg" id="email_err"></small></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="password">
                                <span><small class="errorMsg" id="password_err"></small></span>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Status</label></br>
                                <input type="checkbox" name="status" checked class="form-check-input">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary createUser">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add user-->

    <!--Edit User-->
    <div class="modal fade" id="editUser" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close btn btn-icon" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="edit_name" name="name" placeholder="">
                                <span><small class="errorMsg" id="edit_name_err"></small></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="edit_email" name="email"
                                    placeholder="Email">
                                <span><small class="errorMsg" id="edit_email_err"></small></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="edit_password" name="password"
                                    placeholder="password">
                                <span><small class="errorMsg" id="edit_password_err"></small></span>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Status</label></br>
                                <input type="checkbox" name="status" id="edit_status" class="form-check-input">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary updateUser">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit User-->
@endsection
@push('script')
    <script>
        //$(document).ready(function() {
        //Save User
        // $(".createUser").click(function(e) {
        //$( ".createUser" ).on( "click", function(e) {
        $(document).on('click', '.createUser', function(e) {

            e.preventDefault();
            var name = $('input[name=name]').val();
            var email = $('input[name=email]').val();
            var password = $('input[name=password]').val();
            //var status = $('input[name=status]').val();
            var status = $('input[name=active]').prop('checked');
            $('#name_err').addClass('d-none');
            $('#email_err').addClass('d-none');
            $('#password_err').addClass('d-none');
            $.ajax({
                type: 'POST',
                url: $('#createUser').attr('save-action'),
                headers: {
                    'X-CSRF-TOKEN': $('#createUser').attr('token')
                },
                data: {
                    'name': name,
                    'email': email,
                    'password': password,
                    'status': status,
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
                        $("#createUser .close").click();
                        $('#createUser').find('input').val('');
                        $("#success_message").show();
                        setTimeout(function() {
                            $("#success_message").hide();
                        }, 2000);
                        $('.table-body').empty().load(location.href + ' .table-data');
                    }
                }
            });
        });
        //});
        //Edit User
        //$(".editUser").click(function(e) {
        //$( ".editUser" ).on( "click", function(e) {
        $(document).on('click', '.editUser', function(e) {

            e.preventDefault();
            var user_id = $(this).val();
            $("#editUser").modal('show');
            $.ajax({
                type: "GET",
                url: "users/edit/" + user_id,
                dataType: "JSON",
                success: function(response) {
                    if (response.status == 404) {
                        $('success_message').html("");
                        $('success_message').addClass("alert alert-danger");
                        $('success_message').text(response.message);
                    } else {
                        $('#edit_id').val(response.user.id),
                            $('#edit_name').val(response.user.name),
                            $('#edit_email').val(response.user.email),
                            $('#edit_password').val(response.user.password)
                        if (response.user.status == 1) {
                            $('#edit_status').prop('checked', true)
                        } else {
                            $('#edit_status').prop('checked', false)
                        }
                    }
                }
            });
        });
        //Update User
        //$(".updateUser").click(function(e) {
        //$( ".updateUser" ).on( "click", function(e) {
        $(document).on('click', '.updateUser', function(e) {

            e.preventDefault();
            var user_id = $('#edit_id').val()
            $('#name_err').addClass('d-none');
            $('#email_err').addClass('d-none');
            $('#password_err').addClass('d-none');
            $.ajax({
                type: 'PUT',
                url: "users/update/" + user_id,
                headers: {
                    'X-CSRF-TOKEN': $('#editUser').attr('token')
                },
                data: {
                    'name': $('#edit_name').val(),
                    'email': $('#edit_email').val(),
                    'password': $('#edit_password').val(),
                    'status': $('#edit_status').val(),
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
                        $('#editUser').modal('hide');
                        $('#editUser').find('input').val('');
                        $("#success_message").show();
                        setTimeout(function() {
                            $("#success_message").hide();
                        }, 2000);
                        $('.table-body').empty().load(location.href + ' .table-data');
                    }
                }
            });
        });

        //$(".deleteUser").click(function(e) {
        //$( ".deleteUser" ).on( "click", function(e) {
        $(document).on('click', '.deleteUser', function(e) {

            e.preventDefault();
            var user_id = $(this).val()
            if (confirm('Are your sure want to delete User??')) {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('admin.user.delete') }}",
                    dataType: "JSON",
                    data: {
                        'user_id': user_id
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
                            $('.table-body').load(location.href + ' .table-data');
                        }
                    }
                });
            }
        });
        $(document).on('click', '#editUser .close', function(e) {
            $("#editUser").modal('hide');
        });
    </script>
@endpush
