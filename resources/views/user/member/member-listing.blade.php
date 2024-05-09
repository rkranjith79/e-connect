@extends('layouts.user')

@section('content')
    <section class="py-4 py-lg-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-3">
                            @include('user.member.listing-sidebar')
                        </div>
                        <div class="col-xl-9">
                            <div class="d-flex">
                                <h1 class="h4 fw-600 mb-3 text-body">{{ trans('site.all_member_listing') }}</h1>
                                <div class="d-xl-none ml-auto mb-1 ml-xl-3 mr-0 align-self-end">
                                    <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle"
                                        data-target=".aiz-filter-sidebar">
                                        <i class="fas fa-list fa-2x"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-5">
                                @forelse ($data['profiles'] as $profile)
                                  @include('user.member.profile')
                                @empty
                                    <h2>{{ trans('site.no_data_available') }}</h2>
                                @endforelse
                            </div>
                            <div class="aiz-pagination text-center">
                                @guest
                                    <h1 class="h3 text-primary mb-0">{{ trans('site.create_your_account') }}</h1>
                                    <p>{{ trans('site.create_your_account_sub_label') }}</p>
                                    <a class="btn btn-sm btn-primary text-white fw-600 py-1 border"
                                        href="{{ route('registers') }}">{{ trans('site.registration') }}</a>
                                @endguest

                                {{ $data['profiles']->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
