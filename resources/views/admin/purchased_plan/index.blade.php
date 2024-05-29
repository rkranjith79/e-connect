@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <button title="Filter" class="btn btn-primary btn-xs float-end pl-0" style="padding: 4px 2px 3px"
                        type="button" data-bs-toggle="collapse" data-bs-target="#filterSection" aria-expanded="false"
                        aria-controls="filterSection">
                        <i class="fas fa-filter"></i>
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table mb-4 collapse" id="filterSection">
                        <form action="" method="GET">
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label for="year" class="form-label">Year</label>
                                    <input type="text" readonly class="form-control" id="year" name="year"
                                        value="{{ date('Y') }}">
                                </div>
                                <div class="col-md-3">
                                    <label for="from_date" class="form-label">From Date</label>
                                    <input type="date" class="form-control" id="from_date" name="from_date"
                                        value="">
                                </div>
                                <div class="col-md-3">
                                    <label for="to_date" class="form-label">To Date</label>
                                    <input type="date" class="form-control" id="to_date" name="to_date" value="">
                                </div>
                                <div class="col-md-1 d-grid">
                                    <label for="submit" class="form-label">&nbsp;</label>
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                    </div>
                    <div class="table-data table-responsive">
                        <div class="float-end">
                            @php
                                $sum = 0;
                                foreach ($modal_data as $value) {
                                    $sum = $sum + $value->plan_sum_price;
                                }
                            @endphp
                            @if ($sum > 0)
                                <h6>Total: {{ $sum }}</h6>
                            @endif
                        </div>
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
