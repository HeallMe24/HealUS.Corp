<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article | HealUS</title>
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/custom.css') }}">
</head>
<header>
    <x-navbar></x-navbar>
</header>

<body>
    <div class="container mt-5" id="terbaru">
        <h2 class="text-center mb-4" id="header-article">Berita Terbaru</h2>

        @if(session('success'))
        <div class="toast-container position-fixed top-50 start-50 translate-middle p-3">
            <div id="uploadToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-lg-4 col-md-6 mb-4"> 
                    <div class="card h-100">
                        @if ($article->thumbnail)
                            <img src="{{ $article->getThumbnailUrlAttribute() }}" class="card-img-top" alt="Thumbnail {{ $article->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit($article->contentarticle, 100) }}</p>
                           
                            <div class="d-flex justify-content-between"> 
                                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-success">Selengkapnya...</a>
                                <p class="text-muted" style="font-size: 0.9rem;">{{ ($article->created_at)->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-5" id="trend">
        <h2 class="text-center mb-4" id="header-article">Artikel ter-PANAS</h2>

        <div class="row">
            @foreach ($trendingArticles as $article)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        @if ($article->thumbnail)
                            <img src="{{ $article->getThumbnailUrlAttribute() }}" class="card-img-top" alt="Thumbnail {{ $article->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit($article->contentarticle, 100) }}</p>
                            <p>
                                <img src="{{ asset('src/img/icon/like.png') }}" alt="Likes" width="24"> {{ $article->likes }} 
                            </p>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-success">Selengkapnya...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Add BUtton -->
    <a href="{{ route('articles.create') }}" class="btn btn-success rounded-circle position-fixed" style="bottom: 20px; right: 20px; width: 60px; height: 60px;">
        <img src="{{ asset('src/img/icon/plus.png') }}" alt="Tambah Artikel" class="img-fluid" >
    </a>

</body>
<script src="{{ asset('src/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('src/js/custom.js') }}"></script>

</html>
