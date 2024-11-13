<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('galleries.index', compact('galleries'));
    }

    public function create() 
    {
        return view('galleries.create');  
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:25000',
            'description' => 'nullable',
            'tipe' => 'required|string',
        ]);

        if (Auth::check()) {
            $imageName = null;

            if ($request->hasFile('image')) {
                $imageName = time() . '-gallery.' . $request->file('image')->extension();
                $request->file('image')->storeAs('public/uploads/galleries', $imageName);
            }

            Gallery::create([
                'title' => $request->title,
                'image' => $imageName,
                'description' => $request->description,
                'tipe' => $request->tipe,
                'user_id' => Auth::id(),
            ]);

            return redirect()->route('galleries.index')->with('success', 'Gambar berhasil ditambahkan.');
        } else {
            return redirect()->route('galleries.index')->with('error', 'Anda harus login untuk menambahkan gambar.');
        }
    }

    public function edit(Gallery $gallery)
    {
        // @if (auth()->check() && (auth()->user()->id == $gallery->user_id || auth()->user()->role == 'admin'))
        if (Auth::check() && Auth::user()->role == 'admin') {
            return view('galleries.edit', compact('gallery'));
        }

        return redirect()->route('galleries.index')->with('error', 'Anda tidak memiliki izin untuk mengedit gambar ini.');
    }

    public function update(Request $request, Gallery $gallery)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $request->validate([
                'title' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:25000',
                'description' => 'nullable|string|max:1000',
                'tipe' => 'required|string',
            ]);

            $gallery->title = $request->title;
            $gallery->description = $request->description;
            $gallery->tipe = $request->tipe;

            if ($request->hasFile('image')) {
                if ($gallery->image) {
                    Storage::delete('public/uploads/galleries/' . $gallery->image);
                }

                $imageName = time() . '-gallery.' . $request->file('image')->extension();
                $request->file('image')->storeAs('public/uploads/galleries', $imageName);
                $gallery->image = $imageName;
            }

            $gallery->save();

            return redirect()->route('galleries.index')->with('success', 'Gambar berhasil diperbarui.');
        }

        return redirect()->route('galleries.index')->with('error', 'Anda tidak memiliki izin untuk memperbarui gambar ini.');
    }

    public function destroy(Gallery $gallery)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            if ($gallery->image) {
                Storage::delete('public/uploads/galleries/' . $gallery->image);
            }
            $gallery->delete();
            return redirect()->route('galleries.table')->with('success', 'Gambar berhasil dihapus.');
        }

        return redirect()->route('galleries.index')->with('error', 'Anda tidak memiliki izin untuk menghapus gambar ini.');
    }

    public function table()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $galleries = Gallery::all();
            return view('galleries.table', compact('galleries'));
        }

        return redirect()->route('galleries.index')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
