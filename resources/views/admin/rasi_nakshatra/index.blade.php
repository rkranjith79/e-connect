@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createRasiNakshatra">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Rasi Nakshatra</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rasi_nakshatras as $rasi_nakshatra)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rasi_nakshatra->title }}</td>
                                        <td>{{ $rasi_nakshatra->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editRasiNakshatra btn-sm"
                                                value="{{ $rasi_nakshatra->id }}">Edit</button>
                                            <button class="btn btn-danger deleteRasiNakshatra btn-sm"
                                                value="{{ $rasi_nakshatra->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $rasi_nakshatras->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add RasiNakshatra -->
    <div class="modal fade" id="createRasiNakshatra" save-action="{{ route('admin.rasi_nakshatra.create') }}"
        token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Rasi Nakshatra</h4>
                    <button type="button" class="close btn btn-icon" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Rasi Nakshatra</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Rasi Nakshatra">
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
                        <button type="submit" class="btn btn-primary createRasiNakshatra">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add RasiNakshatra-->

    <!--Edit RasiNakshatra-->
    <div class="modal fade" id="editRasiNakshatra" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Rasi Nakshatra</h4>
                    <button type="submit" class="close btn btn-icon" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Rasi Nakshatra</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Rasi Nakshatra">
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
                        <button type="submit" class="btn btn-primary updateRasiNakshatra">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit RasiNakshatra-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createRasiNakshatra', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createRasiNakshatra').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createRasiNakshatra').attr('token')
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
                            $("#createRasiNakshatra .close").click();
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('#createRasiNakshatra').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit RasiNakshatra
            $(document).on('click', '.editRasiNakshatra', function(e) {

                e.preventDefault();
                var rasi_nakshatra_id = $(this).val();
                $("#editRasiNakshatra").modal('show');
                $.ajax({
                    type: "GET",
                    url: "rasi_nakshatras/edit/" + rasi_nakshatra_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.rasi_nakshatra.id),
                                $('#edit_title').val(response.rasi_nakshatra.title)
                            if (response.rasi_nakshatra.active == 1) {
                                $('#edit_active').prop('checked', true)
                            } else {
                                $('#edit_active').prop('checked', false)
                            }
                        }
                    }
                });
            });
            //Update RasiNakshatra
            $(document).on('click', '.updateRasiNakshatra', function(e) {
                e.preventDefault();
                var rasi_nakshatra_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "rasi_nakshatras/update/" + rasi_nakshatra_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editRasiNakshatra').attr('token')
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
                            $('#editRasiNakshatra').modal('hide');
                            $('#editRasiNakshatra').find('input').val('');
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete RasiNakshatra
            $(document).on('click', '.deleteRasiNakshatra', function(e) {

                e.preventDefault();
                var rasi_nakshatra_id = $(this).val()
                if (confirm('Are your sure want to delete Rasi Nakshatra??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.rasi_nakshatra.delete') }}",
                        dataType: "JSON",
                        data: {
                            'rasi_nakshatra_id': rasi_nakshatra_id
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
