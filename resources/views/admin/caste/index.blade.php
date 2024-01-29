@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createCaste">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Caste</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($castes as $caste)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $caste->title }}</td>
                                        <td>{{ $caste->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editCaste btn-sm"
                                                value="{{ $caste->id }}">Edit</button>
                                            <button class="btn btn-danger deleteCaste btn-sm"
                                                value="{{ $caste->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $castes->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add Caste -->
    <div class="modal fade" id="createCaste" save-action="{{ route('admin.caste.create') }}"
        token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Caste</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Caste</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Caste">
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
                        <button type="button" class="btn btn-primary createCaste">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add Caste-->

    <!--Edit Caste-->
    <div class="modal fade" id="editCaste" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Caste</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Caste</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Caste">
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
                        <button type="button" class="btn btn-primary updateCaste">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit Caste-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createCaste', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createCaste').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createCaste').attr('token')
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
                            $("#createCaste .close").click()

                            $('#createCaste').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit Caste
            $(document).on('click', '.editCaste', function(e) {

                e.preventDefault();
                var caste_id = $(this).val();
                $("#editCaste").modal('show');
                $.ajax({
                    type: "GET",
                    url: "castes/edit/" + caste_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.caste.id),
                                $('#edit_title').val(response.caste.title)
                                if (response.caste.active == 1) {
                                    $('#edit_active').prop('checked', true)
                                } else {
                                    $('#edit_active').prop('checked', false)
                                }
                        }
                    }
                });
            });
            //Update Caste
            $(document).on('click', '.updateCaste', function(e) {
                e.preventDefault();
                var caste_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "castes/update/" + caste_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editCaste').attr('token')
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
                            $('#editCaste').modal('hide');
                            $('#editCaste').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Caste
            $(document).on('click', '.deleteCaste', function(e) {

                e.preventDefault();
                var caste_id = $(this).val()
                if (confirm('Are your sure want to delete Caste??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.caste.delete') }}",
                        dataType: "JSON",
                        data: {
                            'caste_id': caste_id
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
