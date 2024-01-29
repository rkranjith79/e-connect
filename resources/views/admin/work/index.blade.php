@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createWork">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Work</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($works as $work)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $work->title }}</td>
                                        <td>{{ $work->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editWork btn-sm"
                                                value="{{ $work->id }}">Edit</button>
                                            <button class="btn btn-danger deleteWork btn-sm"
                                                value="{{ $work->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $works->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add Work -->
    <div class="modal fade" id="createWork" save-action="{{ route('admin.work.create') }}" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Work</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Work</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Work">
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
                        <button type="button" class="btn btn-primary createWork">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add Work-->

    <!--Edit Work-->
    <div class="modal fade" id="editWork" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Work</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Work</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Work">
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
                        <button type="button" class="btn btn-primary updateWork">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit Work-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createWork', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createWork').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createWork').attr('token')
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
                            $("#createWork .close").click()

                            $('#createWork').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit Work
            $(document).on('click', '.editWork', function(e) {

                e.preventDefault();
                var work_id = $(this).val();
                $("#editWork").modal('show');
                $.ajax({
                    type: "GET",
                    url: "works/edit/" + work_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.work.id),
                                $('#edit_title').val(response.work.title)
                            if (response.work.active == 1) {
                                $('#edit_active').prop('checked', true)
                            } else {
                                $('#edit_active').prop('checked', false)
                            }
                        }
                    }
                });
            });
            //Update Work
            $(document).on('click', '.updateWork', function(e) {
                e.preventDefault();
                var work_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "works/update/" + work_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editWork').attr('token')
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
                            $('#editWork').modal('hide');
                            $('#editWork').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Work
            $(document).on('click', '.deleteWork', function(e) {

                e.preventDefault();
                var work_id = $(this).val()
                if (confirm('Are your sure want to delete Work??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.work.delete') }}",
                        dataType: "JSON",
                        data: {
                            'work_id': work_id
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
