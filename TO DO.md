oke.. pertama
<1> Buat databse tersambung pada halaman artikel juga gallery yang udah dibuat
<2> tampilkan data yang ada di databse ke halaman yang udah dibuat di halaman artikel dan Gallery
<3> tambahin fitur CRUD untuk Galleri
<4> Tambahin fitur CRUD untuk admin dan user

Command :
"article.blade.php";
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article | HealUS</title>
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/navbar.css">
    <style>
        .card-img-top {
            width: 100%;
            height: 200px; /* Atur tinggi gambar */
            object-fit: cover; /* Membuat gambar tetap dalam proporsi namun memenuhi container */
        }
        
    </style>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Logo di kiri -->
            <a class="navbar-brand" href="#">
                <img src="/src/img/icon/logo.png" alt="Logo" height="30">
            </a>

            <!-- Toggler untuk menu hamburger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar di kanan -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">
                            <img src="../src/img/icon/home.png" alt="" id="icon">
                            <span class="icon-text"><b>Beranda</b></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">
                            <img src="../src/img/icon/gal.png" alt="" id="icon">
                            <span class="icon-text"><b>Galeri</b></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/article">
                            <img src="../src/img/icon/news.png" alt="" id="icon">
                            <span class="icon-text"><b>Artikel</b></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">
                            <img src="../src/img/icon/cont.png" alt="" id="icon">
                            <span class="icon-text"><b>Kontak</b></span>
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <button class="btn-dark-mode" id="dark">
                        <img src="../src/img/icon/dark.png" alt="Dark Mode" id="dark-icon">
                    </button>
                    <a href="#" class="profile-icon">
                        <img src="../src/img/icon/profile.png" alt="Profile" class="rounded-circle">
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<body>
    <!-- Container untuk daftar artikel -->
    <div class="container mt-5" id="terbaru">
        <h2 class="text-center mb-4" style="background-color: #B5E6C2;">Berita Terbaru</h2>
        <div class="row">
            <!-- Artikel 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl1.jpg" class="card-img-top" alt="Gambar Artikel 1">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Pohon Baru??</h5>
                        <p class="card-text">
                            "Jenis pohon baru 'Agusee' ditemukan secara tak sengaja oleh Agus. Awalnya disangka wajah, pohon unik ini belum pernah tercatat dalam sejarah."

                        </p>
                        <a href="webs/art1.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl2.png" class="card-img-top" alt="Gambar Artikel 2">
                    <div class="card-body">
                        <h5 class="card-title">Bumi akan menjadi neraka? Waktunya menyentuh rumput</h5>
                        <p class="card-text">
                            "Keadaan bumi semakin parah, diperkirakan akan menjadi bola api. Tenang, kami ajarkan Anda menumbuhkan rumput di meja agar tak perlu keluar rumah."
                        </p>
                        <a href="webs/art2.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl3.jpg" class="card-img-top" alt="Gambar Artikel 3">
                    <div class="card-body">
                        <h5 class="card-title">Hijau+Hijau = Lebih Hijau?</h5>
                        <p class="card-text">
                            "Perusahaan kami berkolaborasi dengan NVIDIA! Produk baru, 'Grass Touch AF 300X,' sepetak rumput portabel tanpa kabel, sudah support USB-C, agar Anda bisa menyentuh rumput di kamar."
                        </p>
                        <a href="webs/art3.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div> 
            <!-- Tambahkan lebih banyak artikel sesuai kebutuhan -->
        </div>
    </div>
    <div class="container mt-5" id="trend">
        <h2 class="text-center mb-4" style="background-color: #B5E6C2;">Berita Trend</h2>
        <div class="row">
            <!-- Artikel 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl1.jpg" class="card-img-top" alt="Gambar Artikel 1">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Pohon Baru??</h5>
                        <p class="card-text">
                            "Jenis pohon baru 'Agusee' ditemukan secara tak sengaja oleh Agus. Awalnya disangka wajah, pohon unik ini belum pernah tercatat dalam sejarah."

                        </p>
                        <a href="webs/art1.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl2.png" class="card-img-top" alt="Gambar Artikel 2">
                    <div class="card-body">
                        <h5 class="card-title">Bumi akan menjadi neraka? Waktunya menyentuh rumput</h5>
                        <p class="card-text">
                            "Keadaan bumi semakin parah, diperkirakan akan menjadi bola api. Tenang, kami ajarkan Anda menumbuhkan rumput di meja agar tak perlu keluar rumah."
                        </p>
                        <a href="webs/art2.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl3.jpg" class="card-img-top" alt="Gambar Artikel 3">
                    <div class="card-body">
                        <h5 class="card-title">Hijau+Hijau = Lebih Hijau?</h5>
                        <p class="card-text">
                            "Perusahaan kami berkolaborasi dengan NVIDIA! Produk baru, 'Grass Touch AF 300X,' sepetak rumput portabel tanpa kabel, sudah support USB-C, agar Anda bisa menyentuh rumput di kamar."
                        </p>
                        <a href="webs/art3.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div> 
            <!-- Tambahkan lebih banyak artikel sesuai kebutuhan -->
        </div>
    </div>

    <!-- Script untuk Bootstrap -->
    <script src="../src/js/bootstrap.bundle.min.js"></script>
