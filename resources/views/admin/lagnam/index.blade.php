@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createLagnam">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Lagnam</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lagnams as $lagnam)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $lagnam->title }}</td>
                                        <td>{{ $lagnam->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editLagnam btn-sm"
                                                value="{{ $lagnam->id }}">Edit</button>
                                            <button class="btn btn-danger deleteLagnam btn-sm"
                                                value="{{ $lagnam->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $lagnams->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add Lagnam -->
    <div class="modal fade" id="createLagnam" save-action="{{ route('admin.lagnam.create') }}" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Lagnam</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Lagnam</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Lagnam">
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
                        <button type="button" class="btn btn-primary createLagnam">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add Lagnam-->

    <!--Edit Lagnam-->
    <div class="modal fade" id="editLagnam" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Lagnam</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Lagnam</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Lagnam">
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
                        <button type="button" class="btn btn-primary updateLagnam">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit Lagnam-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createLagnam', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createLagnam').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createLagnam').attr('token')
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
                            $("#createLagnam .close").click()

                            $('#createLagnam').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit Lagnam
            $(document).on('click', '.editLagnam', function(e) {

                e.preventDefault();
                var lagnam_id = $(this).val();
                $("#editLagnam").modal('show');
                $.ajax({
                    type: "GET",
                    url: "lagnams/edit/" + lagnam_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.lagnam.id),
                                $('#edit_title').val(response.lagnam.title)
                            if (response.lagnam.active == 1) {
                                $('#edit_active').prop('checked', true)
                            } else {
                                $('#edit_active').prop('checked', false)
                            }
                        }
                    }
                });
            });
            //Update Lagnam
            $(document).on('click', '.updateLagnam', function(e) {
                e.preventDefault();
                var lagnam_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "lagnams/update/" + lagnam_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editLagnam').attr('token')
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
                            $('#editLagnam').modal('hide');
                            $('#editLagnam').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Lagnam
            $(document).on('click', '.deleteLagnam', function(e) {

                e.preventDefault();
                var lagnam_id = $(this).val()
                if (confirm('Are your sure want to delete Lagnam??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.lagnam.delete') }}",
                        dataType: "JSON",
                        data: {
                            'lagnam_id': lagnam_id
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
