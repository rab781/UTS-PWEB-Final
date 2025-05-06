@extends('layouts.app')

@section('title', 'Profil - ArtikelKu')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <img class="rounded" style="height:auto;" alt="" src="https://avatars.githubusercontent.com/u/149395358?v=4" width="260" height="260" class="avatar avatar-user width-full border color-bg-default">
                    <h3 class="fw-bold">{{ $userCredentials['username'] }}</h3>
                    <p class="text-muted">{{ $userCredentials['password'] }}</p>
                    <div class="d-grid mt-3">
                        <a href="#" class="btn btn-primary">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-4">Tentang Saya</h3>
                    <p>Ini adalah halaman profil yang menampilkan username dari login.</p>
                    <p>Anda login sebagai:</p>
                    <ul>
                        <li><strong>Username:</strong> {{ $userCredentials['username'] }}</li>
                        <li><strong>Password:</strong> {{ $userCredentials['password'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
