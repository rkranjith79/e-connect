@extends('layouts.admin')
@section('content')
    <div class="row " id="page_details">
        <div class="col-md-12">
            <div id="success_message" class=""></div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title float-start pt-2 mb-2">{{ $page_data['title'] }}</h2>
                    <a href="{{ route('admin.information_admin.create') }}" class="btn btn-primary btn-sm float-end">
                        Add
                </a>
                </div>
                <div class="card-body table-body">
                    <div class="table-data">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="7%">S No.</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($informations as $information)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $information->title }}</td>
                                        <td>{{ $information->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a class="btn btn-primary editUser btn-sm"
                                                href="{{ route( 'admin.information_admin.edit', [$information->id]) }}">Edit</a>
                                            <button class="btn btn-danger deleteUser btn-sm"
                                                value="{{ $information->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{ $informations->links() }}
                </div>
            </div>
        </div>
    </div>

    
@endsection

