@extends('layout.admin.master')


@section('content')
    <div class="card container mt-5 py-5">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Show Contact Inquiry</h5>
            <small class="text-muted float-end">
                <a href="{{ route('contact.index') }}" class="btn btn-primary">
                    <i class='bx bx-left-arrow-alt'></i>
                    Back
                </a>
            </small>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table" id="dtable">
                    <thead>
                        <tr>
                            <th>Field</th>
                            <th>Answer</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        <tr>
                            <td>Name</td>

                            <td>{{ $contact->name }}</td>

                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>{{ $contact->email }}</td>
                        </tr>

                        <tr>
                            <td>Phone</td>
                            <td>{{ $contact->phone }}</td>
                        </tr>

                        <tr>
                            <td>Message</td>
                            <td>{{ $contact->message }}</td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('.delete_contact').click(function(e) {
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
