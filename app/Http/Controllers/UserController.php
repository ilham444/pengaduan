<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class UserController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $userId = auth()->id();

        $masuk = Pengaduan::where('user_id', $userId)->where('status', 'masuk')->count();
        $diproses = Pengaduan::where('user_id', $userId)->where('status', 'diproses')->count();
        $selesai = Pengaduan::where('user_id', $userId)->where('status', 'selesai')->count();
        $ditolak = Pengaduan::where('user_id', $userId)->where('status', 'ditolak')->count();

        return view('user.dashboard', compact('masuk', 'diproses', 'selesai', 'ditolak'));
    }

    
    public function index()
    {
        $pengaduans = Pengaduan::where('user_id', auth()->id())->get();
        return view('user.pengaduan.index', compact('pengaduans'));
    }

    
    public function create()
    {
        return view('user.pengaduan.create');
    }

    
    public function store(Request $request)
    {
      
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        // Menyimpan data pengaduan ke database
        Pengaduan::create([
            'user_id' => auth()->id(),
            'nama' => auth()->user()->name,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => 'masuk', 
        ]);

        // kembali ke halaman daftar pengaduan dengan pesan sukses
        return redirect()->route('user.pengaduan.index')->with('success', 'Pengaduan berhasil ditambahkan.');
    }

   
    public function edit($id)
    {
    
        $pengaduan = Pengaduan::where('user_id', auth()->id())->findOrFail($id);
        return view('user.pengaduan.edit', compact('pengaduan'));
    }

    
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        
        $pengaduan = Pengaduan::where('user_id', auth()->id())->findOrFail($id);

        $pengaduan->update($request->only('judul', 'deskripsi'));

        // kembali ke halaman daftar pengaduan
        return redirect()->route('user.pengaduan.index')->with('success', 'Pengaduan berhasil diperbarui.');
    }

    // Menghapus pengaduan
    public function destroy($id)
    {
        
        $pengaduan = Pengaduan::where('user_id', auth()->id())->findOrFail($id);
        $pengaduan->delete();

        return redirect()->route('user.pengaduan.index')->with('success', 'Pengaduan berhasil dihapus.');
    }
}
