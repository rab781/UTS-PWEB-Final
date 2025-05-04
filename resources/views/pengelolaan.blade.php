@extends('layouts.app')

@section('title', 'Article Management - ArticleHub')

@section('content')

<div class="container py-5">
    @if(request()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
        Artikel berhasil ditambahkan!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="fw-bold">Article Management</h1>
            <p class="text-muted">Manage your articles, track performance, and create new content.</p>
        </div>
        <div class="col-md-4 text-md-end d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createArticleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg me-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                </svg>
                Create New Article
            </a>
        </div>
    </div>

    <!-- Articles Table -->
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="d-none d-md-table-cell" style="width: 50px">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col" class="d-none d-md-table-cell">Category</th>
                                    <th scope="col" class="d-none d-md-table-cell">Date</th>
                                    <th scope="col" class="d-none d-md-table-cell">Status</th>
                                    <th scope="col" class="d-none d-md-table-cell">Views</th>
                                    <th scope="col" style="width: 150px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($artikels as $index => $artikel)
                                <tr>
                                    <th scope="row" class="d-none d-md-table-cell">{{ $index + 1 }}</th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0">{{ $artikel['title'] }}</h6>
                                            <small class="text-muted">{{ Str::limit($artikel['deskripsi'], 60) }}</small>
                                            <div class="d-md-none mt-2">
                                                <span class="badge text-bg-secondary rounded-pill me-2">{{ $artikel['category'] }}</span>
                                                <small class="text-muted me-2">{{ $artikel['created_at'] }}</small>
                                                <span class="badge {{ $artikel['status'] == 'Published' ? 'bg-success' : 'bg-secondary' }} me-2">
                                                    {{ $artikel['status'] }}
                                                </span>
                                                <small class="text-muted"><i class="bi bi-eye"></i> {{ $artikel['views'] }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="d-none d-md-table-cell">{{ $artikel['category'] }}</td>
                                    <td class="d-none d-md-table-cell">{{ $artikel['created_at'] }}</td>
                                    <td class="d-none d-md-table-cell">
                                        @if($artikel['status'] == 'Published')
                                            <span class="badge bg-success">Published</span>
                                        @else
                                            <span class="badge bg-secondary">Draft</span>
                                        @endif
                                    </td>
                                    <td class="d-none d-md-table-cell">{{ $artikel['views'] }}</td>
                                    <td>
                                        <div class="btn-group d-none d-md-inline-flex">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                            <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </div>
                                        <div class="dropdown d-md-none">
                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <nav class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>


<div class="modal fade" id="createArticleModal" tabindex="-1" aria-labelledby="createArticleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createArticleModalLabel">Buat artikel baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('buatArtikel') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <select class="form-select" id="category" name="category" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Hiburan">Hiburan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="statusPublished" value="Published" checked style="accent-color: #e83e8c;">
                            <label class="form-check-label" for="statusPublished">
                                Published
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="statusDraft" value="Draft" style="accent-color: #e83e8c;">
                            <label class="form-check-label" for="statusDraft">
                                Draft
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Article</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
