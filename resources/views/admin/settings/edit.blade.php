@extends('layout.admin.master')
@section('title', 'Settings')

@section('content')
    <form action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="card card-primary shadow br-8 container  mt-4 ">
            <div class="card-body">
                <div class="row">
                    @include('admin.settings.includes.sidenav')
                    <div class="col-9 col-sm-10 tab-content" id="v-pills-tabContent">

                        {{-- Global --}}
                        @include('admin.settings.includes.global')

                        {{-- Home  --}}
                        {{-- @include('admin.settings.includes.home') --}}

                        {{-- Contact Us --}}
                        @include('admin.settings.includes.contact')

                    </div>
                </div>

                <div class="card-footers">
                    <button type="submit" class="btn btn-lg btn-primary">
                        <i class='bx bx-refresh'></i> Update
                        Setting</button>
                </div>
            </div>
        </div>
        {{-- <label for="">Site Name</label>
        <input type="textn"name="site_name" value="{{ $settings['site_name'] ?? '' }}"> --}}

    </form>
@endsection
