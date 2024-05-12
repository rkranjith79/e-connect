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
                                    <th width="17%">Profile</th>
                                    <th width="17%">Purchased Profile</th>
                                    <th width="10%">Plan</th>
                                    <th width="15%">Purchased Plan</th>
                                    <th width="8%">Order</th>
                                    <th width="10%">Order Token</th>
                                    <th width="20%">Expired At</th>
                                    <th width="15%">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modal_data as $data_record)
                                    <tr>
                                        <td>{{ ($modal_data->currentPage() - 1) * $modal_data->perPage() + $loop->iteration }}
                                        </td>
                                        <td>{{ $data_record->profile->title ?? '' }}</td>
                                        <td>{{ $data_record->purchased_profile->title ?? '' }}</td>
                                        <td>{{ $data_record->plan->title ?? '' }}</td>
                                        <td>{{ $data_record->purchased_plan->id ?? '' }}</td>
                                        <td>{{ $data_record->order_id }}</td>
                                        <td>{{ $data_record->order_token }}</td>
                                        <td>{{ __setDateTimeFormat($data_record->expired_at) }}</td>
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