</body>
</html>


Coba sambungkan halaman article.blade.php ini kedalam database, hapus artikel yang sudah ada. untuk bagian terbaru isi dengan artikel terbaru, dan untuk bagian Trend isi dengan artikel dengan like terbanyak

-ISi ENV :
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=company-profile
DB_USERNAME=root
DB_PASSWORD=

-migration
saya sudah membuat migrationnya
"2024_09_10_024614_add_fields_to_articles_table"
berisi ;
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            // Menambahkan kolom untuk thumbnail artikel
            $table->string('thumbnail')->nullable();
            
            // Menambahkan kolom untuk foto artikel
            $table->string('photo')->nullable();
            
            // Menambahkan kolom untuk penulis artikel
            $table->string('author');
            
            // Menambahkan kolom untuk menyimpan ID user yang membuat artikel
            $table->unsignedBigInteger('user_id');
            
            // Menambahkan kolom untuk menyimpan jumlah like
            $table->integer('likes')->default(0);
    
            // Menambahkan index pada kolom user_id untuk meningkatkan performa query
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            // Menghapus kolom yang ditambahkan jika migration di-revert
            $table->dropForeign(['user_id']);
            $table->dropColumn(['thumbnail', 'photo', 'author', 'user_id', 'likes']);
        });
    }
    
};

-model
saya juga sudah membuat file modelnya "Article.php"
berisi ;
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'photo',
        'author',
        'user_id',
        'likes',
    ];

    /**
     * Get the user that owns the article.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Accessor for the thumbnail attribute.
     *
     * @return string
     */
    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? asset('images/' . $this->thumbnail) : null;
    }

    /**
     * Accessor for the photo attribute.
     *
     * @return string
     */
    public function getPhotoUrlAttribute()
    {
        return $this->photo ? asset('images/' . $this->photo) : null;
    }
}

-Controller
tak lupa saya juga sudah membuat controlernya "ArticleController.php"
berisi;
<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Periksa apakah ada user yang login
        if (Auth::check()) {
            $thumbnailName = null;
            $photoName = null;

            // Jika ada thumbnail yang diupload
            if ($request->hasFile('thumbnail')) {
                $thumbnailName = time().'.'.$request->file('thumbnail')->extension();
                $request->file('thumbnail')->storeAs('public/images', $thumbnailName);
            }

            // Jika ada photo yang diupload
            if ($request->hasFile('photo')) {
                $photoName = time().'.'.$request->file('photo')->extension();
                $request->file('photo')->storeAs('public/images', $photoName);
            }

            Article::create([
                'title' => $request->title,
                'content' => $request->content,
                'thumbnail' => $thumbnailName,
                'photo' => $photoName,
                'author' => Auth::user()->name, // Gunakan Auth::user() untuk ambil data user
                'user_id' => Auth::id(),        // Gunakan Auth::id() untuk ambil ID user
                'likes' => 0,
            ]);

            return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan.');
        } else {
            return redirect()->route('articles.index')->with('error', 'Anda harus login untuk menambahkan artikel.');
        }
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (Auth::check() && (Auth::user()->role === 'admin' || Auth::id() === $article->user_id)) {
            // Update thumbnail jika ada file baru
            if ($request->hasFile('thumbnail')) {
                $thumbnailName = time().'.'.$request->file('thumbnail')->extension();
                $request->file('thumbnail')->storeAs('public/images', $thumbnailName);
                $article->thumbnail = $thumbnailName;
            }

            // Update photo jika ada file baru
            if ($request->hasFile('photo')) {
                $photoName = time().'.'.$request->file('photo')->extension();
                $request->file('photo')->storeAs('public/images', $photoName);
                $article->photo = $photoName;
            }

            $article->title = $request->title;
            $article->content = $request->content;
            $article->save();

            return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui.');
        } else {
            return redirect()->route('articles.index')->with('error', 'Anda tidak memiliki izin untuk mengedit artikel ini.');
        }
    }

    public function destroy(Article $article)
    {
        if (Auth::check() && (Auth::user()->role === 'admin' || Auth::id() === $article->user_id)) {
            // Hapus gambar jika ada
            if ($article->thumbnail) {
                Storage::delete('public/images/'.$article->thumbnail);
            }
            if ($article->photo) {
                Storage::delete('public/images/'.$article->photo);
            }

            $article->delete();
            return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
        } else {
            return redirect()->route('articles.index')->with('error', 'Tidak memiliki izin.');
        }
    }
}
