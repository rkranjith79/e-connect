@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Category</h3>
                    <a href="" class="btn btn-primary btn-sm float-end" onclick="history.back()">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Category</label>
                                <input type="text" name="category" class="form-control">
                                @error('category')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="">Status</label></br>
                                <input type="checkbox" name="status" class="form-check-input">
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <button type="submit" class="btn btn-success float-end">Save</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
