@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createParentStatus">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>ParentStatus</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($parent_statuses as $parent_status)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $parent_status->title }}</td>
                                        <td>{{ $parent_status->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editParentStatus btn-sm"
                                                value="{{ $parent_status->id }}">Edit</button>
                                            <button class="btn btn-danger deleteParentStatus btn-sm"
                                                value="{{ $parent_status->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $parent_statuses->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add ParentStatus -->
    <div class="modal fade" id="createParentStatus" save-action="{{ route('admin.parent_status.create') }}" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add ParentStatus</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">ParentStatus</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="ParentStatus">
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
                        <button type="button" class="btn btn-primary createParentStatus">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add ParentStatus-->

    <!--Edit ParentStatus-->
    <div class="modal fade" id="editParentStatus" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit ParentStatus</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">ParentStatus</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="ParentStatus">
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
                        <button type="button" class="btn btn-primary updateParentStatus">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit ParentStatus-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createParentStatus', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createParentStatus').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createParentStatus').attr('token')
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
                            $("#createParentStatus .close").click()

                            $('#createParentStatus').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit ParentStatus
            $(document).on('click', '.editParentStatus', function(e) {

                e.preventDefault();
                var parent_status_id = $(this).val();
                $("#editParentStatus").modal('show');
                $.ajax({
                    type: "GET",
                    url: "parent_statuses/edit/" + parent_status_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.parent_status.id),
                                $('#edit_title').val(response.parent_status.title)
                            if (response.parent_status.active == 1) {
                                $('#edit_active').prop('checked', true)
                            } else {
                                $('#edit_active').prop('checked', false)
                            }
                        }
                    }
                });
            });
            //Update ParentStatus
            $(document).on('click', '.updateParentStatus', function(e) {
                e.preventDefault();
                var parent_status_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "parent_statuses/update/" + parent_status_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editParentStatus').attr('token')
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
                            $('#editParentStatus').modal('hide');
                            $('#editParentStatus').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete ParentStatus
            $(document).on('click', '.deleteParentStatus', function(e) {

                e.preventDefault();
                var parent_status_id = $(this).val()
                if (confirm('Are your sure want to delete ParentStatus??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.parent_status.delete') }}",
                        dataType: "JSON",
                        data: {
                            'parent_status_id': parent_status_id
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
