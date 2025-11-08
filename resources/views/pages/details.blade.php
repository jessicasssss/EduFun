@extends("layouts.header")

@section("title", $article->title)

@section('content')

<div class="container my-4">
<h3 class="fw-bold text-center">{{ $article->category }}</h3>
    <div class="mt-3">
        <img src="{{ asset('storage/' .$article->image) }}" alt="{{$article->title}}" class="img-fluid rounded d-block mx-auto" style="height: 600px; object-fit: cover;">
    </div>
    <p class="text-muted mt-3 mb-1">
        {{$article->created_at->format('d M Y')}} | by {{ $article->writer->name}}
    </p>
    <h4 class="fw-bold mb-3"> {{ $article->title}}</h4>

    <p class="text-dark">
        {{$article->content}}
    </p>
</div>

@endsection