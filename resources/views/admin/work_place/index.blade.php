@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createWorkPlace">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Work Place</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($work_places as $work_place)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $work_place->title }}</td>
                                        <td>{{ $work_place->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editWorkPlace btn-sm"
                                                value="{{ $work_place->id }}">Edit</button>
                                            <button class="btn btn-danger deleteWorkPlace btn-sm"
                                                value="{{ $work_place->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $work_places->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add Work -->
    <div class="modal fade" id="createWorkPlace" save-action="{{ route('admin.work_place.create') }}" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Work Place</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Work Place</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Work Place">
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
                        <button type="button" class="btn btn-primary createWorkPlace">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add Work-->

    <!--Edit Work-->
    <div class="modal fade" id="editWorkPlace" token="{{ csrf_token() }}">
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
                                <label for="name">Work Place</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Work Place">
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
                        <button type="button" class="btn btn-primary updateWorkPlace">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit Work Place-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createWorkPlace', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createWorkPlace').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createWorkPlace').attr('token')
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
                            $("#createWorkPlace .close").click()

                            $('#createWorkPlace').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit Work Place
            $(document).on('click', '.editWorkPlace', function(e) {

                e.preventDefault();
                var work_place_id = $(this).val();
                $("#editWorkPlace").modal('show');
                $.ajax({
                    type: "GET",
                    url: "work_places/edit/" + work_place_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.work_place.id),
                                $('#edit_title').val(response.work_place.title)
                            if (response.work_place.active == 1) {
                                $('#edit_active').prop('checked', true)
                            } else {
                                $('#edit_active').prop('checked', false)
                            }
                        }
                    }
                });
            });
            //Update Work Place
            $(document).on('click', '.updateWorkPlace', function(e) {
                e.preventDefault();
                var work_place_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "work_places/update/" + work_place_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editWorkPlace').attr('token')
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
                            $('#editWorkPlace').modal('hide');
                            $('#editWorkPlace').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Work Place
            $(document).on('click', '.deleteWorkPlace', function(e) {

                e.preventDefault();
                var work_place_id = $(this).val()
                if (confirm('Are your sure want to delete Work Place??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.work_place.delete') }}",
                        dataType: "JSON",
                        data: {
                            'work_place_id': work_place_id
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
