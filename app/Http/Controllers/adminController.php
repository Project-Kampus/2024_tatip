<?php

namespace App\Http\Controllers;

use App\Models\tartip;
use Illuminate\Http\Request;

class adminController extends Controller
{
    // umum
    public function umum()
    {
        $umum = tartip::where('tatip', 'umum')->get();
        return view('admin.form', [
            'data' => $umum,
            'tartip' => 'Umum'
        ]);
    }

    // keamanan
    public function keamanan()
    {
        $keamanan = tartip::where('tatip', 'Keamanan dan Ketertiban')->get();
        return view('admin.form', [
            'data' => $keamanan,
            'tartip' => 'Keamanan dan Ketertiban'
        ]);
    }
    // kebersihan
    public function kebersihan()
    {
        $kebersihan = tartip::where('tatip', 'Kebersihan Lingkungan')->get();
        return view('admin.form', [
            'data' => $kebersihan,
            'tartip' => 'Kebersihan Lingkungan'
        ]);
    }

    // iuran
    public function iuran()
    {
        $iuran = tartip::where('tatip', 'Iuran Warga')->get();
        return view('admin.form', [
            'data' => $iuran,
            'tartip' => 'Iuran Warga'
        ]);
    }

    // kegiatan
    public function kegiatan()
    {
        $kegiatan = tartip::where('tatip', 'Kegiatan Sosial')->get();
        return view('admin.form', [
            'data' => $kegiatan,
            'tartip' => 'Kegiatan Sosial'
        ]);
    }

    public function formulirAction(Request $request)
    {
        // validasi request
        $request->validate([
            'text.*' => 'string',
            'textadd.*' => 'string',
            'tartip' => 'string|in:Umum,Keamanan dan Ketertiban,Kebersihan Lingkungan,Iuran Warga,Kegiatan Sosial',
        ]);

        // return $request->all();

        $umum = tartip::where('tatip', $request->tartip)->get();

        // Pastikan $request->text adalah array, gunakan default jika null
        $text = $request->text ?? [];
        foreach ($umum as $item) {
            if (isset($text[$item->id])) {
                $item->update([
                    'text' => $text[$item->id],
                ]);
            } else {
                $item->delete();
            }
        }
        // Pastikan $request->textadd adalah array, gunakan default jika null
        $textadd = $request->textadd ?? [];
        foreach ($textadd as $value) {
            tartip::create([
                'text' => $value,
                'tatip' => $request->tartip,
            ]);
        }


        return redirect()->back()->with('success', 'Data berhasil diubah');
    }
}
