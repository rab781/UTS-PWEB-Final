@extends('layouts.app')

@section('title', 'ArtikelKu - Landing Page')

@section('content')
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 text-center text-lg-start">
                <h1 class="display-4 fw-bold mb-4">Menulis, berbagi, dan terhubung dengan pembaca</h1>
                <p class="lead text-muted mb-4">"Setiap cerita memiliki kekuatan untuk menginspirasi, mengubah, dan menyatukan kita semua."</p>
                <a href="{{ url('/login') }}" class="btn btn-primary btn-lg px-4 me-2 mb-3">Get Started</a>
            </div>
            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0 text-center">
                <img alt="drawing Icon" fetchpriority="auto" loading="auto" src="{{ asset('images/drawing-logo.png') }}" class="img-fluid" />
            </div>
        </div>
    </div>
</section>
@endsection
