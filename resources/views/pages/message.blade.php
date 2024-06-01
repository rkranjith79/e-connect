@extends('layouts.user')

@section('content')
    <div class="error text-center pt-10 pb-10">
        <h2 style="color:gray">{{ $message ?? "Something went wrong!!!!"}}</h2>
        <p>{{ $sub_message ?? ""}}</p>
    </div>
@endsection
