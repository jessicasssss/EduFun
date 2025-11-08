@extends('layouts.header')

@section('title', 'Home')

@section('content')
<img src="{{asset('storage/home.jpg')}}" alt="#" style="width: 100%; height: 400px; object-fit:cover;">
<div class="container my-4">

    <div class="d-flex flex-column align-items-center">

        @foreach ($articles as $article)
        <div class="card mb-4 shadow-sm" style="width: 90%;">
            <div class="card shadow-sm">
                <div class="row g-0 align-items-center">

                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $article->image) }}" 
                             class="img-fluid rounded-start"
                             alt="{{ $article->title }}" 
                             style="height: 100%; object-fit: cover;">
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $article->title }}</h5>
                            <p class="text-muted mb-1" style="font-size: 13px;">
                                {{ $article->created_at->format('d M Y') }} | by {{ $article->writer->name }}
                            </p>
                            <p class="card-text" style="font-size: 14px;">
                                {{ Str::limit($article->content, 120) }}
                            </p>
                            <a href="{{ route('articles.show', $article->id) }}" 
                               class="btn btn-dark btn-sm rounded-pill">
                                Read more...
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
