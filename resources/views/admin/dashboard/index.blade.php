@extends('layout.admin.master')
@section('content')
    <div class="card mx-4  my-5">
        <div class="card-header">
            <h5 class="mb-0">Dashboard</h5>
        </div>
        <div class="card-body">
            {{-- @dd($vars) --}}
            <div class="row">
                @foreach ($vars as $title => [$icon, $link, $value])
                    @php
                        $route = route($link);
                    @endphp
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card">
                            <a href="{{ $route }}" class="text-decoration-none text-dark">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <span>
                                                <i class="menu-icon tf-icons bx {{ $icon }} icon-style"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1 text-capitalize">{{ $title }}</span>
                                    <h3 class="card-title mb-2">{{ $value }}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
