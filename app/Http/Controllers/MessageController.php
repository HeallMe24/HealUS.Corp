<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        // Urutan Pesan Terbaru
        $messages = Message::latest()->get(); 

        // Muncul di Dashboard
        return view('dashboard', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Message::create($request->only('name', 'email', 'message'));

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim.');
    }
}
