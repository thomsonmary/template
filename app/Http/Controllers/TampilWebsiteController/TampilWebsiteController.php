<?php

namespace App\Http\Controllers\TampilWebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
// use DB;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\CategorieUser;
use App\Models\Categorie;
use App\Models\User;
use App\Models\Tag;
use App\Models\Visitor;
use App\Models\Template;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\String_;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class TampilWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // TAMPIL PADA HALAMAN WELCOME
    {
      /*1. Untuk tampilan semua berita di beranda awal home     */
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('users.*', 'categories.*', 'categorie_user.*')
                        ->latest('categorie_user.id')
                        ->get();

      $trendingnews = DB::table('categorie_user')
                      ->join('users', 'users.id', '=', 'categorie_user.user_id')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('users.*', 'categories.*', 'categorie_user.*')
                      ->where(function ($query) {
                        $query->where('categorie_user.trending', '=', 'Y')
                          ->orWhere('categorie_user.aktif', '=', 'Y');
                      })
                      ->orderByDesc('categorie_user.id') // Urutkan secara descending berdasarkan id
                      ->get();
      $featurednews = DB::table('categorie_user')
                      ->join('users', 'users.id', '=', 'categorie_user.user_id')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('users.*', 'categories.*', 'categorie_user.*')
                      ->where(function ($query) {
                        $query->where('categorie_user.headline','=','Y')
                        ->orWhere('categorie_user.aktif','=','Y');
                      })
                      ->orderByDesc('categorie_user.id') // Urutkan secara descending
                      ->get();
      $mostviews = DB::table('categorie_user')
                      ->join('users', 'users.id', '=', 'categorie_user.user_id')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('users.*', 'categories.*', 'categorie_user.*')
                      ->where('categorie_user.view', '>=', 3) // Pastikan hanya data dengan view lebih dari 0 yang ditampilkan
                      // ->orderByDesc('categorie_user.view') // Urutkan berdasarkan jumlah view terbanyak dibuat pada blade sortbyDesc()
                      ->get();
                      // dd($mostviews);
      /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut   */
      $tampilKategori1 = DB::table('categories')
                      ->select('nama_kategori', 'id', 'slug_kategori')
                      ->where('id', '=', 1)
                      ->get();
      $hitungKategori1 = DB::table('categorie_user')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('categories.slug_kategori')
                      ->where('categorie_user.categorie_id', '=', 1)
                      ->get();
      $tampilKategori2 = DB::table('categories')
                      ->select('nama_kategori', 'id', 'slug_kategori')
                      ->where('id', '=', 2)
                      ->get();
      $hitungKategori2 = DB::table('categorie_user')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('categories.slug_kategori')
                      ->where('categorie_user.categorie_id', '=', 2)
                      ->get();
      $tampilKategori3 = DB::table('categories')
                      ->select('nama_kategori', 'id', 'slug_kategori')
                      ->where('id', '=', 3)
                      ->get();
      $hitungKategori3 = DB::table('categorie_user')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('categories.slug_kategori')
                      ->where('categorie_user.categorie_id', '=', 3)
                      ->get();
      $tampilKategori4 = DB::table('categories')
                      ->select('nama_kategori', 'id', 'slug_kategori')
                      ->where('id', '=', 4)
                      ->get();
      $hitungKategori4 = DB::table('categorie_user')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('categories.slug_kategori')
                      ->where('categorie_user.categorie_id', '=', 4)
                      ->get();
      $tampilKategori5 = DB::table('categories')
                      ->select('nama_kategori', 'id', 'slug_kategori')
                      ->where('id', '=', 5)
                      ->get();
      $hitungKategori5 = DB::table('categorie_user')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('categories.slug_kategori')
                      ->where('categorie_user.categorie_id', '=', 5)
                      ->get();
      $tampilKategori6 = DB::table('categories')
                      ->select('nama_kategori', 'id', 'slug_kategori')
                      ->where('id', '=', 6)
                      ->get();
      $hitungKategori6 = DB::table('categorie_user')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('categories.slug_kategori')
                      ->where('categorie_user.categorie_id', '=', 6)
                      ->get();
      $tampilKategori7 = DB::table('categories')
                      ->select('nama_kategori', 'id', 'slug_kategori')
                      ->where('id', '=', 7)
                      ->get();
      $hitungKategori7 = DB::table('categorie_user')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('categories.slug_kategori')
                      ->where('categorie_user.categorie_id', '=', 7)
                      ->get();
      $tampilKategori8 = DB::table('categories')
                      ->select('nama_kategori', 'id', 'slug_kategori')
                      ->where('id', '=', 8)
                      ->get();
      $hitungKategori8 = DB::table('categorie_user')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('categories.slug_kategori')
                      ->where('categorie_user.categorie_id', '=', 8)
                      ->get();
      /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut    */

      $categories1 = DB::table('categories')
      ->where('id', '=', 1)
      ->get();
      $categories2 = DB::table('categories')
      ->where('id', '=', 2)
      ->get();
      $categories3 = DB::table('categories')
      ->where('id', '=', 3)
      ->get();
      $categories4 = DB::table('categories')
      ->where('id', '=', 4)
      ->get();
      $categories5 = DB::table('categories')
      ->where('id', '=', 5)
      ->get();
      $categories6 = DB::table('categories')
      ->where('id', '=', 6)
      ->get();
      $categories7 = DB::table('categories')
      ->where('id', '=', 7)
      ->get();
      $categories8 = DB::table('categories')
      ->where('id', '=', 8)
      ->get();

      $template = Template::all();
      $categories = Categorie::all();

      foreach($template as $key) 
       // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      // TAMPILKAN SEMUA KATEGORI YG ADA

      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.template1ISI', 
        compact(
          'categoriesusers',
          'trendingnews',
          'featurednews',
          'mostviews',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
        'template', 'categories',
        'categories1', 'categories2', 'categories3', 'categories4',
        'categories5', 'categories6', 'categories7', 'categories8',
         ));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.template2', 
        compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
        'template', 'categories',
        'categories1', 'categories2', 'categories3', 'categories4',
        'categories5', 'categories6', 'categories7', 'categories8',
         ));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.template3', 
        compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
        'template', 'categories',
        'categories1', 'categories2', 'categories3', 'categories4',
        'categories5', 'categories6', 'categories7', 'categories8',
         ));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.template4', 
        compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
        'template', 'categories',
        'categories1', 'categories2', 'categories3', 'categories4',
        'categories5', 'categories6', 'categories7', 'categories8',
         ));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.template5', 
        compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
        'template', 'categories',
        'categories1', 'categories2', 'categories3', 'categories4',
        'categories5', 'categories6', 'categories7', 'categories8',
         ));
      }
  
           //tampilwebsite.template1.templateCOBA DB::table('templates')->where('template', '=', 'Pertama')->get();

    }

    public function showsluk(Request $request, $sluk) // KLIK DETIL BERITA INA, MENDAPATKAN ROUTE BERNAMA "SLUK"
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.view',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'users.avatar',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_user.sluk', '=', $sluk)
                        ->get();
      // START MEMASUKKAN DATA KUNJUNGAN KE VISITOR
          // Jenis Browser
          $browser = $_SERVER['HTTP_USER_AGENT'];
          $chrome = '/Chrome/';
          $firefox = '/Firefox/';
          $ie = '/IE/';
          if (preg_match($chrome, $browser))
              $data = "Chrome/Opera";
          if (preg_match($firefox, $browser))
              $data = "Firefox";
          if (preg_match($ie, $browser))
              $data = "IE";
          // untuk mengambil informasi dari pengunjung
          $ipaddress = $_SERVER['REMOTE_ADDR']."";
          $browser = $data;
          $tanggal = date('Y-m-d');
          $kunjungan = 1;
          // Daftarkan Kedalam Session Lalu Simpan Ke Database
          if (!isset($_SESSION['counterdb'])){
                $_SESSION['counterdb']=$ipaddress;

  $ambiliddarisluk = DB::table('categorie_user')->select('id')->where('sluk', $sluk)->first();
 

// dd($ambiliddarisluk->id);

           //   Visitor::where(['user_id' => Auth::id(), 'survey_id' => $survey_id])->delete();
              $tambah = new Visitor;
              $tambah->categorieuser_id = $ambiliddarisluk->id;
              $tambah->tanggal = $tanggal;
              $tambah->ip_address = $ipaddress;
              $tambah->counter = $kunjungan;
              $tambah->browser = $browser;    
              $tambah->save();    
            } 


         // Hitung Jumlah Visitor
          $kemarin  = date("Y-m-d",mktime(0,0,0,date('m'),date('d')-1,date('Y')));
        ////////  echo "KEMAREN TANGGAL". $kemarin ;
      //    $hari_ini  = mysqli_fetch_array(mysqli_query
      //('SELECT sum(counter) AS hari_ini FROM counterdb WHERE tanggal="'.date("Y-m-d").'"'));
           $hariini = DB::table('visitors')
                    ->select('counter')
                    ->WHERE('tanggal', '=', date('Y-m-d').'"')
                    ->sum('counter');
         /////  echo "HARI INI ". $hariini ;
                    //    $kemarin = mysqli_fetch_array(mysqli_query
                    //('SELECT sum(counter) AS kemarin FROM counterdb WHERE tanggal="'.$kemarin.'"'));
          $kapatang = DB::table('visitors')
                    ->select('counter')
                    ->WHERE('tanggal', '=' .$kemarin.'"')
                    ->sum('counter');    
        ////////   echo "KEMARIN ". $kapatang ;

           //   ->join('users', 'users.id', '=', 'categorie_user.user_id')

                               

      session_start();
 
      if (!isset($_SESSION['count']))
      {
        $_SESSION['count'] = 1;
      }
      else
      {
        ++$_SESSION['count'];
      }
       
     //////// echo "Anda Telah Berkunjung ke Halaman ini Sebanyak". $_SESSION['count'];
     
      $hitung = DB::table('visitors')
      ->join('categorie_user', 'categorie_user.id', '=', 'visitors.categorieuser_id')
      ->select('categorie_user.id', 'visitors.id', 'visitors.categorieuser_id', 'visitors.counter' )
      ->where('categorie_user.sluk', '=', $sluk) //untuk mendapatkan id berita dari sluk sehingga bisa terbaca di count (categorieuser.id) pada visitor
      ->count('visitors.categorieuser_id') ;

     /////// echo "KUNJUNGAN ARTIKEL TERKAIT". "<b> :: ". $hitung ."</b> ::";
 //    $sql = mysqli_fetch_array(mysqli_query('SELECT sum(counter) as total FROM counterdb'));

      // session_destroy();
      DB::table('categorie_user')
      ->where('categorie_user.sluk', '=', $sluk)
      ->update(['categorie_user.view' => $hitung]);
      // END MEMASUKKAN DATA KUNJUNGAN KE VISITOR
   
           $hitung = DB::table('visitors')
           ->join('categorie_user', 'categorie_user.id', '=', 'visitors.categorieuser_id')
           ->select('categorie_user.id', 'visitors.id', 'visitors.categorieuser_id', 'visitors.counter' )
           ->where('categorie_user.sluk', '=', $sluk) //untuk mendapatkan id berita dari sluk sehingga bisa terbaca di count (categorieuser.id) pada visitor
           ->count('visitors.categorieuser_id') ;

       //////    echo "KUNJUNGAN ARTIKEL TERKAIT". "<b> :: ". $hitung ."</b> ::";
      //    $sql = mysqli_fetch_array(mysqli_query('SELECT sum(counter) as total FROM counterdb'));


      $template = Template::all();
      foreach($template as $key) 
       // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 

        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut   */
        $tampilKategori1 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 1)
                    ->get();
        $hitungKategori1 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 1)
                    ->get();
        $tampilKategori2 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 2)
                    ->get();
        $hitungKategori2 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 2)
                    ->get();
        $tampilKategori3 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 3)
                    ->get();
        $hitungKategori3 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 3)
                    ->get();
        $tampilKategori4 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 4)
                    ->get();
        $hitungKategori4 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 4)
                    ->get();
        $tampilKategori5 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 5)
                    ->get();
        $hitungKategori5 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 5)
                    ->get();
        $tampilKategori6 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 6)
                    ->get();
        $hitungKategori6 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 6)
                    ->get();
        $tampilKategori7 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 7)
                    ->get();
        $hitungKategori7 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 7)
                    ->get();
        $tampilKategori8 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 8)
                    ->get();
        $hitungKategori8 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 8)
                    ->get();
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut    */

      if($key->template === 'Pertama')
      {
        return view('tampilwebsite.template1.detilBerita', compact('categoriesusers',
        'tampilKategori1', 
        'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
      ));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilBerita', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilBerita', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilBerita', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilBerita', compact('categoriesusers'));
      }

    }

    // public function showslug($slug) // KLIK DETIL BERITA ENG, MENDAPATKAN ROUTE BERNAMA "SLUG"
    // {
    //   $categoriesusers = DB::table('categorie_user')
    //                     ->join('users', 'users.id', '=', 'categorie_user.user_id')
    //                     ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
    //                     ->select('categorie_user.id',
    //                              'categorie_user.categorie_id',
    //                              'categorie_user.user_id',
    //                              'categorie_user.judul_berita_ina',
    //                              'categorie_user.sluk',
    //                              'categorie_user.judul_berita_eng',
    //                              'categorie_user.slug',
    //                              'categorie_user.headline',
    //                              'categorie_user.aktif',
    //                              'categorie_user.isi_berita_ina',
    //                              'categorie_user.isi_berita_eng',
    //                              'categorie_user.tanggal',
    //                              'categorie_user.jam',
    //                              'categorie_user.tag',
    //                              'categorie_user.video',
    //                              'categorie_user.gambar_berita',
    //                              'categorie_user.created_at',
    //                              'categorie_user.updated_at',
    //                              'users.name',
    //                              'users.email',
    //                              'categories.nama_kategori',
    //                              'categories.slug_kategori'
    //                              )
    //                     ->latest('categorie_user.id')
    //                     ->where('categorie_user.slug', '=', $slug)
    //                     ->get();
    //   //Membaca pengelompokan kategori pada detil berita
    //   $categories1 = DB::table('categories')
    //   ->where('id', '=', 1)
    //   ->get();
    //   $categories2 = DB::table('categories')
    //   ->where('id', '=', 2)
    //   ->get();
    //   $categories3 = DB::table('categories')
    //   ->where('id', '=', 3)
    //   ->get();
    //   $categories4 = DB::table('categories')
    //   ->where('id', '=', 4)
    //   ->get();

    //   $template = Template::all();
    //   foreach($template as $key) 
    //    // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
    //   if($key->template==='Pertama')
    //   {
    //     return view('tampilwebsite.template1.detilBerita', compact('categoriesusers', 'categories1', 'categories2', 'categories3', 'categories4'));
    //   }
    //   elseif($key->template==='Kedua')
    //   {
    //     return view('tampilwebsite.template2.detilBerita', compact('categoriesusers', 'categories1', 'categories2', 'categories3', 'categories4'));
    //   }
    //   elseif($key->template==='Ketiga')
    //   {
    //     return view('tampilwebsite.template3.detilBerita', compact('categoriesusers', 'categories1', 'categories2', 'categories3', 'categories4'));
    //   }
    //   elseif($key->template==='Keempat')
    //   {
    //     return view('tampilwebsite.template4.detilBerita', compact('categoriesusers', 'categories1', 'categories2', 'categories3', 'categories4'));
    //   }
    //   elseif($key->template==='Kelima')
    //   {
    //     return view('tampilwebsite.template5.detilBerita', compact('categoriesusers', 'categories1', 'categories2', 'categories3', 'categories4'));
    //   }

    // }


    public function showKategori1() // KLIK DETIL PER KELOMPOK KATEGORI PADA HALAMAN DETILKATEGORI
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categorie_user.view',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_id', '=', 1)
                        ->simplePaginate(7);            // Membuat Pagination Halaman Detil Kategori
                      //  ->get(); 

        /*3. Untuk Tampilan Detil Kategori : mengambil objek id untuk Banner   */
        $detilKategori = DB::table('categorie_user')
                      ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                      ->select('categorie_user.categorie_id')
              //       ->where('categorie_user.categorie_id')
                      ->first();
        /*3. Untuk Tampilan Detil Kategori : mengambil objek id untuk Banner   */

        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut   */
        $tampilKategori1 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 1)
                    ->get();
        $hitungKategori1 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori', 'categorie_user.categorie_id')
                    ->where('categorie_user.categorie_id', '=', 1)
                    ->get();
        $tampilKategori2 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '==', 2)
                    ->get();
        $hitungKategori2 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori', 'categorie_user.categorie_id')
                    ->where('categorie_user.categorie_id', '=', 2)
                    ->get();
        $tampilKategori3 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 3)
                    ->get();
        $hitungKategori3 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 3)
                    ->get();
        $tampilKategori4 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 4)
                    ->get();
        $hitungKategori4 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 4)
                    ->get();
        $tampilKategori5 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 5)
                    ->get();
        $hitungKategori5 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 5)
                    ->get();
        $tampilKategori6 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 6)
                    ->get();
        $hitungKategori6 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 6)
                    ->get();
        $tampilKategori7 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 7)
                    ->get();
        $hitungKategori7 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 7)
                    ->get();
        $tampilKategori8 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 8)
                    ->get();
        $hitungKategori8 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 8)
                    ->get();
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut    */
      $template = Template::all();
      $categories1 = DB::table('categories')
      ->where('id', '=', 1)
      ->get();
      $categories2 = DB::table('categories')
      ->where('id', '=', 2)
      ->get();
      foreach($template as $key) 
        // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilKategori', compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',   
        'detilKategori', 
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8', 'categories1', 'categories2'

      ));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilKategori', compact('categoriesusers'));
      }
                              
    }
    public function showKategori2() // KLIK DETIL PER KELOMPOK KATEGORI PADA HALAMAN DETILKATEGORI
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categorie_user.view',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_id', '=', 2)
                        ->simplePaginate(7);            // Membuat Pagination Halaman Detil Kategori
                      //  ->get(); 
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut   */
        $tampilKategori1 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 1)
                    ->get();
        $hitungKategori1 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 1)
                    ->get();
        $tampilKategori2 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 2)
                    ->get();
        $hitungKategori2 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 2)
                    ->get();
        $tampilKategori3 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 3)
                    ->get();
        $hitungKategori3 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 3)
                    ->get();
        $tampilKategori4 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 4)
                    ->get();
        $hitungKategori4 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 4)
                    ->get();
        $tampilKategori5 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 5)
                    ->get();
        $hitungKategori5 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 5)
                    ->get();
        $tampilKategori6 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 6)
                    ->get();
        $hitungKategori6 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 6)
                    ->get();
        $tampilKategori7 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 7)
                    ->get();
        $hitungKategori7 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 7)
                    ->get();
        $tampilKategori8 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 8)
                    ->get();
        $hitungKategori8 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 8)
                    ->get();
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut    */
      $template = Template::all();
      foreach($template as $key) 
        // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilKategori', compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
      ));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilKategori', compact('categoriesusers'));
      }
    }
    public function showKategori3() // KLIK DETIL PER KELOMPOK KATEGORI PADA HALAMAN DETILKATEGORI
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categorie_user.view',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_id', '=', 3)
                        ->simplePaginate(7);            // Membuat Pagination Halaman Detil Kategori
                      //  ->get(); 
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut   */
        $tampilKategori1 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 1)
                    ->get();
        $hitungKategori1 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 1)
                    ->get();
        $tampilKategori2 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 2)
                    ->get();
        $hitungKategori2 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 2)
                    ->get();
        $tampilKategori3 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 3)
                    ->get();
        $hitungKategori3 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 3)
                    ->get();
        $tampilKategori4 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 4)
                    ->get();
        $hitungKategori4 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 4)
                    ->get();
        $tampilKategori5 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 5)
                    ->get();
        $hitungKategori5 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 5)
                    ->get();
        $tampilKategori6 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 6)
                    ->get();
        $hitungKategori6 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 6)
                    ->get();
        $tampilKategori7 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 7)
                    ->get();
        $hitungKategori7 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 7)
                    ->get();
        $tampilKategori8 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 8)
                    ->get();
        $hitungKategori8 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 8)
                    ->get();
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut    */
      $template = Template::all();
      foreach($template as $key) 
        // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilKategori', compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
      ));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilKategori', compact('categoriesusers'));
      }
    }
    public function showKategori4() // KLIK DETIL PER KELOMPOK KATEGORI PADA HALAMAN DETILKATEGORI
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categorie_user.view',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_id', '=', 4)
                        ->simplePaginate(7);            // Membuat Pagination Halaman Detil Kategori
                      //  ->get(); 
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut   */
        $tampilKategori1 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 1)
                    ->get();
        $hitungKategori1 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 1)
                    ->get();
        $tampilKategori2 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 2)
                    ->get();
        $hitungKategori2 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 2)
                    ->get();
        $tampilKategori3 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 3)
                    ->get();
        $hitungKategori3 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 3)
                    ->get();
        $tampilKategori4 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 4)
                    ->get();
        $hitungKategori4 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 4)
                    ->get();
        $tampilKategori5 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 5)
                    ->get();
        $hitungKategori5 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 5)
                    ->get();
        $tampilKategori6 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 6)
                    ->get();
        $hitungKategori6 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 6)
                    ->get();
        $tampilKategori7 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 7)
                    ->get();
        $hitungKategori7 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 7)
                    ->get();
        $tampilKategori8 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 8)
                    ->get();
        $hitungKategori8 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 8)
                    ->get();
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut    */
      $template = Template::all();
      foreach($template as $key) 
        // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilKategori', compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
      ));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilKategori', compact('categoriesusers'));
      }
    }
    public function showKategori5() // KLIK DETIL PER KELOMPOK KATEGORI PADA HALAMAN DETILKATEGORI
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categorie_user.view',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_id', '=', 5)
                        ->simplePaginate(7);            // Membuat Pagination Halaman Detil Kategori
                      //  ->get(); 
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut   */
        $tampilKategori1 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 1)
                    ->get();
        $hitungKategori1 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 1)
                    ->get();
        $tampilKategori2 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 2)
                    ->get();
        $hitungKategori2 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 2)
                    ->get();
        $tampilKategori3 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 3)
                    ->get();
        $hitungKategori3 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 3)
                    ->get();
        $tampilKategori4 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 4)
                    ->get();
        $hitungKategori4 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 4)
                    ->get();
        $tampilKategori5 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 5)
                    ->get();
        $hitungKategori5 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 5)
                    ->get();
        $tampilKategori6 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 6)
                    ->get();
        $hitungKategori6 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 6)
                    ->get();
        $tampilKategori7 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 7)
                    ->get();
        $hitungKategori7 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 7)
                    ->get();
        $tampilKategori8 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 8)
                    ->get();
        $hitungKategori8 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 8)
                    ->get();
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut    */
      $template = Template::all();
      foreach($template as $key) 
        // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilKategori', compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
      ));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilKategori', compact('categoriesusers'));
      }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function showKategori6() // KLIK DETIL PER KELOMPOK KATEGORI PADA HALAMAN DETILKATEGORI
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categorie_user.view',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_id', '=', 6)
                        ->simplePaginate(7);            // Membuat Pagination Halaman Detil Kategori
                      //  ->get(); 
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut   */
        $tampilKategori1 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 1)
                    ->get();
        $hitungKategori1 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 1)
                    ->get();
        $tampilKategori2 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 2)
                    ->get();
        $hitungKategori2 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 2)
                    ->get();
        $tampilKategori3 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 3)
                    ->get();
        $hitungKategori3 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 3)
                    ->get();
        $tampilKategori4 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 4)
                    ->get();
        $hitungKategori4 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 4)
                    ->get();
        $tampilKategori5 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 5)
                    ->get();
        $hitungKategori5 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 5)
                    ->get();
        $tampilKategori6 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 6)
                    ->get();
        $hitungKategori6 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 6)
                    ->get();
        $tampilKategori7 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 7)
                    ->get();
        $hitungKategori7 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 7)
                    ->get();
        $tampilKategori8 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 8)
                    ->get();
        $hitungKategori8 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 8)
                    ->get();
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut    */
      $template = Template::all();
      foreach($template as $key) 
        // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilKategori', compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
      ));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilKategori', compact('categoriesusers'));
      }
    }
    public function showKategori7() // KLIK DETIL PER KELOMPOK KATEGORI PADA HALAMAN DETILKATEGORI
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categorie_user.view',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_id', '=', 7)
                        ->simplePaginate(7);            // Membuat Pagination Halaman Detil Kategori
                      //  ->get(); 
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut   */
        $tampilKategori1 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 1)
                    ->get();
        $hitungKategori1 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 1)
                    ->get();
        $tampilKategori2 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 2)
                    ->get();
        $hitungKategori2 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 2)
                    ->get();
        $tampilKategori3 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 3)
                    ->get();
        $hitungKategori3 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 3)
                    ->get();
        $tampilKategori4 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 4)
                    ->get();
        $hitungKategori4 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 4)
                    ->get();
        $tampilKategori5 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 5)
                    ->get();
        $hitungKategori5 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 5)
                    ->get();
        $tampilKategori6 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 6)
                    ->get();
        $hitungKategori6 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 6)
                    ->get();
        $tampilKategori7 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 7)
                    ->get();
        $hitungKategori7 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 7)
                    ->get();
        $tampilKategori8 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 8)
                    ->get();
        $hitungKategori8 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 8)
                    ->get();
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut    */
      $template = Template::all();
      foreach($template as $key) 
        // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilKategori', compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
      ));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilKategori', compact('categoriesusers'));
      }
    }
    public function showKategori8() // KLIK DETIL PER KELOMPOK KATEGORI PADA HALAMAN DETILKATEGORI
    {
      $categoriesusers = DB::table('categorie_user')
                        ->join('users', 'users.id', '=', 'categorie_user.user_id')
                        ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                        ->select('categorie_user.id',
                                 'categorie_user.categorie_id',
                                 'categorie_user.user_id',
                                 'categorie_user.judul_berita_ina',
                                 'categorie_user.sluk',
                                 'categorie_user.judul_berita_eng',
                                 'categorie_user.slug',
                                 'categorie_user.headline',
                                 'categorie_user.aktif',
                                 'categorie_user.isi_berita_ina',
                                 'categorie_user.isi_berita_eng',
                                 'categorie_user.tanggal',
                                 'categorie_user.jam',
                                 'categorie_user.tag',
                                 'categorie_user.video',
                                 'categorie_user.gambar_berita',
                                 'categorie_user.created_at',
                                 'categorie_user.updated_at',
                                 'users.name',
                                 'users.email',
                                 'categorie_user.view',
                                 'categories.nama_kategori',
                                 'categories.slug_kategori'
                                 )
                        ->latest('categorie_user.id')
                        ->where('categorie_id', '=', 8)
                        ->simplePaginate(7);            // Membuat Pagination Halaman Detil Kategori
                      //  ->get(); 
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut   */
        $tampilKategori1 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 1)
                    ->get();
        $hitungKategori1 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 1)
                    ->get();
        $tampilKategori2 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 2)
                    ->get();
        $hitungKategori2 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 2)
                    ->get();
        $tampilKategori3 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 3)
                    ->get();
        $hitungKategori3 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 3)
                    ->get();
        $tampilKategori4 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 4)
                    ->get();
        $hitungKategori4 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 4)
                    ->get();
        $tampilKategori5 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 5)
                    ->get();
        $hitungKategori5 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 5)
                    ->get();
        $tampilKategori6 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 6)
                    ->get();
        $hitungKategori6 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 6)
                    ->get();
        $tampilKategori7 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 7)
                    ->get();
        $hitungKategori7 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 7)
                    ->get();
        $tampilKategori8 = DB::table('categories')
                    ->select('nama_kategori', 'id', 'slug_kategori')
                    ->where('id', '=', 8)
                    ->get();
        $hitungKategori8 = DB::table('categorie_user')
                    ->join('categories', 'categories.id', '=', 'categorie_user.categorie_id')
                    ->select('categories.slug_kategori')
                    ->where('categorie_user.categorie_id', '=', 8)
                    ->get();
        /*2. Untuk Tampilan Categories Sebelah Kanan : meng-Array semua kategori dan menghitung jumlah berita dalam kategori tersebut    */
      $template = Template::all();
      foreach($template as $key) 
        // echo $key->template; UNTUK MENGISI TROW PADA VIEW NYA 
      if($key->template==='Pertama')
      {
        return view('tampilwebsite.template1.detilKategori', compact('categoriesusers',
        'tampilKategori1', 'tampilKategori2', 'tampilKategori3',
        'tampilKategori4', 'tampilKategori5', 'tampilKategori6',
        'tampilKategori7', 'tampilKategori8',
        'hitungKategori1', 'hitungKategori2', 'hitungKategori3',
        'hitungKategori4', 'hitungKategori5', 'hitungKategori6',
        'hitungKategori7', 'hitungKategori8',
      ));
      }
      elseif($key->template==='Kedua')
      {
        return view('tampilwebsite.template2.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Ketiga')
      {
        return view('tampilwebsite.template3.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Keempat')
      {
        return view('tampilwebsite.template4.detilKategori', compact('categoriesusers'));
      }
      elseif($key->template==='Kelima')
      {
        return view('tampilwebsite.template5.detilKategori', compact('categoriesusers'));
      }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
