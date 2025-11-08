@extends("layouts.header")

@section('title', $writer->name)

@section('content')
<div class="container my-4">
    <div class="d-flex flex-column align-items-center">
        <div class="d-flex align-items-center mb-3">
            <div>
                <img src="{{ asset('storage/' . $writer->image) }}"
                    alt="{{ $writer->name }}"
                    class="rounded-circle"
                    style="width: 60px; height: 60px; object-fit: cover;">
            </div>

            <div class="ms-3">
                <h3 class="fw-bold mb-0">
                    {{ $writer->name }}
                </h3>

                <p class="text-muted mb-0">
                    {{ $writer->description}}
                </p>
            </div>

        </div>

        @foreach ($articles as $article)
        <div class="card mb-4 shadow-sm" style="width: 90%;">
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
        @endforeach
    </div>
</div>

@endsection