<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class AdminController extends Controller
{
    public function dashboard()
    {
        $pengaduans = Pengaduan::all();
        return view('admin.dashboard', compact('pengaduans'));
    }

    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->status = $request->status;
        $pengaduan->save();

        return redirect()->route('admin.dashboard')->with('success', 'Status pengaduan berhasil diperbarui.');
    }


public function tanggapan(Request $request, $id)
    {
        // Validasi input tanggapan
        $request->validate([
            'tanggapan' => 'required|string|max:1000',
        ]);

        
        $pengaduan = Pengaduan::findOrFail($id);

        $pengaduan->update([
            'tanggapan' => $request->tanggapan,
        ]);

       
        return redirect()->route('admin.dashboard')->with('success', 'Tanggapan berhasil dikirim.');
    }

}

