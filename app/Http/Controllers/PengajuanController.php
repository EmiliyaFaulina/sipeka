<?php

namespace App\Http\Controllers;

use App\Models\pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengajuanController extends Controller
{
    public function index(){
        $pengajuan = pengajuan::with('userPengajuan')->orderBy('tanggal', 'DESC')->get();
        return view('via.components-pengajuan', compact('pengajuan'));
    }

    public function pengajuan(Request $request){

        $validasi = $request->validate([
            'judul_pengajuan' => 'required|max:255|string',
            'foto' => 'required|max:10000|mimes:pdf'
        ]);

        $file = $request->file('foto');

        $imageName = time().'.'.$file->extension();
        $file->move(public_path('berkas'), $imageName);


        $pengajuan = new pengajuan();
        $pengajuan->user = $request->user;
        $pengajuan->judul_pengajuan = $validasi['judul_pengajuan'];
        $pengajuan->status = 'pending';
        $pengajuan->tanggal = date('Y-m-d');
        $pengajuan->foto = 'berkas/'.$imageName;
        $pengajuan->save();

        if($pengajuan == true){
            Session::flash('success', 'Pengajuan Telah Dibuat');
            return redirect()->route('egov');
        }
        else{
            Session::flash('failed', 'Pengajuan Gagal Dibuat');
            return redirect()->back();
        }

    }

    public function statusPengajuan(Request $request, $id){
        $request->validate([
            'status' => 'required|in:berhasil,ditolak'
        ]);

        $item = pengajuan::findOrFail($id);
        $item->status = $request->status;
        $item->save();

        return redirect()->route('pengajuan.index');

    }

    public function dataPengajuan(){
        return view('jannah.data-pengajuan');
    }
    public function sudahLogin(){
        return view('jannah.index');
    }

}
