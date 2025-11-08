@extends("layouts.header")

@section('title', 'Writers')

@section('content')
<div class="container my-3 p-3"> 
    <h4 class="fw-bold mb-3">Our Writers:</h4>

    <div class="d-flex flex-wrap gap-4">
        @foreach($writers as $w)
        <a href="{{ route('writers.articles', $w->id) }}" 
           class="text-decoration-none text-dark text-center"
           style="width: 12rem;">
            <div class="card border-0 shadow-sm">
                <img src="{{ asset('storage/' . $w->image) }}" 
                    alt="{{ $w->name }}"
                    class="card-img-top"
                    style="width: 100%; height: 12rem; object-fit: cover;">
                <div class="card-body p-2">
                    <h6 class="card-title fw-bold mb-1">{{ $w->name }}</h6>
                    <p class="card-text small text-muted">{{ Str::limit($w->description, 40) }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection