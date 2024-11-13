<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel: {{ $article->title }} | HealUS</title>
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/custom.css') }}">
    <style>
        .article-image {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            height: auto;
        }
        .article-content {
            white-space: pre-wrap;
            word-wrap: break-word;
            line-height: 1.6;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali</a>
        <article class="bg-white p-4 rounded-3 shadow-sm position-relative">
            <h1 class="mb-4">{{ $article->title }}</h1>
            <img src="{{ asset('storage/uploads/articles/photo/' . $article->photo) }}" 
                alt="{{ $article->title }}" class="img-fluid rounded mb-3 shadow-sm article-image">
            <div class="d-flex justify-content-between align-items-center mb-4 text-muted">
                <div>
                    <small>Diunggah: {{ $article->created_at->format('d M Y') }}</small><br>
                    <small>Penulis: {{ $article->author }}</small>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-primary" onclick="toggleDropdown()">Share</button>
                        <div id="shareMenu" class="dropdown-menu">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                                class="dropdown-item" target="_blank" rel="noopener noreferrer">
                                Bagikan ke Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($article->title) }}" 
                                class="dropdown-item" target="_blank" rel="noopener noreferrer">
                                Bagikan ke Twitter
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($article->title . ' ' . url()->current()) }}" 
                                class="dropdown-item" target="_blank" rel="noopener noreferrer">
                                Bagikan ke WhatsApp
                            </a>
                            <a href="#" class="dropdown-item" onclick="copyLink('{{ url()->current() }}')">
                                Salin Link
                            </a>
                        </div>
                    </div>
                    <div class="ml-3">
                        <button id="likeButton" class="btn btn-light" onclick="handleLikeClick({{ $article->id }})">
                            <img src="{{ asset('src/img/icon/like.png') }}" alt="Like" 
                                style="width: 20px; height: 20px; vertical-align: middle;">
                            <span id="likeCount">{{ $article->likes }}</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Konten Artikel dengan white-space handling -->
            <div class="article-content mb-4">{{ $article->contentarticle }}</div>
        </article>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertModalLabel">Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="alertMessage">
                    <!-- Pesan akan muncul di sini -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('src/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('src/js/custom.js') }}"></script>
</body>
</html>
