@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createCountry">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($countries as $country)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $country->title }}</td>
                                        <td>{{ $country->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editCountry btn-sm"
                                                value="{{ $country->id }}">Edit</button>
                                            <button class="btn btn-danger deleteCountry btn-sm"
                                                value="{{ $country->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $countries->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add Country -->
    <div class="modal fade" id="createCountry" save-action="{{ route('admin.country.create') }}"
        token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Country</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Country</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Country">
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
                        <button type="button" class="btn btn-primary createCountry">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add Country-->

    <!--Edit Country-->
    <div class="modal fade" id="editCountry" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Country</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Country</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Country">
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
                        <button type="button" class="btn btn-primary updateCountry">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit Country-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createCountry', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createCountry').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createCountry').attr('token')
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
                            $("#createCountry .close").click()

                            $('#createCountry').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit Country
            $(document).on('click', '.editCountry', function(e) {

                e.preventDefault();
                var country_id = $(this).val();
                $("#editCountry").modal('show');
                $.ajax({
                    type: "GET",
                    url: "countries/edit/" + country_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.country.id),
                                $('#edit_title').val(response.country.title)
                                if (response.country.active == 1) {
                                    $('#edit_active').prop('checked', true)
                                } else {
                                    $('#edit_active').prop('checked', false)
                                }
                        }
                    }
                });
            });
            //Update Country
            $(document).on('click', '.updateCountry', function(e) {
                e.preventDefault();
                var country_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "countries/update/" + country_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editCountry').attr('token')
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
                            $('#editCountry').modal('hide');
                            $('#editCountry').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Country
            $(document).on('click', '.deleteCountry', function(e) {

                e.preventDefault();
                var country_id = $(this).val()
                if (confirm('Are your sure want to delete Country??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.country.delete') }}",
                        dataType: "JSON",
                        data: {
                            'country_id': country_id
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
