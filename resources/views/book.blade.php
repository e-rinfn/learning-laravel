@extends('layouts/mainlayout')

@section('title', 'Books')

@section('page-name', 'dashboard')

@section('content')

    <h1>Books List</h1>
    <div class="my-5 d-flex justify-content-end">
        <a href="book-add" class="btn btn-primary ">Add Data</a>
    </div>
    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="my-5">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Code</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->book_code }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="#">EDIT</a>
                            <a href="#">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
