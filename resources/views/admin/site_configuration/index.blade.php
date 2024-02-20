@extends('layouts.admin')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                        data-target="#createRasiNavamsam">
                        Add
                    </button>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Rasi Navamsam</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rasi_navamsams as $rasi_navamsam)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rasi_navamsam->title }}</td>
                                        <td>{{ $rasi_navamsam->active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-primary editRasiNavamsam btn-sm"
                                                value="{{ $rasi_navamsam->id }}">Edit</button>
                                            <button class="btn btn-danger deleteRasiNavamsam btn-sm"
                                                value="{{ $rasi_navamsam->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $rasi_navamsams->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
