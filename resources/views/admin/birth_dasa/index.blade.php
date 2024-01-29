@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createBirthDasa">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Birth Dasa</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($birth_dasas as $birth_dasa)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $birth_dasa->title }}</td>
                                        <td>{{ $birth_dasa->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editBirthDasa btn-sm"
                                                value="{{ $birth_dasa->id }}">Edit</button>
                                            <button class="btn btn-danger deleteBirthDasa btn-sm"
                                                value="{{ $birth_dasa->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $birth_dasas->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add Birth Dasa -->
    <div class="modal fade" id="createBirthDasa" save-action="{{ route('admin.birth_dasa.create') }}"
        token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Birth Dasa</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Birth Dasa</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Birth Dasa">
                                <span><small id="title_err"></small></span>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Active</label></br>
                                <input type="checkbox" name="active" checked class="form-check-input">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary createBirthDasa">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add BirthDasa-->

    <!--Edit BirthDasa-->
    <div class="modal fade" id="editBirthDasa" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Birth Dasa</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Birth Dasa</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Birth Dasa">
                                <span><small id="edit_title_err"></small></span>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Active</label></br>
                                <input type="checkbox" name="active" id="edit_active" class="form-check-input">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary updateBirthDasa">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit BirthDasa-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createBirthDasa', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createBirthDasa').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createBirthDasa').attr('token')
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
                            $('#success_message').text(response.message)
                            $("#createBirthDasa .close").click()

                            $('#createBirthDasa').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit BirthDasa
            $(document).on('click', '.editBirthDasa', function(e) {

                e.preventDefault();
                var birth_dasa_id = $(this).val();
                $("#editBirthDasa").modal('show');
                $.ajax({
                    type: "GET",
                    url: "birth_dasas/edit/" + birth_dasa_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.birth_dasa.id),
                                $('#edit_title').val(response.birth_dasa.title)
                                if (response.birth_dasa.active == 1) {
                                    $('#edit_active').prop('checked', true)
                                } else {
                                    $('#edit_active').prop('checked', false)
                                }
                        }
                    }
                });
            });
            //Update BirthDasa
            $(document).on('click', '.updateBirthDasa', function(e) {
                e.preventDefault();
                var birth_dasa_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "birth_dasas/update/" + birth_dasa_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editBirthDasa').attr('token')
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
                            $('#success_message').text(response.message)
                            $('#editBirthDasa').modal('hide');
                            $('#editBirthDasa').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Birth Dasa
            $(document).on('click', '.deleteBirthDasa', function(e) {

                e.preventDefault();
                var birth_dasa_id = $(this).val()
                if (confirm('Are your sure want to delete BirthDasa??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.birth_dasa.delete') }}",
                        dataType: "JSON",
                        data: {
                            'birth_dasa_id': birth_dasa_id
                        },
                        success: function(response) {
                            if (response.status == 200) {
                                $('#success_message').html('');
                                $('#success_message').addClass('alert alert-danger');
                                $('#success_message').text(response.message)
                                $('.table').load(location.href + ' .table');
                            }
                        }
                    });
                }
            });
        });
    </script>
@endpush
