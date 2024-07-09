@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
    <h4 class="py-3 mb-4"> <span class="text-mute fw-light">Tables</span> Produk </h4>
    <div class="card">
        <div class="card-header">
            <div class="float-start">
                <h5> kategori</h5>
            </div>
            <div class="float-end">
                <a href="{{ route('produk.create') }}" class="btn btn-sm btn-primary">
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
                            <th>nama</th>
                            <th>deskripsi</th>
                            <th>harga</th>
                            <th>stok</th>
                            <th>kategori</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @php $i=1; @endphp
                        @foreach ($produks as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->nama_produk}}</td>
                                    <td>{{ $data->deskripsi}}</td>
                                    <td>{{ $data->harga}}</td>
                                    <td>{{ $data->stok}}</td>
                                    <td>{{ $data->kategori->id}}</td>
                                    <td>
                                        <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-sm btn-warning">
                                                Edit
                                            </a>
                                            <a href="{{ route('kategori.destroy', $data->id) }}" class="btn btn-danger"
                                                data-confirm-delete="true">Delete</a>
                                        </form>
                                    </td>
                                </tr>
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
