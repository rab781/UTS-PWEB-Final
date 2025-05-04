@extends('layouts.app')

@section('title', 'Profil - ArtikelKu')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Profile Sidebar -->
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <img src="https://ui-avatars.com/api/?name={{ $userCredentials['username'] }}&background=0D8ABC&color=fff&size=128"
                        alt="Default User" class="rounded-circle img-fluid mb-3" style="width: 120px;">
                    <h3 class="fw-bold">{{ $userCredentials['username'] }}</h3>
                    <p class="text-muted">{{ $userCredentials['password'] }}</p>

                    <div class="d-grid mt-3">
                        <a href="#" class="btn btn-primary">Edit Profil</a>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3">Informasi Profil</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Username</span>
                            <span class="fw-medium">{{ $userCredentials['username'] }}</span>
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Password</span>
                            <span class="fw-medium">{{ $userCredentials['password'] }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Profile Content -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-4">Tentang Saya</h3>
                    <p>nama saya ambatukam ,saya adalah seorang penulis artikel yang sangat berpengalaman dalam menulis artikel tentang teknologi dan kesehatan. Saya telah menulis banyak artikel yang telah diterbitkan di berbagai platform online. Saya juga memiliki pengalaman dalam mengelola blog pribadi dan media sosial untuk mempromosikan artikel saya. Selain itu, saya juga aktif dalam komunitas penulis dan sering berbagi tips dan trik menulis dengan sesama penulis.</p>
                    <p class="text-muted">"Saya percaya bahwa setiap orang memiliki cerita untuk diceritakan, dan saya ingin membantu mereka menemukan suara mereka melalui tulisan."</p>
                    <h3 class="fw-bold mt-4 mb-4">Aktivitas Terakhir</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Artikel Terakhir</span>
                            <span class="fw-medium">Judul Artikel 1</span>
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Komentar Terakhir</span>
                            <span class="fw-medium">Komentar pada Artikel 1</span>
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Suka Terakhir</span>
                            <span class="fw-medium">Artikel 2</span>
                        </li>
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="text-muted">Pengikut Terakhir</span>
                            <span class="fw-medium">Pengikut 1</span>
                        </li>
                    </ul>
                    <div class="d-grid mt-4">
                        <a href="#" class="btn btn-primary">Lihat Semua Aktivitas</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
