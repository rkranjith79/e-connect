@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createRasiNavamsam">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Rasi Navamsam</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rasi_navamsams as $rasi_navamsam)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rasi_navamsam->title }}</td>
                                        <td>{{ $rasi_navamsam->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editRasiNavamsam btn-sm"
                                                value="{{ $rasi_navamsam->id }}">Edit</button>
                                            <button class="btn btn-danger deleteRasiNavamsam btn-sm"
                                                value="{{ $rasi_navamsam->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $rasi_navamsams->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add RasiNavamsam -->
    <div class="modal fade" id="createRasiNavamsam" save-action="{{ route('admin.rasi_navamsam.create') }}"
        token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Rasi Navamsam</h4>
                    <button type="button" class="close btn btn-icon" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Rasi Navamsam</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Rasi Navamsam">
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
                        <button type="submit" class="btn btn-primary createRasiNavamsam">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add RasiNavamsam-->

    <!--Edit RasiNavamsam-->
    <div class="modal fade" id="editRasiNavamsam" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Rasi Navamsam</h4>
                    <button type="button" class="close btn btn-icon" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Rasi Navamsam</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Rasi Navamsam">
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
                        <button type="submit" class="btn btn-primary updateRasiNavamsam">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit RasiNavamsam-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createRasiNavamsam', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createRasiNavamsam').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createRasiNavamsam').attr('token')
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
                            $("#createRasiNavamsam .close").click();
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('#createRasiNavamsam').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit RasiNavamsam
            $(document).on('click', '.editRasiNavamsam', function(e) {

                e.preventDefault();
                var rasi_navamsam_id = $(this).val();
                $("#editRasiNavamsam").modal('show');
                $.ajax({
                    type: "GET",
                    url: "rasi_navamsams/edit/" + rasi_navamsam_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.rasi_navamsam.id),
                                $('#edit_title').val(response.rasi_navamsam.title)
                            if (response.rasi_navamsam.active == 1) {
                                $('#edit_active').prop('checked', true)
                            } else {
                                $('#edit_active').prop('checked', false)
                            }
                        }
                    }
                });
            });
            //Update RasiNavamsam
            $(document).on('click', '.updateRasiNavamsam', function(e) {
                e.preventDefault();
                var rasi_navamsam_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "rasi_navamsams/update/" + rasi_navamsam_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editRasiNavamsam').attr('token')
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
                            $('#editRasiNavamsam').modal('hide');
                            $('#editRasiNavamsam').find('input').val('');
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete RasiNavamsam
            $(document).on('click', '.deleteRasiNavamsam', function(e) {

                e.preventDefault();
                var rasi_navamsam_id = $(this).val()
                if (confirm('Are your sure want to delete Rasi Navamsam??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.rasi_navamsam.delete') }}",
                        dataType: "JSON",
                        data: {
                            'rasi_navamsam_id': rasi_navamsam_id
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
