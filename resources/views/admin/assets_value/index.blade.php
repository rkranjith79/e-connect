@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createAssetsValue">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Assets Value</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assets_values as $assets_value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $assets_value->title }}</td>
                                        <td>{{ $assets_value->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editAssetsValue btn-sm"
                                                value="{{ $assets_value->id }}">Edit</button>
                                            <button class="btn btn-danger deleteAssetsValue btn-sm"
                                                value="{{ $assets_value->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $assets_values->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add Assets Value -->
    <div class="modal fade" id="createAssetsValue" save-action="{{ route('admin.assets_value.create') }}"
        token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Assets Value</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Assets Value</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Assets Value">
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
                        <button type="button" class="btn btn-primary createAssetsValue">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add AssetsValue-->

    <!--Edit AssetsValue-->
    <div class="modal fade" id="editAssetsValue" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Assets Value</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Assets Value</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Assets Value">
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
                        <button type="button" class="btn btn-primary updateAssetsValue">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit AssetsValue-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createAssetsValue', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createAssetsValue').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createAssetsValue').attr('token')
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
                            $("#createAssetsValue .close").click()

                            $('#createAssetsValue').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit AssetsValue
            $(document).on('click', '.editAssetsValue', function(e) {

                e.preventDefault();
                var assets_value_id = $(this).val();
                $("#editAssetsValue").modal('show');
                $.ajax({
                    type: "GET",
                    url: "assets_values/edit/" + assets_value_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.assets_value.id),
                                $('#edit_title').val(response.assets_value.title)
                                if (response.assets_value.active == 1) {
                                    $('#edit_active').prop('checked', true)
                                } else {
                                    $('#edit_active').prop('checked', false)
                                }
                        }
                    }
                });
            });
            //Update AssetsValue
            $(document).on('click', '.updateAssetsValue', function(e) {
                e.preventDefault();
                var assets_value_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "assets_values/update/" + assets_value_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editAssetsValue').attr('token')
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
                            $('#editAssetsValue').modal('hide');
                            $('#editAssetsValue').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Assets value
            $(document).on('click', '.deleteAssetsValue', function(e) {

                e.preventDefault();
                var assets_value_id = $(this).val()
                if (confirm('Are your sure want to delete AssetsValue??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.assets_value.delete') }}",
                        dataType: "JSON",
                        data: {
                            'assets_value_id': assets_value_id
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
