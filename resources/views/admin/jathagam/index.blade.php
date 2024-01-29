@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createJathagam">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Jathagam</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jathagams as $jathagam)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jathagam->title }}</td>
                                        <td>{{ $jathagam->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editJathagam btn-sm"
                                                value="{{ $jathagam->id }}">Edit</button>
                                            <button class="btn btn-danger deleteJathagam btn-sm"
                                                value="{{ $jathagam->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $jathagams->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add Jathagam -->
    <div class="modal fade" id="createJathagam" save-action="{{ route('admin.jathagam.create') }}" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Jathagam</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Jathagam</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Jathagam">
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
                        <button type="button" class="btn btn-primary createJathagam">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add Jathagam-->

    <!--Edit Jathagam-->
    <div class="modal fade" id="editJathagam" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Jathagam</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Jathagam</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Jathagam">
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
                        <button type="button" class="btn btn-primary updateJathagam">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit Jathagam-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createJathagam', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createJathagam').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createJathagam').attr('token')
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
                            $("#createJathagam .close").click()

                            $('#createJathagam').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit Jathagam
            $(document).on('click', '.editJathagam', function(e) {

                e.preventDefault();
                var jathagam_id = $(this).val();
                $("#editJathagam").modal('show');
                $.ajax({
                    type: "GET",
                    url: "jathagams/edit/" + jathagam_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.jathagam.id),
                                $('#edit_title').val(response.jathagam.title)
                            if (response.jathagam.active == 1) {
                                $('#edit_active').prop('checked', true)
                            } else {
                                $('#edit_active').prop('checked', false)
                            }
                        }
                    }
                });
            });
            //Update Jathagam
            $(document).on('click', '.updateJathagam', function(e) {
                e.preventDefault();
                var jathagam_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "jathagams/update/" + jathagam_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editJathagam').attr('token')
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
                            $('#editJathagam').modal('hide');
                            $('#editJathagam').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Jathagam
            $(document).on('click', '.deleteJathagam', function(e) {

                e.preventDefault();
                var jathagam_id = $(this).val()
                if (confirm('Are your sure want to delete Jathagam??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.jathagam.delete') }}",
                        dataType: "JSON",
                        data: {
                            'jathagam_id': jathagam_id
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
