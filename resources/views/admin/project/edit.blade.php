@extends('layout.admin.master')
@section('content')
    <div class="card my-4 mx-4 mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Project</h5>
            <small class="text-muted float-end">
                <a href="{{ route('project.index') }}" class="btn btn-primary">
                    <i class='bx bx-left-arrow-alt'></i>
                    Back
                </a>
            </small>
        </div>
        <div class="card-body">
            <form action="{{ route('project.update', $project->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row justify-content-center g-4">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-body">

                                <div class="mb-4">
                                    <label for="title_type" class="form-label">title_type</label>
                                    <input type="text" class="form-control" id="title_type" name="title_type"
                                        placeholder="title_type" value="{{ old('title_type', $project->title_type) }}" />
                                    @error('title_type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="title" class="form-label">title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="title" value="{{ old('title', $project->title) }}" />
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="short_description" class="form-label">short_description</label>
                                    <input type="text" class="form-control" id="short_description"
                                        name="short_description" placeholder="short_description"
                                        value="{{ old('short_description', $project->short_description) }}" />
                                    @error('short_description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="description" class="form-label">description</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="description" value="{{ old('description', $project->description) }}" />
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="link" class="form-label">link</label>
                                    <input link="text" class="form-control" id="link" name="link"
                                        placeholder="link" value="{{ old('link', $project->link) }}" />
                                    @error('link')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4 text-2xl">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="image" name="image"
                                        value="{{ old('image', $project->image) }}" data-default-file
                                        class="{{ asset('image', $project->image) }}" />

                                    @error('image')
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
                    Update
                </button>
            </form>
        </div>
    </div>
@endsection
