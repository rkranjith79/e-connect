@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    {{-- <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createPlan">
                        Add
                    </button> --}}
                </div>
                <div class="card-body table-body">
                    <div class="table-data table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th width="15%">Actions</th>
                                    <th width="20%">{{ $page_data['name'] }}</th>
                                    <th width="15%">Expires in Days</th>
                                    <th width="15%">Profile Count</th>
                                    <th width="10%">Price</th>
                                    <th width="20%">Attributes</th>
                                    <th width="15%">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modal_data as $data_record)
                                    <tr>
                                        <td>{{ ($modal_data->currentPage() - 1) * $modal_data->perPage() + $loop->iteration }}
                                        </td>
                                        <td>
                                            {{-- <button class="btn-icon btn editPlan ms-1" value="{{ $data_record->id }}"><i
                                                    class="fa fa-pencil" aria-hidden="true"></i>
                                            </button> --}}
                                            @if ($data_record->active == 1)
                                                <button class="btn deactivatePlan text-danger"
                                                    data-bs-toggle="tooltip" title="Deactivate"
                                                    value="{{ $data_record->id }}">
                                                    <i class="mdi mdi-close-circle" aria-hidden="true"></i>
                                                </button>
                                            @else
                                                <button class="btn activatePlan text-success"
                                                    data-bs-toggle="tooltip" title="Activate"
                                                    value="{{ $data_record->id }}">
                                                    <i class="mdi mdi-check-circle" aria-hidden="true"></i>
                                                </button>
                                            @endif
                                        </td>
                                        <td>{{ $data_record->title ?? '' }}</td>
                                        <td>{{ $data_record->expire_in_days }}</td>
                                        <td>{{ $data_record->profile_count }}</td>
                                        <td>{{ $data_record->price }}</td>
                                        <td>{{ collect($data_record->attributes)->toJson() ?? '' }}</td>
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
    <div class="modal fade" id="createPlan" token="{{ csrf_token() }}">

        {{-- use csrf view service provider --}}
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add {{ $page_data['name'] }}</h4>
                    <button type="button" class="close btn btn-icon" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="" id="addForm">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="title">{{ $page_data['name'] }}</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="{{ $page_data['name'] }}">
                                        <span><small class="errorMsg" id="title_err"></small></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="expire_in_days">Expires in Days</label>
                                        <input type="number" class="form-control" id="expire_in_days" name="expire_in_days"
                                            placeholder="Expires in Days">
                                        <span><small class="errorMsg" id="expire_in_days_err"></small></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="profile_count">Profile Count</label>
                                        <input type="number" class="form-control" id="profile_count" name="profile_count"
                                            placeholder="Profile Count">
                                        <span><small class="errorMsg" id="profile_count_err"></small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" name="price"
                                            placeholder="Price">
                                        <span><small class="errorMsg" id="price_err"></small></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="order_by">Order By</label>
                                        <input type="number" class="form-control" id="order_by" name="order_by"
                                            placeholder="Order By">
                                        <span><small class="errorMsg" id="order_by_err"></small></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="active">Active</label></br>
                                        <input type="checkbox" name="active" checked class="form-check-input">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="attributes">Attributes</label><br>
                                    <textarea name="attributes" id="attributes" class="form-control" cols="30" rows="8"></textarea>
                                    <span><small class="errorMsg" id="attributes_err"></small></span>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary createPlan">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add Plan-->

    <!--Edit Plan-->
    <div class="modal fade" id="editPlan" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit {{ $page_data['name'] }}</h4>
                    <button type="button" class="close btn btn-icon" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form action="" id="editForm">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" class="form-control" id="edit_id" name="id">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="edit_title">{{ $page_data['name'] }}</label>
                                        <input type="text" class="form-control" id="edit_title" name="title"
                                            placeholder="{{ $page_data['name'] }}">
                                        <span><small class="errorMsg" id="edit_title_err"></small></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="edit_expire_in_days">Expires in Days</label>
                                        <input type="number" class="form-control" id="edit_expire_in_days"
                                            name="expire_in_days" placeholder="Expires in Days">
                                        <span><small class="errorMsg" id="edit_expire_in_days_err"></small></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="edit_profile_count">Profile Count</label>
                                        <input type="number" class="form-control" id="edit_profile_count"
                                            name="profile_count" placeholder="Profile Count">
                                        <span><small class="errorMsg" id="edit_profile_count_err"></small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="edit_price">Price</label>
                                        <input type="number" class="form-control" id="edit_price" name="price"
                                            placeholder="Price">
                                        <span><small class="errorMsg" id="edit_price_err"></small></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="edit_order_by">Order By</label>
                                        <input type="number" class="form-control" id="edit_order_by" name="order_by"
                                            placeholder="Order By">
                                        <span><small class="errorMsg" id="edit_order_by_err"></small></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="edit_active">Active</label></br>
                                        <input type="checkbox" name="active" id="edit_active" class="form-check-input">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="edit_attributes">Attributes</label><br>
                                    <textarea name="attributes" id="edit_attributes" class="form-control" cols="30" rows="8"></textarea>
                                    <span><small class="errorMsg" id="edit_attributes_err"></small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary updatePlan">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Edit Plan-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createPlan', function(e) {
                e.preventDefault();
                var formData = $("#addForm").serialize(); // Serialize the form data
                var formData = new FormData(document.getElementById('addForm'));
                formData.delete('active');
                formData.append('active', $('input[name=active]').prop('checked'));

                $('.errorMsg').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: "{{ $page_data['prefix_url'] }}",
                    headers: {
                        'X-CSRF-TOKEN': $('#createPlan').attr('token')
                    },
                    data: formData,
                    contentType: false, // Set content type to false for FormData
                    processData: false, // Do not process the data, let FormData handle it
                    success: function(response) {
                        if (response.status == 422) {
                            $.each(response.errors, function(key, err_value) {
                                $('#' + key + '_err').removeClass('d-none');
                                $('#' + key + '_err').addClass('text-danger');
                                $('#' + key + '_err').html(err_value);
                            });
                        } else {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $("#createPlan .close").click();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Edit Plan
            $(document).on('click', '.editPlan', function(e) {
                e.preventDefault();
                var modal_data_id = $(this).val();
                $("#editPlan").modal('show');
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
                            // console.log(response.modal_data);
                            $.each(response.modal_data, function(key, value) {
                                if (key == 'active') {
                                    if (value == 1) {
                                        $('#edit_' + key).prop('checked', true)
                                    } else {
                                        $('#edit_' + key).prop('checked', false)
                                    }
                                }
                                if (key == 'attributes') {
                                    $('#edit_' + key).val(value !== null ? JSON
                                        .stringify(value) : '');
                                } else {
                                    $('#edit_' + key).val(value);
                                }
                            });
                        }
                    }
                });
            });
            //Update Plan
            $(document).on('click', '.updatePlan', function(e) {
                e.preventDefault();
                var modal_data_id = $('#edit_id').val()
                var formData = $("#editForm").serialize(); // Serialize the form data
                var formData = new FormData(document.getElementById('editForm'));
                formData.delete('active');
                formData.append('active', $('#edit_active').prop('checked'));
                formData.append('_method', 'PUT');
                $('#errorMsg').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: "{{ $page_data['prefix_url'] }}/" + modal_data_id,
                    headers: {
                        'X-CSRF-TOKEN': $('#editPlan').attr('token')
                    },
                    data: formData,
                    contentType: false, // Set content type to false for FormData
                    processData: false, // Do not process the data, let FormData handle it
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
                            $('#editPlan').modal('hide');
                            $('#editPlan').find('input').val('');
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
            //Delete Plan
            $(document).on('click', '.deletePlan', function(e) {

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
            //Deactivate Plan
            $(document).on('click', '.deactivatePlan', function(e) {

                e.preventDefault();
                var modal_data_id = $(this).val()
                if (confirm("Are your sure want to Deactivate {{ $page_data['title'] }}??")) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ $page_data['prefix_url'] }}-deactivate/" + modal_data_id,
                        dataType: "JSON",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {
                            'modal_data_id': modal_data_id,
                            '_method': 'PUT'

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
            //Activate Plan
            $(document).on('click', '.activatePlan', function(e) {

                e.preventDefault();
                var modal_data_id = $(this).val()
                if (confirm("Are your sure want to Activate {{ $page_data['title'] }}??")) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ $page_data['prefix_url'] }}-activate/" + modal_data_id,
                        dataType: "JSON",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {
                            'modal_data_id': modal_data_id,
                            '_method': 'PUT'

                        },
                        success: function(response) {
                            if (response.status == 200) {
                                $('#success_message').html('');
                                $('#success_message').addClass('alert alert-success');
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
            $(document).on('click', '.close', function(e) {
                $('.errorMsg').html('');
                $('input, select').each(function() {
                    if ($(this).is('input')) {
                        $(this).val('');
                    } else if ($(this).is('select')) {
                        $(this).prop('selectedIndex', 0);
                    }
                });
            });
        });
    </script>
@endpush
