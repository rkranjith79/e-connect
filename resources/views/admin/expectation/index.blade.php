@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createExpectation">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Expectation</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expectations as $expectation)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $expectation->title }}</td>
                                        <td>{{ $expectation->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editExpectation btn-sm"
                                                value="{{ $expectation->id }}">Edit</button>
                                            <button class="btn btn-danger deleteExpectation btn-sm"
                                                value="{{ $expectation->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $expectations->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add Expectation -->
    <div class="modal fade" id="createExpectation" save-action="{{ route('admin.expectation.create') }}"
        token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Expectation</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Expectation</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Expectation">
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
                        <button type="button" class="btn btn-primary createExpectation">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add Expectation-->

    <!--Edit Expectation-->
    <div class="modal fade" id="editExpectation" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Expectation</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Expectation</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Expectation">
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
                        <button type="button" class="btn btn-primary updateExpectation">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit Expectation-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createExpectation', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createExpectation').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createExpectation').attr('token')
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
                            $("#createExpectation .close").click()

                            $('#createExpectation').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit Expectation
            $(document).on('click', '.editExpectation', function(e) {

                e.preventDefault();
                var expectation_id = $(this).val();
                $("#editExpectation").modal('show');
                $.ajax({
                    type: "GET",
                    url: "expectations/edit/" + expectation_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.expectation.id),
                                $('#edit_title').val(response.expectation.title)
                                if (response.expectation.active == 1) {
                                    $('#edit_active').prop('checked', true)
                                } else {
                                    $('#edit_active').prop('checked', false)
                                }
                        }
                    }
                });
            });
            //Update Expectation
            $(document).on('click', '.updateExpectation', function(e) {
                e.preventDefault();
                var expectation_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "expectations/update/" + expectation_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editExpectation').attr('token')
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
                            $('#editExpectation').modal('hide');
                            $('#editExpectation').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Expectation
            $(document).on('click', '.deleteExpectation', function(e) {

                e.preventDefault();
                var expectation_id = $(this).val()
                if (confirm('Are your sure want to delete Expectation??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.expectation.delete') }}",
                        dataType: "JSON",
                        data: {
                            'expectation_id': expectation_id
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
