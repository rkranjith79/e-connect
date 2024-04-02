@extends('layouts.user')

@section('content')
    <iframe style=" height: 700px; border: none" src="{{ route('user.jathagam_print', ['id' => $data['profile']->id]) }}" frameborder="0"></iframe>
@endsection
