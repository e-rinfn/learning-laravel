@extends('layouts/mainlayout')

@section('title', 'Dashboard')

@section('content')

    <h1> Welcome, {{ Auth::user()->username }}</h1>
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card-data book">
                <div class="row">
                    <div class="col-6"><i class="bi bi-journal-bookmark"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Books</div>
                        <div class="card-count">{{ $book_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data category">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list-task"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Categories</div>
                        <div class="card-count">{{ $category_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><i class="bi bi-people-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">User</div>
                        <div class="card-count">{{ $user_count }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <h1>#Rent Log</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Book Title</th>
                    <th>Tgl Penyewaan</th>
                    <th>Tgl Kembali</th>
                    <th>Tgl Batas Kembali</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" style="text-align: center">No Data</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
