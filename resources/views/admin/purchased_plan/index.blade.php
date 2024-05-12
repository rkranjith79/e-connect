@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                </div>
                <div class="card-body table-body">
                    <div class="table-data table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th width="15%">Profile</th>
                                    <th width="15%">Plan</th>
                                    <th width="15%">User Profile Count</th>
                                    <th width="20%">Expired At</th>
                                    <th width="15%">Order</th>
                                    <th width="15%">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modal_data as $data_record)
                                    <tr>
                                        <td>{{ ($modal_data->currentPage() - 1) * $modal_data->perPage() + $loop->iteration }}
                                        </td>
                                        <td>{{ $data_record->profile->title ?? '' }}</td>
                                        <td>{{ $data_record->plan->title ?? '' }}</td>
                                        <td>{{ $data_record->used_profile_count }}</td>
                                        <td>{{ __setDateTimeFormat($data_record->expired_at) }}</td>
                                        <td>{{ collect($data_record->order)->toJson() ?? '' }}</td>
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
@endsection
