@extends('layouts.app')

@section('title', 'Dasbor - ArtikelKu')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-md-12">
            <h1 class="fw-bold">Dashboard</h1>
            <p class="lead">Selamat datang, {{ $username }}!</p>
            <p class="text-muted">Berikut adalah ringkasan aktivitas dan statistik artikel Anda.</p>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1 small">Total Artikel</p>
                        <h3 class="fw-bold mb-0">{{ $userStats['articles'] ?? 12 }}</h3>
                    </div>
                    <div class="rounded-circle bg-light p-2 p-md-3 text-primary">
                        <i class="bi bi-file-earmark-text fs-5"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1 small">Total Dilihat</p>
                        <h3 class="fw-bold mb-0">{{ $userStats['views'] ?? 1520 }}</h3>
                    </div>
                    <div class="rounded-circle bg-light p-2 p-md-3 text-primary">
                        <i class="bi bi-eye fs-5"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1 small">Total Suka</p>
                        <h3 class="fw-bold mb-0">{{ $userStats['likes'] ?? 284 }}</h3>
                    </div>
                    <div class="rounded-circle bg-light p-2 p-md-3 text-primary">
                        <i class="bi bi-heart fs-5"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1 small">Total Komentar</p>
                        <h3 class="fw-bold mb-0">{{ $userStats['comments'] ?? 56 }}</h3>
                    </div>
                    <div class="rounded-circle bg-light p-2 p-md-3 text-primary">
                        <i class="bi bi-chat-dots fs-5"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold">Artikel Terbaru</h3>
                <a href="{{ url('/pengelolaan') }}" class="btn btn-primary rounded-pill px-4">Lihat Semua</a>
            </div>

            <div class="table-responsive">
                <table class="table table-hover border-0">
                    <thead>
                        <tr class="bg-light">
                            <th scope="col" class="rounded-start ps-4">Judul</th>
                            <th scope="col" class="d-none d-md-table-cell">Kategori</th>
                            <th scope="col" class="d-none d-md-table-cell">Tanggal</th>
                            <th scope="col" class="d-none d-md-table-cell">Dilihat</th>
                            <th scope="col" class="rounded-end text-end pe-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artikelTerbaru as $artikel)
                        <tr class="align-middle">
                            <td class="ps-4">
                                <a href="#" class="text-decoration-none text-dark fw-bold">{{ $artikel['title'] }}</a>
                                <p class="text-muted mb-0 small">{{ $artikel['excerpt'] ?? $artikel['deskripsi'] ?? '' }}</p>
                                <div class="d-md-none mt-2">
                                    <span class="badge text-bg-light rounded-pill px-2 py-1 me-1">{{ $artikel['category'] }}</span>
                                    <small class="text-muted me-2">{{ $artikel['created_at'] }}</small>
                                    <small class="text-muted"><i class="bi bi-eye"></i> {{ $artikel['views'] }}</small>
                                </div>
                            </td>
                            <td class="d-none d-md-table-cell">
                                <span class="badge text-bg-light rounded-pill px-3 py-2">{{ $artikel['category'] }}</span>
                            </td>
                            <td class="d-none d-md-table-cell">{{ $artikel['created_at'] }}</td>
                            <td class="d-none d-md-table-cell">{{ $artikel['views'] }}</td>
                            <td class="text-end pe-4">
                                <div class="btn-group d-none d-md-inline-flex">
                                    <a href="#" class="btn btn-sm btn-outline-primary rounded-start-pill">Edit</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger rounded-end-pill">Hapus</a>
                                </div>
                                <div class="d-md-none">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Aksi
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
