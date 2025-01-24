@extends('layouts.cother')
@section('content')

<!-- Hero Section -->
<section class="bg-light p-5 my-5">
    <div class="container text-center">
        <h1>Actualités</h1>
        <p>Découvrez les dernières nouvelles et mises à jour de TrueSite Technology.</p>
    </div>
</section>

<!-- Main Content -->
<div class="container py-5">
        <h1 class="mb-4">Actualités</h1>
        <div class="row">
            @forelse ($actualites as $actualite)
                <div class="col-md-3 mb-4">
                    <div class="card shadow">
                        @if ($actualite->image)
                            <img src="{{ asset('storage/' . $actualite->image) }}" class="card-img-top" alt="{{ $actualite->titre }}" style="height: 250px; object-fit: cover;">
                        @else
                            <img src="{{ asset('img/default.jpg') }}" class="card-img-top" alt="Image par défaut" style="height: 250px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $actualite->titre }}</h5>
                            <p class="card-text">{{ Str::limit($actualite->description, 100) }}</p>
                            <a href="{{ route('actualite.detail', $actualite->id) }}" class="btn btn-primary">Lire plus</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Aucune actualité pour le moment.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $actualites->links() }}
        </div>
    </div>
@endsection
