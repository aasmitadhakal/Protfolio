@extends('layout.admin.master')
@section('content')
    <div class="card my-4 mx-4 mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">contact</h5>
            <small class="text-muted float-end">
                <a href="" class="btn btn-primary">
                    <i class='bx bx-left-arrow-alt'></i>
                    Back
                </a>
            </small>
        </div>
        <div class="card-body">
            <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center g-4">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-body">

                                <div class="mb-4">
                                    <label for="name" class="form-label">name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="name" value="{{ old('name') }}" />
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="email" value="{{ old('email') }}" />
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="address" class="form-label">address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="address" value="{{ old('address') }}" />
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="form-label">phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="phone" value="{{ old('phone') }}" />
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label">message</label>
                                    <input type="text" class="form-control" id="message" name="message"
                                        placeholder="message" value="{{ old('message') }}" />
                                    @error('message')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- <div class="mb-4">
                                    <label for="type" class="form-label">type</label>
                                    <input type="text" class="form-control" id="type" name="type"
                                        placeholder="type" value="{{ old('type') }}" />
                                    @error('type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="">
                            <div class="">

                                {{-- <div class="mb-4">
                                    <label for="status" class="form-label">status</label>
                                    <select id="status" name="status" class="form-select">
                                        <option value="1" @if (old('status') == 1) selected @endif>Published
                                        </option>
                                        <option value="0" @if (old('status') == 0) selected @endif>Draft
                                        </option>
                                    </select>

                                    @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div> --}}

                                {{-- <div class="mb-4">
                                    <label for="order" class="form-label">Order</label>
                                    <input type="number" class="form-control" id="order" name="order" placeholder="1"
                                        value="{{ old('order') }}" />
                                    @error('order')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4 d-flex align-items-center justify-content-between"><i
                        class="bx bx-plus"></i>
                    Create
                </button>
            </form>
        </div>
    </div>
@endsection
