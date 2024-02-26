@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createSiteConfiguration">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tbody>
                                @if (!empty($modal_data))
                                    <form action="{{ route('admin.site_configuration.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @foreach ($modal_data as $item)
                                            @csrf
                                            <div class="row">
                                                <div class=" col-md-2 form-group">
                                                    <label for="">Label</label>
                                                    <input type="text" name="label['{{ $item->code }}']"
                                                        value="{{ $item->label }}" class="form-control">
                                                </div>
                                                <div class=" col-md-2 form-group">
                                                    <label for="">Code</label>
                                                    <input type="text" name="code['{{ $item->code }}']"
                                                        value="{{ $item->code }}" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="value">Value</label>
                                                    <textarea class="form-control" id="value['{{ $item->code }}']" name="value['{{ $item->code }}']">{{ $item->attributes->value ?? '' }}</textarea>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="value">Atrributes</label>
                                                    <textarea class="form-control" id="attributes['{{ $item->code }}']" name="attributes['{{ $item->code }}']">{{ collect($item->attributes)->toJson() ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            </tr>
                                        @endforeach
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success float-end mt-4">Save</button>
                                        </div>
                                    </form>
                                @else
                                <div class="text-center text-danger">No Records Found!!</div>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add SiteConfiguration -->
    <div class="modal fade" id="createSiteConfiguration" save-action="{{ route('admin.site_configuration.store_code') }}"
        token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Site Configuration</h4>
                    <button type="button" class="close btn btn-icon" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Code</label>
                                <input type="text" class="form-control" id="code" name="code" placeholder="Code">
                                <span><small class="errorMsg" id="code_err"></small></span>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary createSiteConfiguration">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add SiteConfiguration-->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.createSiteConfiguration', function(e) {
                e.preventDefault();
                var code = $('input[name=code]').val();
                $('#code_err').addClass('d-none');
                $.ajax({
                    type: 'POST',
                    url: $('#createSiteConfiguration').attr('save-action'),
                    headers: {
                        'X-CSRF-TOKEN': $('#createSiteConfiguration').attr('token')
                    },
                    data: {
                        'code': code,
                    },
                    success: function(response) {
                        if (response.status == 404) {
                            $.each(response.errors, function(key, err_value) {
                                $('#' + key + '_err').removeClass('d-none');
                                $('#' + key + '_err').addClass('text-danger');
                                $('#' + key + '_err').html(err_value);
                            });
                        } else {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $("#createSiteConfiguration .close").click();
                            $("#success_message").show();
                            setTimeout(function() {
                                $("#success_message").hide();
                            }, 2000);
                            $('#createSiteConfiguration').find('input').val('');
                            $('.table').empty().load(location.href + ' .table');
                        }
                    }
                });
            });
        });
    </script>
@endpush
