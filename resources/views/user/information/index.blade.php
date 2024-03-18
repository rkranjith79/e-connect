@extends('layouts.user')

@section('content')

<section class="pt-4 mb-2">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ $data['information']['title'] ?? '-' }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="#">Home</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="#">{{ $data['information']['title'] ?? '-' }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="mb-4">
	<div class="container">
        <div class="card p-4 bg-white rounded shadow-sm overflow-hidden mw-100 text-left">
            
            {!! $data['information']['content'] ?? '-' !!}
		</div>
	</div>
</section>
@endsection
