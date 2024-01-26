@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert-success alert">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createUser">
                        Add
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="7%">S No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
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
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <ul id="saveform_errorlist"></ul>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="">
                                <span class="name_err"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email">
                                <span class="email_err"></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="password">
                                <span class="password_err"></span>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Status</label></br>
                                <input type="checkbox" name="status" class="form-check-input">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary createUser">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add user-->
    <!-- Button trigger modal -->
@endsection
@push('script')
<script>
    $(document).ready(function() {
        console.log('here');
        $(".createUser").click(function(e) {
            alert('hai');
            console.log('here');
            e.preventDefault();
            var name = $('input[name=name]').val();
            var email = $('input[name=email]').val();
            var password = $('input[name=password]').val();
            var status = $('input[name=status]').val();
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
                    // console.log(response);
                    if (response.status == 400) {
                        $('#saveform_errorlist').html('');
                        $('#saveform_errorlist').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#saveform_errorlist').append('<li>' + err_value +
                                '</li>');
                        });
                    } else {
                        $('#saveform_errorlist').html('');
                        $('#success_message').addClass('success alert-success');
                        $('#success_message').text(response.message)
                        $('#createUser').modal('hide');
                        $('#createUser').find('input').val('');
                    }
                }
            });
        });
    });
</script>
@endpush
