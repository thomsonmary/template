<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use App\Models\CategorieUser;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage; // Tambahkan ini di atas

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $tags = Tag::all();

        return view('admin.news.tambah')->with([
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoriesusers = DB::table('categorie_user')
            ->join('users', 'users.id', '=', 'categorie_user.user_id')
            ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
            ->select('users.*', 'categories.*', 'categorie_user.*')
            ->where('categorie_user.id', '=', $id)
            ->get();
        $kategori  = Categorie::all();
        $tags = Tag::all();
        return view('admin.news.edit')->with(['tags' => $tags, 'kategori' => $kategori, 'categoriesusers' => $categoriesusers, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $categoriesusers = DB::table('categorie_user')
            ->join('users', 'users.id', '=', 'categorie_user.user_id')
            ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
            ->select('users.*', 'categories.*', 'categorie_user.*')
            ->where('categorie_user.id', '=', $id)
            ->get();

        $categoriesuser = DB::table('categorie_user')
            ->join('users', 'users.id', '=', 'categorie_user.user_id')
            ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
            ->select('users.*', 'categories.*', 'categorie_user.*', 'categorie_user.id')
            ->where('categorie_user.id', '=', $id)
            ->first();
        dd($categoriesuser);
        $kategori  = Categorie::all();
        $tags = Tag::all();
        // return view('admin.news.edit')->with(['tags' => $tags, 'kategori' => $kategori, 'categoriesusers' => $categoriesusers, 'id' => $id, 'categoriesuser' => $categoriesuser]);
        return view('admin.news.edit', compact('tags', 'kategori', 'categoriesusers', 'categoriesuser')); //->with(['tags' => $tags, 'kategori' => $kategori, 'categoriesusers' => $categoriesusers, 'id' => $id, 'categoriesuser' => $categoriesuser]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorieuser = CategorieUser::find($id);
        $categorieuser->delete();
        //  dd($id);
        return redirect()->route('admin.news.berita')->with('sukses', 'Berita telah berhasil di delete');
    }


    public function berita()
    {
        $categoriesusers = DB::table('categorie_user')
            ->join('users', 'users.id', '=', 'categorie_user.user_id')
            ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
            ->select('users.*', 'categories.*', 'categorie_user.*')
            ->latest('categorie_user.id')
            ->get();
        return view('admin.news.berita', compact('categoriesusers'));
    }

    public function tambah(Request $request)
    {
        // dd($request);
        // Validasi input termasuk file gambar
        $request->validate([
            'gambar_berita' => 'nullable|image|mimes:jpg,jpeg,png|max:512', // Ukuran max 500KB (512KB lebih aman)
        ]);

        // Ambil data berita berdasarkan ID jika ada
        $berita = DB::table('categorie_user')->where('id', $request->id)->first();

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('gambar_berita')) {
            $file = $request->file('gambar_berita');

            // Pastikan ukuran tidak lebih dari 500 KB
            if ($file->getSize() > 512000) { // 500 KB = 512000 bytes
                return back()->with('error', 'Ukuran file tidak boleh lebih dari 500KB');
            }

            // Buat nama file unik
            $namaFile = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

            // Simpan file ke folder uploads/berita
            $path = $file->move(public_path('uploads/berita'), $namaFile);

            if (!$path) {
                return back()->with('error', 'Gagal menyimpan gambar. Cek permission folder');
            }

            // Hapus gambar lama jika ada
            if ($berita && $berita->gambar_berita) {
                $gambarLama = public_path('uploads/berita/' . $berita->gambar_berita);
                if (file_exists($gambarLama)) {
                    unlink($gambarLama);
                }
            }
        } else {
            // Jika tidak ada file baru, gunakan gambar lama (jika ada)
            $namaFile = $berita->gambar_berita ?? null;
        }

        // Simpan berita baru ke database
        $tambah = new CategorieUser();
        $tambah->categorie_id = $request->nama_kategori;
        $tambah->user_id = $request->user_id;
        $tambah->judul_berita_ina = $request->judul_berita_ina;
        $tambah->slug = Str::slug($request->judul_berita_ina);
        $tambah->trending = $request->trending;
        $tambah->headline = $request->headline;
        $tambah->aktif = $request->aktif;
        $tambah->isi_berita_ina = $request->isi_berita_ina;
        $tambah->tanggal = $request->tanggal;
        $tambah->jam = $request->jam;

        // Cek apakah tag ada, jika ada gabungkan dengan koma
        if (!empty($request->tag)) {
            $tambah->tag = implode(",", $request->tag);
        }

        $tambah->video = $request->video;
        $tambah->gambar_berita = $namaFile; // Perbaikan variabel yang salah
        $tambah->save();

        return redirect()->route('admin.news.berita')->with('sukses', 'Berita telah berhasil ditambah');
    }


    public function updateAktif(Request $request, $id)
    {
        DB::Table('categorie_user')
            ->where('id', $request->id)
            ->update(['aktif' => $request->aktif]);
        return redirect()->route('admin.news.berita')->with('sukses', 'Status berita telah berhasil diseting');
    }
    public function updateHeadline(Request $request, $id)
    {
        DB::Table('categorie_user')
            ->where('id', $request->id)
            ->update(['headline' => $request->headline]);
        return redirect()->route('admin.news.berita')->with('sukses', 'Headline berita telah berhasil diseting');
    }
    public function updateTrending(Request $request, $id)
    {
        DB::Table('categorie_user')
            ->where('id', $request->id)
            ->update(['trending' => $request->trending]);
        return redirect()->route('admin.news.berita')->with('sukses', 'Trending berita telah berhasil diseting');
    }

    public function update(Request $request)
    {
        // dd($request);
        // Validasi input termasuk gambar (opsional)
        $request->validate([
            'gambar_berita' => 'nullable|image|mimes:jpg,jpeg|max:500', // Jika ada file, validasi
        ]);

        // Ambil data berita berdasarkan ID
        $berita = DB::table('categorie_user')->where('id', $request->id)->first();
        // dd($berita);
        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('gambar_berita')) {
            $file = $request->file('gambar_berita');
            // dd($file);
            // Pastikan ukuran tidak lebih dari 500 KB
            if ($file->getSize() > 512000) { // 500 KB = 512000 bytes
                return back()->with('eror', 'Ukuran file tidak boleh lebih dari 500KB');
                // return back()->withErrors(['gambar_berita' => 'Ukuran file tidak boleh lebih dari 500KB']);
            }

            // Buat nama file unik
            $namaFile = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

            // Simpan file menggunakan Storage Laravel
            $path = $file->move(public_path('uploads/berita'), $namaFile);

            if (!$path) {
                return back()->with('eror', 'Gagal menyimpan gambar. Cek permission folder');
                // return back()->withErrors(['gambar_berita' => 'Gagal menyimpan gambar. Cek permission folder.']);
            }

            // Hapus gambar lama jika ada
            if ($berita->gambar_berita) {
                $gambarLama = public_path('uploads/berita/' . $berita->gambar_berita);
                if (file_exists($gambarLama)) {
                    unlink($gambarLama);
                }
            }
        } else {
            // Jika tidak ada file baru, gunakan gambar lama
            $namaFile = $berita->gambar_berita;
            // dd($namaFile);
        }

        // Debugging untuk memastikan nama file tersimpan
        // dd($namaFile); // Uncomment ini untuk cek output

        // Update data berita
        $updated = DB::table('categorie_user')
            ->where('id', $request->id)
            ->update([
                'categorie_id' => $request->nama_kategori,
                'judul_berita_ina' => $request->judul_berita_ina,
                'sluk' => Str::slug($request->get('judul_berita_ina')),
                'judul_berita_eng' => $request->judul_berita_eng,
                'slug' => Str::slug($request->get('judul_berita_eng')),
                'headline' => $request->headline,
                'aktif' => $request->aktif,
                'isi_berita_ina' => $request->isi_berita_ina,
                'isi_berita_eng' => $request->isi_berita_eng,
                'tanggal' => $request->tanggal,
                'jam' => $request->jam,
                'tag' => implode(",", $request->tag),
                'video' => $request->video,
                'gambar_berita' => $namaFile // Simpan gambar baru atau tetap pakai gambar lama
            ]);

        if (!$updated) {
            // return back()->withErrors(['eror' => 'Gagal memperbarui berita.']);
            return back()->with('eror', 'Berita gagal diperbarui');
        }

        return redirect()->route('admin.news.berita')->with('sukses', 'Berita berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
