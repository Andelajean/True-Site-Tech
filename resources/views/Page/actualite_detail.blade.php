@extends('layouts.cother')

@section('content')

<section class="bg-light p-5 my-5">
    <div class="container text-center">
        <h1>{{ $actualite->titre }}</h1>
        <p class="text-muted">{{ $actualite->created_at->format('d M Y') }}</p>
    </div>
</section>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            @if ($actualite->image)
                <img src="{{ asset('storage/' . $actualite->image) }}" alt="{{ $actualite->titre }}" class="img-fluid mb-4" style="width: 500px; height: 500px;">
            @else
                <img src="{{ asset('img/default.jpg') }}" alt="Image par défaut" class="img-fluid mb-4" style="width: 500px; height: 500px;">
            @endif
        </div>
        <div class="col-md-6">
            <p>{{ $actualite->description }}</p>
        </div>
    </div>
    <a href="{{ route('formation') }}" class="btn btn-primary mt-3">Retour aux actualités</a>
</div>

@endsection
