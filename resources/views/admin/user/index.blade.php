@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
    <h4 class="py-3 mb-4"> <span class="text-mute fw-light">Tables</span> user </h4>
    <div class="card">
        <div class="card-header">
            <div class="float-start">
                <h5> user</h5>
            </div>
            <div class="float-end">
                <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">
                    Add
                </a>
            </div>
        </div>
        <br>
        <div class="card-body">
            <table class="table-responsive text-nowrap">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @php $i=1; @endphp
                        @foreach ($users as $data)
                            @if ($loop->first)
                                      <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->isAdmin == 1 ? 'admin' : 'user' }}</td>
                            <td>
                                </td>
                            </tr>
                            @else
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->isAdmin == 1 ? 'admin' : 'user' }}</td>
                                    <td>
                                        <form action="{{ route('user.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('user.edit', $data->id) }}" class="btn btn-sm btn-warning">
                                                Edit
                                            </a>
                                            <a href="{{ route('user.destroy', $data->id) }}" class="btn btn-danger"
                                                data-confirm-delete="true">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#example');
    </script>
@endpush
