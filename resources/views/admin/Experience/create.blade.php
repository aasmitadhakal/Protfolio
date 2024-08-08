@extends('layout.admin.master')
@section('content')
    <div class="card my-4 mx-4 mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Experience</h5>
            <small class="text-muted float-end">
                <a href="{{ route('experience.index') }}" class="btn btn-primary">
                    <i class='bx bx-left-arrow-alt'></i>
                    Back
                </a>
            </small>
        </div>
        <div class="card-body">
            <form action="{{ route('experience.store') }}" method="post" enctype="multipart/form-data">
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
                                    <label for="title" class="form-label">title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="title" value="{{ old('title') }}" />
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="date_from" class="form-label">date_from</label>
                                    <input type="text" class="form-control" id="date_from" name="date_from"
                                        placeholder="date_from" value="{{ old('date_from') }}" />
                                    @error('date_from')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="date_to" class="form-label">date_to</label>
                                    <input type="text" class="form-control" id="date_to" name="date_to"
                                        placeholder="date_to" value="{{ old('date_to') }}" />
                                    @error('date_to')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="short_description" class="form-label">Short Description</label>
                                    <textarea class="form-control" id="short_description" name="short_description" placeholder="Short Description"
                                        rows="4">{{ old('short_description') }}</textarea>
                                    @error('short_description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="level" class="form-label">level</label>
                                    <input type="text" class="form-control" id="level" name="level"
                                        placeholder="level" value="{{ old('level') }}" />
                                    @error('level')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="icon" class="form-label">icon</label>
                                    <input type="text" class="form-control" id="icon" name="icon"
                                        placeholder="icon" value="{{ old('icon') }}" />
                                    @error('icon')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="type" class="form-label">type</label>
                                    <input type="text" class="form-control" id="type" name="type"
                                        placeholder="type" value="{{ old('type') }}" />
                                    @error('type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
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
