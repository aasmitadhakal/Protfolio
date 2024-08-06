@extends('layout.admin.master')
@section('content')
    <div class="card mx-5 my-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Project </h5>
            <small class="text-muted float-end">
                <a href="{{ route('project.create') }}" class="btn btn-primary"><i class="bx bx-plus"></i>
                    Create</a>
            </small>
        </div>
        @if (!$project->isEmpty())
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table" id="dtable">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title_Type</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($project as $key => $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->title_type }}</td>
                                    <td>{{ $project->title }}</td>
                                    <td><img src="{{ asset($project->image) }}" height="100" alt=""></td>
                                    {{-- <td>{{ $project->order }}</td> --}}

                                    <td class="">
                                        <a href="{{ route('project.edit', $project->id) }}" type="button"
                                            class="btn btn-icon btn-primary">
                                            <i class="tf-icons bx bx-edit text-white"></i>
                                        </a>
                                        <form action="{{ route('project.destroy', $project->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-icon btn-danger " id="service_blog">
                                                <i class="tf-icons bx bx-trash text-white"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection;
@section('js')
    <script>
        $('#delete_service').click(function(e) {
            e.preventDefault();

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).closest("form").submit();
                }
            });

        });
    </script>
@endsection
