@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createMaster">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th width="10%">Actions</th>
                                    <th>{{ $page_data['name'] }}</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modal_data as $data_record)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <button class="btn-icon btn text-primary  editMaster btn-light"
                                                value="{{ $data_record->id }}"><i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="btn btn-icon text-danger deleteMaster btn-light"
                                                value="{{ $data_record->id }}"><i class="fa fa-ban" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                        <td>{{ $data_record->title }}</td>
                                        <td>{{ $data_record->active == 1 ? 'Active' : 'Inactive' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $modal_data->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add{{ $page_data['name'] }} -->
    <div class="modal fade" id="createMaster" token="{{ csrf_token() }}">

        {{-- use csrf view service provider --}}
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add {{ $page_data['name'] }}</h4>
                    <button type="button" class="close btn btn-icon" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">{{ $page_data['name'] }}</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="{{ $page_data['name'] }}">
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
                        <button type="submit" class="btn btn-primary createMaster">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add Master-->

    <!--Edit Master-->
    <div class="modal fade" id="editMaster" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit {{ $page_data['name'] }}</h4>
                    <button type="button" class="close btn btn-icon" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">{{ $page_data['name'] }}</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="{{ $page_data['name'] }}">
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
                        <button type="submit" class="btn btn-primary updateMaster">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit Master-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createMaster', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').prop('checked');
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: "{{ $page_data['prefix_url'] }}",
                    headers: {
                        'X-CSRF-TOKEN': $('#createMaster').attr('token')
                    },
                    data: {
                        'title': title,
                        'active': active,
                        '_method': 'POST'
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
                            $("#createMaster .close").click();
                            $('#createMaster').find('input').val('');
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit Master
            $(document).on('click', '.editMaster', function(e) {
                e.preventDefault();
                var modal_data_id = $(this).val();
                $("#editMaster").modal('show');
                $.ajax({
                    type: "GET",
                    url: "{{ $page_data['prefix_url'] }}/" + modal_data_id + "/edit",
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.modal_data.id),
                                $('#edit_title').val(response.modal_data.title)
                            if (response.modal_data.active == 1) {
                                $('#edit_active').prop('checked', true)
                            } else {
                                $('#edit_active').prop('checked', false)
                            }
                        }
                    }
                });
            });
            //Update Master
            $(document).on('click', '.updateMaster', function(e) {
                e.preventDefault();
                var modal_data_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "{{ $page_data['prefix_url'] }}/" + modal_data_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editMaster').attr('token')
                    },
                    data: {
                        'title': $('#edit_title').val(),
                        'active': $('#edit_active').prop('checked'),
                        '_method': 'PUT'

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
                            $('#editMaster').modal('hide');
                            $('#editMaster').find('input').val('');
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete{{ $page_data['name'] }}
            $(document).on('click', '.deleteMaster', function(e) {

                e.preventDefault();
                var modal_data_id = $(this).val()
                if (confirm("Are your sure want to delete {{ $page_data['title'] }}??")) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ $page_data['prefix_url'] }}/" + modal_data_id,
                        dataType: "JSON",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {
                            'modal_data_id': modal_data_id,
                            '_method': 'DELETE'

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
