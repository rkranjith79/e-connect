@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <a href="{{ route('admin.profile.index')}}" class="btn btn-sm float-end mb-1" id="resetFilters"><i class="mdi mdi-refresh"></i></a>
                </div>
                <div class="card-body table-body">
                    <div class="table-data table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th width="10%">Actions</th>
                                    <th width="30%">Name</th>
                                    <th width="30%">User ID</th>
                                    <th width="15%">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modal_data as $data_record)
                                <tr>
                                    <td>{{ ($modal_data->currentPage() - 1) * $modal_data->perPage() + $loop->iteration }}</td>
                                    <td>
                                        <div class="dropdown-container">
                                            <button class="btn btn-sm btn-primary fa fa-bars" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" data-bs-placement="right">
                                                @if ($data_record->active == 1)
                                                <li>
                                                    <button class="dropdown-item deactivateProfile text-warning d-flex" data-id="{{ $data_record->id }}" data-uuid="{{ $data_record->uuid }}" data-bs-toggle="tooltip" title="Deactivate" value="">
                                                        <i class="mdi mdi-close-circle" aria-hidden="true"></i>
                                                        <p class="btn-align">Deactivate</p>
                                                    </button>
                                                </li>
                                                @else
                                                <li>
                                                    <button class="dropdown-item activateProfile text-success d-flex" data-id="{{ $data_record->id }}" data-uuid="{{ $data_record->uuid }}" data-bs-toggle="tooltip" title="Activate" value="">
                                                        <i class="mdi mdi-check-circle" aria-hidden="true"></i>
                                                        <p class="btn-align">Activate</p>
                                                    </button>
                                                </li>
                                                @endif
                                                <li>
                                                    <a class="dropdown-item d-flex text-info" title="View" target="_blank" href="{{ route('user.profile', ['id' => $data_record->id, 'uuid' => $data_record->uuid]) }}">
                                                        <i class="mdi mdi-eye"></i>
                                                        <p class="btn-align">View</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <button class="dropdown-item deleteProfile text-danger d-flex" data-bs-toggle="tooltip" title="Delete" value="{{ $data_record->id }}">
                                                        <i class="mdi mdi-trash-can" aria-hidden="true"></i>
                                                        <p class="btn-align">Delete</p>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>{{ $data_record->title ?? '' }}</td>
                                    <td>#{{ $data_record->user->id ?? '' }} - {{ $data_record->user->name ?? '' }}</td>
                                    <td>{{ $data_record->active == 1 ? 'Active' : 'Disabled' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer clearfix d-flex justify-content-between align-items-center">
                    <div>
                        {{ $modal_data->links() }}
                    </div>
                    {{-- <div>
                        <p class="mb-0">
                            Showing {{ $modal_data->firstItem() }} to {{ $modal_data->lastItem() }} of {{ $modal_data->total() }} records
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <style>
        .btn-align {
            padding-top: 2px;
            padding-left: 3px
        }
    </style>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            //Deactivate Profile
            $(document).on('click', '.deactivateProfile', function(e) {

                e.preventDefault();
                var modal_data_id = $(this).data('id');
                var modal_data_uuid = $(this).data('uuid');
                if (confirm("Are your sure want to Deactivate {{ $page_data['title'] }}??")) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ $page_data['prefix_url'] }}-deactivate/" + modal_data_id + "/" + modal_data_uuid,
                        dataType: "JSON",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {
                            'modal_data_id': modal_data_id,
                            'modal_data_uuid': modal_data_uuid,
                            '_method': 'PUT'

                        },
                        success: function(response) {
                            if (response.status == 200) {
                                Swal.fire({
                                    position: "top-end",
                                    text: response.message,
                                    icon: 'error',
                                    iconColor: 'red',
                                    timer: 3000,
                                    toast: true,
                                    position: 'top-right',
                                    toast: true,
                                    showConfirmButton: false,
                                });
                                $('.table').load(location.href + ' .table');
                            }
                        }
                    });
                }
            });
            //Activate Profile
            $(document).on('click', '.activateProfile', function(e) {

                e.preventDefault();
                var modal_data_id = $(this).data('id');
                var modal_data_uuid = $(this).data('uuid');
                if (confirm("Are your sure want to Activate {{ $page_data['title'] }}??")) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ $page_data['prefix_url'] }}-activate/" + modal_data_id + "/" + modal_data_uuid,
                        dataType: "JSON",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {
                            'modal_data_id': modal_data_id,
                            'modal_data_uuid': modal_data_uuid,
                            '_method': 'PUT'

                        },
                        success: function(response) {
                            if (response.status == 200) {
                                Swal.fire({
                                    position: "top-end",
                                    text: response.message,
                                    icon: 'success',
                                    timer: 3000,
                                    toast: true,
                                    position: 'top-right',
                                    toast: true,
                                    showConfirmButton: false,
                                });
                                $('.table').load(location.href + ' .table');
                            }
                        }
                    });
                }
            });

            //Delete Profile
            $(document).on('click', '.deleteProfile', function(e) {

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "pl-1 btn btn-success",
                        cancelButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                });
                swalWithBootstrapButtons.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        e.preventDefault();
                        var modal_data_id = $(this).val()
                        $.ajax({
                            type: 'POST',
                            url: "{{ $page_data['prefix_url'] }}-delete/" + modal_data_id,
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
                                    Swal.fire({
                                        position: "top-end",
                                        text: response.message,
                                        icon: 'success',
                                        timer: 3000,
                                        toast: true,
                                        position: 'top-right',
                                        toast: true,
                                        showConfirmButton: false,
                                    });
                                    $('.table').load(location.href + ' .table');
                                }
                            }
                        });
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire({
                            title: "Cancelled",
                            icon: "error",
                            timer: 1500,
                        });
                    }
                });
            });

            //Sweet Alert Confirm


        });
    </script>
@endpush
