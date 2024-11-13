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
        $articles = Article::orderBy('created_at', 'desc')->get();
        $trendingArticles = Article::orderBy('likes', 'desc')->get();
        return view('articles.index', compact('articles', 'trendingArticles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'contentarticle' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10080',
        ]);

        if (Auth::check()) {
            $thumbnailName = null;
            $photoName = null;

            if ($request->hasFile('thumbnail')) {
                $thumbnailName = time() . '-thumbnail.' . $request->file('thumbnail')->extension();
                $request->file('thumbnail')->storeAs('public/uploads/articles/thumbnail', $thumbnailName);
            }

            if ($request->hasFile('photo')) {
                $photoName = time() . '-photo.' . $request->file('photo')->extension();
                $request->file('photo')->storeAs('public/uploads/articles/photo', $photoName);
            }

            Article::create([
                'title' => $request->title,
                'contentarticle' => $request->contentarticle,
                'thumbnail' => $thumbnailName,
                'photo' => $photoName,
                'author' => Auth::user()->name,
                'user_id' => Auth::id(),
                'likes' => 0,
            ]);

            return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan.');
        } else {
            return redirect()->route('articles.index')->with('error', 'Anda harus login untuk menambahkan artikel.');
        }
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return view('articles.edit', compact('article'));
        }

        return redirect()->route('articles.index')->with('error', 'Anda tidak memiliki izin untuk mengedit artikel ini.');
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'contentarticle' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10080',
        ]);

        // Only admins can update the article
        if (Auth::check() && Auth::user()->role === 'admin') {
            if ($request->hasFile('thumbnail')) {
                $thumbnailName = time() . '-thumbnail.' . $request->file('thumbnail')->extension();
                $request->file('thumbnail')->storeAs('public/uploads/articles/thumbnail', $thumbnailName);
                $article->thumbnail = $thumbnailName;
            }

            if ($request->hasFile('photo')) {
                $photoName = time() . '-photo.' . $request->file('photo')->extension();
                $request->file('photo')->storeAs('public/uploads/articles/photo', $photoName);
                $article->photo = $photoName;
            }

            $article->title = $request->title;
            $article->contentarticle = $request->contentarticle;
            $article->save();

            return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui.');
        } else {
            return redirect()->route('articles.index')->with('error', 'Anda tidak memiliki izin untuk mengedit artikel ini.');
        }
    }

    public function destroy(Article $article)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            if ($article->thumbnail) {
                Storage::delete('public/uploads/articles/thumbnail/' . $article->thumbnail);
            }
            if ($article->photo) {
                Storage::delete('public/uploads/articles/photo/' . $article->photo);
            }
            $article->delete();
            return redirect()->route('articles.table')->with('success', 'Artikel berhasil dihapus.');
        } else {
            return redirect()->route('articles.index')->with('error', 'Tidak memiliki izin.');
        }
    }

    public function table()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $articles = Article::all();
            return view('articles.table', compact('articles'));
        } else {
            return redirect('/')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        }
    }

    public function like($id)
    {
        $article = Article::findOrFail($id);
        $article->increment('likes');
        return response()->json(['success' => true, 'likes' => $article->likes]);
    }
}
