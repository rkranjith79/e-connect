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
                                    <th width="20%">{{ $page_data['name'] }}</th>
                                    @isset($lookup_fields)
                                        @foreach ($lookup_fields as $item)
                                            @if (isset($item['relationship']))
                                                <th width="20%">{{ $item['title'] }}</th>
                                            @else
                                                <th width="20%">{{ $item['title'] }}</th>
                                            @endif
                                        @endforeach
                                    @endisset
                                    <th width="30%">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modal_data as $data_record)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <button class="btn-icon btn text-primary  editMaster btn-light"
                                                value="{{ $data_record->id }}"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i>
                                            </button>
                                            <button class="btn btn-icon text-danger deleteMaster btn-light"
                                                value="{{ $data_record->id }}"><i class="fa fa-ban" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                        <td>{{ $data_record->title }}</td>
                                        @isset($lookup_fields)
                                            @foreach ($lookup_fields as $item)
                                                @if (isset($item['relationship']))
                                                    <td>{{ $data_record->{$item['relationship']}->title ?? '' }}</td>
                                                @else
                                                    <td>{{ $data_record->{$item['id']} }}</td>
                                                @endif
                                            @endforeach
                                        @endisset
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
                <form method="POST" action="" id="addForm">
                    <div class="modal-body">
                        <div class="card-body">
                            @isset($lookup_fields)
                                @foreach ($lookup_fields as $item)
                                    @if (isset($item['model']))
                                        <div class="form-group">
                                            <label for="{{ $item['title'] }}">{{ $item['title'] }}</label>
                                            <select name="{{ $item['id'] }}" id="{{ $item['id'] }}" class="form-control">
                                                <option value="">Select {{ $item['title'] }}</option>
                                                @foreach ($page_data['lookup_data'][$item['id']] as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                            <span><small class="errorMsg" id="{{ $item['id'] }}_err"></small></span>
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <label for="name">{{ $item['title'] }}</label>
                                            <input type="text" class="form-control" id="{{ $item['id'] }}"
                                                name="{{ $item['id'] }}" placeholder="{{ $item['title'] }}">
                                            <span><small class="errorMsg" id="{{ $item['title'] }}_err"></small></span>
                                        </div>
                                    @endif
                                @endforeach
                            @endisset
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
                <form action="" id="editForm">
                    <div class="modal-body">
                        <div class="card-body">
                            <input type="hidden" name="id" id="edit_id">
                            @isset($lookup_fields)
                                @foreach ($lookup_fields as $item)
                                    @if (isset($item['model']))
                                        <div class="form-group">
                                            <label for="{{ $item['title'] }}">{{ $item['title'] }}</label>
                                            <select name="{{ $item['id'] }}" id="edit_{{ $item['id'] }}"
                                                class="form-control">
                                                <option value="">Select {{ $item['title'] }}</option>
                                                @foreach ($page_data['lookup_data'][$item['id']] as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                            <span><small class="errorMsg" id="edit_{{ $item['id'] }}_err"></small></span>
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <label for="name">{{ $item['title'] }}</label>
                                            <input type="text" class="form-control" id="{{ $item['id'] }}"
                                                name="{{ $item['id'] }}" placeholder="{{ $item['title'] }}">
                                            <span><small class="errorMsg" id="{{ $item['title'] }}_err"></small></span>
                                        </div>
                                    @endif
                                @endforeach
                            @endisset
                            <div class="form-group">
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
                var formData = $("#addForm").serialize(); // Serialize the form data
                var formData = new FormData(document.getElementById('addForm'));
                formData.delete('active');
                formData.append('active', $('input[name=active]').prop('checked'));

                $('.errorMsg').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: "{{ $page_data['prefix_url'] }}",
                    headers: {
                        'X-CSRF-TOKEN': $('#createMaster').attr('token')
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
                            $("#createMaster .close").click();
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
                            // console.log(response.modal_data);
                            $.each(response.modal_data, function(key, value) {
                                if (key == 'active') {
                                    if (value == 1) {
                                        $('#edit_' + key).prop('checked', true)
                                    } else {
                                        $('#edit_' + key).prop('checked', false)
                                    }
                                } else {
                                    $('#edit_' + key).val(value);
                                }
                            });
                        }
                    }
                });
            });
            //Update Master
            $(document).on('click', '.updateMaster', function(e) {
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
                        'X-CSRF-TOKEN': $('#editMaster').attr('token')
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
            //Delete Master
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
