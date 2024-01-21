@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert-success alert">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm float-end" data-toggle="modal" data-target="#addUser">
                        Add
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="7%">S No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!--Add user -->
    <div class="modal fade" id="addUser" save-action="" token="{{ csrf_token() }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="POST" action="">
                    <div class="modal-body">
                        <ul id="saveform_errorlist"></ul>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="user_name">Name</label>
                                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="">
                                <span class="user_name_err"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="email">
                                <span class="email_err"></span>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                        value="1">
                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                        value="0">
                                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        <button type="button" class="btn btn-primary saveuser">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Add user-->
    <!-- Button trigger modal -->
@endsection
