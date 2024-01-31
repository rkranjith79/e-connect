@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createSocialType">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Social Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($social_types as $social_type)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $social_type->title }}</td>
                                        <td>{{ $social_type->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editSocialType btn-sm"
                                                value="{{ $social_type->id }}">Edit</button>
                                            <button class="btn btn-danger deleteSocialType btn-sm"
                                                value="{{ $social_type->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $social_types->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add SocialType -->
    <div class="modal fade" id="createSocialType" save-action="{{ route('admin.social_type.create') }}"
        token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Social Type</h4>
                    <button type="button" class="close btn btn-icon" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Social Type</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    placeholder="Social Type">
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
                        <button type="submit" class="btn btn-primary createSocialType">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add SocialType-->

    <!--Edit SocialType-->
    <div class="modal fade" id="editSocialType" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Social Type</h4>
                    <button type="button" class="close btn btn-icon" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="edit_id">
                                <label for="name">Social Type</label>
                                <input type="text" class="form-control" id="edit_title" name="title"
                                    placeholder="Social Type">
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
                        <button type="submit" class="btn btn-primary updateSocialType">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit SocialType-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createSocialType', function(e) {
                e.preventDefault();
                var title = $('input[name=title]').val();
                var active = $('input[name=active]').val();
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createSocialType').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createSocialType').attr('token')
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
                            $("#createSocialType .close").click();
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('#createSocialType').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit SocialType
            $(document).on('click', '.editSocialType', function(e) {

                e.preventDefault();
                var social_type_id = $(this).val();
                $("#editSocialType").modal('show');
                $.ajax({
                    type: "GET",
                    url: "social_types/edit/" + social_type_id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status == 404) {
                            $('success_message').html("");
                            $('success_message').addClass("alert alert-danger");
                            $('success_message').text(response.message);
                        } else {
                            $('#edit_id').val(response.social_type.id),
                                $('#edit_title').val(response.social_type.title)
                            if (response.social_type.active == 1) {
                                $('#edit_active').prop('checked', true)
                            } else {
                                $('#edit_active').prop('checked', false)
                            }
                        }
                    }
                });
            });
            //Update SocialType
            $(document).on('click', '.updateSocialType', function(e) {
                e.preventDefault();
                var social_type_id = $('#edit_id').val()
                $('#title_err').addClass('d-none');
                $.ajax({
                    type: 'PUT',
                    url: "social_types/update/" + social_type_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editSocialType').attr('token')
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
                            $('#editSocialType').modal('hide');
                            $('#editSocialType').find('input').val('');
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete SocialType
            $(document).on('click', '.deleteSocialType', function(e) {

                e.preventDefault();
                var social_type_id = $(this).val()
                if (confirm('Are your sure want to delete Social Type??')) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('admin.social_type.delete') }}",
                        dataType: "JSON",
                        data: {
                            'social_type_id': social_type_id
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
