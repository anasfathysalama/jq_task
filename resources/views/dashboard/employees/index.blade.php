@extends('dashboard.master')
@section('page_title' , 'Employees')
@push('style')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
    <div>
        <a href="{{route('employees.create')}}" class="btn btn-primary" style="margin-bottom: 20px">Create</a>
    </div>
    <div class="card">
        <div class="card-body p-0">
            {{$dataTable->table()}}
        </div>
    </div>
@endsection


@push('scripts')

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    {{$dataTable->scripts()}}

    <script>

        $(document).on('click', '.delete-btn', function (e) {
            e.preventDefault();

            let link = $(this).attr('href');
            let alertConfirmation = confirm("Are you want to delete employee");
            if (alertConfirmation === true) {
                window.location = link;
            } else {
                alert('delete canceled');
            }

        });

    </script>
@endpush
