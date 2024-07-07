@extends('layouts.user')

@section('content')
    <div class="py-5 bg-white">
        <div class="container">
            <div id="form_content" class="">
                <div class="d-flex align-items-start">
                    @include('user.profile.sidebar')
                    <div class="aiz-user-panel overflow-hidden w-100">
                        <div class="card">
                            <div id="successMessage" class="" tabindex="0"></div>
                            <div class="card-header">
                                <h5 class="mb-0 h6"> {{ trans('site.my_profiles') }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @forelse($profiles as $profile)
                                        @if ($profile->id != auth()->user()->last_login_profile_id)
                                            <div class="col-xs-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
                                                <div class="image-flip w-100">
                                                    <div class="mainflip flip-0">
                                                        <div class="frontside">
                                                            <div class="card">
                                                                <div class="card-body text-center">
                                                                    <p><img class=" img-fluid" loading="lazy"
                                                                            src="{{ $profile->photo }}" alt="profile"></p>
                                                                    <h4 class="card-title">{{ $profile->title }}</h4>
                                                                    <p class="card-text">
                                                                        <button
                                                                            class="btn btn-sm @if ($profile->active == 1) btn-success
                                                            @else btn-danger @endif"
                                                                            style="border-radius: 25px">
                                                                            {{ $profile->active == 1 ? 'Active' : 'Inactive' }}</button>
                                                                    </p>
                                                                    @if ($profile->active == 1)
                                                                        <button
                                                                            class="btn btn-danger btn-sm deactivateProfile text-white"
                                                                            data-id="{{ $profile->id }}"
                                                                            data-uuid="{{ $profile->uuid }}" value="">
                                                                            <i class="mdi mdi-close-circle"
                                                                                aria-hidden="true"></i>
                                                                            Deactivate
                                                                        </button>
                                                                    @else
                                                                        <button
                                                                            class="btn btn-info btn-sm activateProfile text-white"
                                                                            data-id="{{ $profile->id }}"
                                                                            data-uuid="{{ $profile->uuid }}" value="">
                                                                            <i class="mdi mdi-check-circle"
                                                                                aria-hidden="true"></i>
                                                                            Activate
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="backside">
                                                            <div class="card">
                                                                <div class="card-body text-center">
                                                                    <p><img class=" img-fluid" loading="lazy"
                                                                            src="{{ $profile->photo }}" alt="profile"></p>
                                                                    <h4 class="card-title">{{ $profile->title }}</h4>
                                                                    <p class="card-text">
                                                                        <button
                                                                            class="btn btn-sm @if ($profile->active == 1) btn-success
                                                                @else btn-danger @endif"
                                                                            style="border-radius: 25px">
                                                                            {{ $profile->active == 1 ? 'Active' : 'Inactive' }}</button>
                                                                    </p>
                                                                    @if ($profile->active == 1)
                                                                        <button
                                                                            class=" btn btn-danger btn-sm deactivateProfile text-white"
                                                                            data-id="{{ $profile->id }}"
                                                                            data-uuid="{{ $profile->uuid }}"
                                                                            value="">
                                                                            <i class="mdi mdi-close-circle"
                                                                                aria-hidden="true"></i>
                                                                            Deactivate
                                                                        </button>
                                                                    @else
                                                                        <button
                                                                            class=" btn btn-sm btn-info activateProfile text-white"
                                                                            data-id="{{ $profile->id }}"
                                                                            data-uuid="{{ $profile->uuid }}"
                                                                            value="">
                                                                            <i class="mdi mdi-check-circle"
                                                                                aria-hidden="true"></i>
                                                                            Activate
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @empty
                                        <h2>{{ trans('site.no_data_available') }}</h2>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        #team {
            background: #eee !important;
        }

        .btn-align {
            padding-top: 2px;
            padding-left: 3px
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #108d6f;
            border-color: #108d6f;
            box-shadow: none;
            outline: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #007b5e;
            border-color: #007b5e;
        }

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: var(--primary);
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #team .card {
            border: none;
            background: #ffffff;
        }

        .image-flip:hover .backside,
        .image-flip.hover .backside {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            transform: rotateY(0deg);
            border-radius: .25rem;
        }

        .image-flip:hover .frontside,
        .image-flip.hover .frontside {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .mainflip {
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -ms-transition: 1s;
            -moz-transition: 1s;
            -moz-transform: perspective(1000px);
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
            position: relative;
        }

        .frontside {
            position: relative;
            -webkit-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            z-index: 2;
            margin-bottom: 30px;
        }

        .backside {
            position: absolute;
            top: 0;
            left: 0;
            background: white;
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -o-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }

        .frontside,
        .backside {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -moz-transition: 1s;
            -moz-transform-style: preserve-3d;
            -o-transition: 1s;
            -o-transform-style: preserve-3d;
            -ms-transition: 1s;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
        }

        .frontside .card,
        .backside .card {
            min-height: 312px;
        }

        .backside .card a {
            font-size: 18px;
            /* color: #007b5e !important; */
        }

        .frontside .card .card-title,
        .backside .card .card-title {
            color: var(--primary);
        }

        .frontside .card .card-body img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }

        .backside .card .card-body img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }
    </style>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            //Deactivate Profile
            $(document).on('click', '.deactivateProfile', function(e) {
                e.preventDefault();
                var modal_data_id = $(this).data('id');
                var modal_data_uuid = $(this).data('uuid');

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
                    confirmButtonText: "Yes, Deactivate!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: "profile-deactivate/" +
                                modal_data_id + "/" +
                                modal_data_uuid,
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
                                    $('#form_content').load(location.href +
                                        ' #form_content');
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
            //Activate Profile
            $(document).on('click', '.activateProfile', function(e) {
                e.preventDefault();
                var modal_data_id = $(this).data('id');
                var modal_data_uuid = $(this).data('uuid');

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
                    confirmButtonText: "Yes, Activate!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: "profile-activate/" +
                                modal_data_id + "/" +
                                modal_data_uuid,
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
                                    $('#form_content').load(location.href +
                                        ' #form_content');
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



        });
    </script>
@endpush
