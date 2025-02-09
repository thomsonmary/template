<?php

namespace Database\Seeders;

use App\Models\CategorieUser;
use Illuminate\Database\Seeder;

class CategoriesUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategorieUser::create([
            'categorie_id' => '7',
            'user_id' => '1',
            'judul_berita_ina' => 'Alasan RAM Iphone Lebih Kecil dari Android',
            'sluk' => 'alasan-ram-iphone-lebih-kecil-dari-android',
            'judul_berita_eng' => 'Reasons Iphone RAM is Smaller than Android ',
            'slug' => 'reasons-iphone-ram-is-smaller-than-android',
            'trending' => 'Y',
            'headline' => 'Y',
            'aktif' => 'Y',
            'isi_berita_ina' => '<p>Tidak seperti beragam vendor smartphone Android, Apple jarang mengedepankan kapasitas RAM dari iPhone. Kapasitas RAM iPhone biasanya memang lebih kecil dibanding perangkat Android di generasi yang sama. Trio iPhone 12 misalnya, hanya memiliki RAM 4 GB hingga 6 GB. Sementara, ponsel Android anyar, terutama kelas menengah ke atas dan flagship bisa memiliki RAM dengan kapasitas 8 GB hingga 16 GB. Meski memiliki RAM lebih kecil, performa iPhone bisa dibilang sebanding dengan smartphone Android flagship dengan kapasitas memori hingga dua kali lebih banyak, kalau bukan lebih kencang. Apa rahasianya? Salah satu kuncinya adalah manajemen memori perangkat iOS yang relatif lebih baik dibandingkan Android. Kedua sistem operasi itu memang dibangun dengan cara berbeda. Alasan Android perlu RAM besar Smartphone Android menggunakan virtual machine berbasis bahasa pemrograman Java agar bisa berjalan di berbagai perangkat dengan konfigurasi hardware berbeda. Programer aplikasi Android pun cukup menulis aplikasi sekali saja dalam Java, kemudian virtual machine akan menjalankannya di sistem manapun, tanpa harus ditulis dan dikompilasi ulang. Dapatkan informasi, inspirasi dan insight di email kamu. Daftarkan email Masalahnya, karena harus menangani kode Java original aplikasi, kode hasil translasi, berikut proses emulasinya sendiri, virtual machine ini kompleks dan membutuhkan memori serta sumberdaya besar. Selain itu, di Java, memori yang sudah tidak terpakai lagi oleh aplikasi harus didaur ulang lewat proses yang dikenal sebagai Garbage Collection, supaya bisa dipakai oleh aplikasi lain. Supaya bisa berjalan efektif, Garbage Collection membutuhkan RAM dalam jumlah besar. Kalau RAM yang tersedia tidak mencukupi, maka perangkat akan terlalu sering mendaur ulang memori sehingga menurunkan kinerja.</p>

        <p>Artikel ini telah tayang di Kompas.com dengan judul &quot;Alasan RAM iPhone Lebih Kecil Dibanding Android&quot;, Klik untuk baca: https://tekno.kompas.com/read/2021/07/10/10110097/alasan-ram-iphone-lebih-kecil-dibanding-android.<br />
        Penulis : Bill Clinten<br />
        Editor : Reza Wahyudi</p>
        
        <p>Download aplikasi Kompas.com untuk akses berita lebih mudah dan cepat:<br />
        Android: https://bit.ly/3g85pkA<br />
        iOS: https://apple.co/3hXWJ0L</p>',


            'isi_berita_eng' => '<p>Aplikasi ini dibuat menggunakan bahasa pemrograman php dan database yang digunakan aplikasi ini yaitu database mysql. Aplikasi ini dikembangkan dan dibagikan gratis oleh <a href="https://github.com/adhiariyadi" rel="noreferrer noopener" target="_blank"><span style="color: #000000;"><span style="color: rgb(51, 51, 51);">adhiariyadi</span></span> </a>dan tentunya gunakanlah sourcecode aplikasi ini dengan baik dan bijak.</p>

        <p>Aplikasi Blog Berita Berbasis Web adalah sebuah sistem informasi aplikasi yang dibuat dan digunakan untuk memudahkan dalam menampilkan berita-berita terkini dan terupdate. Aplikasi ini dilengakapi dengan fitur login admin, data post, data categoriy, data tags, data users dan lain sebagainya.</p>
        
        <p>Source code Aplikasi ini sudah dilakukan testing dan hasilnya dapat berjalan dengan baik meskipun memang ada beberapa bug yang harus diperbaiki lagi dan disempurnakan lagi dan juga bisa ditambahkan lagi fitur baru yang memang belum ada dalam aplikasi ini agar aplikasi ini menjadi semakin baik.</p>
        
        <p>Source Code aplikasi ini bisa kamu jadikan sebagai referensi untuk menyusun <span style="color: #333333;">tugas</span> sekolah, tugas akhir, skripsi yang sedang kamu kerjakan atau bisa juga bisa sebagai bahan belajar tentang bagaiamana cara membuat dan cara kerja aplikasi ini dan <span style="color: #000000;">berikut</span> beberapa screenshot aplikasi ini ketika dijalankan.</p>',
            'tanggal' => 'Saturday, 10 July, 2021',
            'jam' => '14:50:12',
            'tag' => 'Hardware',
            'gambar_berita' => 'https://i.ibb.co/8DfGMvZ/60a71838d2e8d.jpg',
            'video' => 'https://www.youtube.com/embed/khkwJF4o0dQ',
            'view' => '4'

        ]);
        CategorieUser::create([
            'categorie_id' => '2',
            'user_id' => '1',
            'judul_berita_ina' => 'Aplikasi Blok Berita Berbasis Framework Laravel',
            'sluk' => 'aplikasi-blok-berita-berbasis-framework-laravel',
            'judul_berita_eng' => 'Laravel Framework Based News App',
            'slug' => 'laravel-framework-based-news-app',
            'trending' => 'Y',
            'headline' => 'Y',
            'aktif' => 'Y',
            'isi_berita_ina' => '<p>Aplikasi ini dibuat menggunakan bahasa pemrograman php dan database yang digunakan aplikasi ini yaitu database mysql. Aplikasi ini dikembangkan dan dibagikan gratis oleh <a href="https://github.com/adhiariyadi" rel="noreferrer noopener" target="_blank"><span style="color: #000000;"><span style="color: rgb(51, 51, 51);">adhiariyadi</span></span> </a>dan tentunya gunakanlah sourcecode aplikasi ini dengan baik dan bijak.</p>

        <p>Aplikasi Blog Berita Berbasis Web adalah sebuah sistem informasi aplikasi yang dibuat dan digunakan untuk memudahkan dalam menampilkan berita-berita terkini dan terupdate. Aplikasi ini dilengakapi dengan fitur login admin, data post, data categoriy, data tags, data users dan lain sebagainya.</p>
        
        <p>Source code Aplikasi ini sudah dilakukan testing dan hasilnya dapat berjalan dengan baik meskipun memang ada beberapa bug yang harus diperbaiki lagi dan disempurnakan lagi dan juga bisa ditambahkan lagi fitur baru yang memang belum ada dalam aplikasi ini agar aplikasi ini menjadi semakin baik.</p>
        
        <p>Source Code aplikasi ini bisa kamu jadikan sebagai referensi untuk menyusun <span style="color: #333333;">tugas</span> sekolah, tugas akhir, skripsi yang sedang kamu kerjakan atau bisa juga bisa sebagai bahan belajar tentang bagaiamana cara membuat dan cara kerja aplikasi ini dan <span style="color: #000000;">berikut</span> beberapa screenshot aplikasi ini ketika dijalankan.</p>',
            'isi_berita_eng' => '<p><span class="VIiyi" jsaction="mouseup:BR6jm" jsname="jqKxS" lang="en"><span class="JLqJ4b" data-language-for-alternatives="en" data-language-to-translate-into="id" data-phrase-index="0" jsaction="agoMJf:PFBcW;usxOmf:aWLT7;jhKsnd:P7O7bd,F8DmGf;Q4AGo:Gm7gYd,qAKMYb;uFUCPb:pvnm0e,pfE8Hb,PFBcW;f56efd:dJXsye;EnoYf:KNzws,ZJsZZ,JgVSJc;zdMJQc:cCQNKb,ZJsZZ,zchEXc;Ytrrj:JJDvdc;tNR8yc:GeFvjb;oFN6Ye:hij5Wb" jscontroller="Zl5N8" jsdata="uqLsIf;_;$10" jsmodel="SsMkhd" jsname="txFAF"><span jsaction="click:qtZ4nf,GFf3ac,tMZCfe; contextmenu:Nqw7Te,QP7LD; mouseout:Nqw7Te; mouseover:qtZ4nf,c2aHje" jsname="W297wb">This application is made using the PHP programming language and the database used by this application is the MySQL database. This application was developed and distributed for free by adhiariyadi and of course use the source code of this application well and wisely. Web-Based News Blog Application is an application information system that is created and used to make it easier to display the latest and updated news. This application is equipped with admin login features, post data, categoriy data, data tags, users data and so on. The source code of this application has been tested and the results can run well although there are indeed some bugs that must be fixed and refined again and new features can also be added that are not yet in this application so that this application becomes better You can use the source code of this application as a reference for compiling school assignments, final assignments, the thesis that you are working on or it can also be used as learning material about how to make and how this application works and here are some screenshots of this application when it is run.</span></span></span></p>',
            'tanggal' => 'Saturday, 17 July, 2021',
            'jam' => '15:50:12',
            'tag' => 'Framework',
            'gambar_berita' => 'https://i.ibb.co/KXYKppP/5ef326192cfa3.jpg',
            'video' => 'https://www.youtube.com/embed/khkwJF4o0dQ',
            'view' => '10',
        ]);
        CategorieUser::create([
            'categorie_id' => '4',
            'user_id' => '3',
            'judul_berita_ina' => 'Kelebihan Menggunakan Laravel Web Development',
            'sluk' => 'kelebihan-menggunakan-laravel-web-development',
            'judul_berita_eng' => 'Advantages of Using Laravel Web Development',
            'slug' => 'advantages-of-using-laravel-web-development',
            'trending' => 'Y',
            'headline' => 'Y',
            'aktif' => 'Y',
            'isi_berita_ina' => '<main class="wp-content clear main-read the-640" style="">
        <p style="text-align: justify">Laravel adalah framework aplikasi web kontemporer, open source dan digunakan secara luas untuk perancangan aplikasi web yang cepat dan mudah.<em>Laravel </em>dibuat oleh Taylor Otwell pada tahun 2011. <em>Framework </em>ini dibuat untuk pengembangan aplikasi website dimana mengikuti arsitektur MVC (model view controller).</p>
        
        <p style="text-align: justify">MVC itu sendiri adalah sebuah pendekatan perangkat lunak yang memisahkan aplikasi logika dari presentasi. MVC memisahkan aplikasi berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.</p>
        
        <ol style="text-align: justify">
          <li>Model, Model mewakili struktur data. Biasanya model berisi fungsi-fungsi yang membantu seseorang dalam pengelolaan basis data seperti memasukkan data ke basis data, pembaruan data dan lain-lain.</li>
          <li>View, View adalah bagian yang mengatur tampilan ke pengguna. Bisa dikatakan berupa halaman web.</li>
          <li>Controller, Controller merupakan bagian yang menjembatani model dan view.</li>
        </ol>
        
        <p style="text-align: justify"><a href="https://socs.binus.ac.id/files/2018/12/ham-1-2.jpg"><img alt="" class="aligncenter size-full wp-image-18328" height="332" loading="lazy" src="https://socs.binus.ac.id/files/2018/12/ham-1-2.jpg" width="513" /></a></p>
        
        <p style="text-align: justify"><em>Laravel </em>mempunyai sintaks yang ekspresif, jelas dan menghemat waktu. <em>Framework </em>ini dikembangkan dengan tujuan bahwa pengembangan web harus dapat dinikmati dan penuh kreatifitas. Pengembangan web dengan <em>Laravel </em>mempermudah proses pengembangan web dengan mempermudah tugas-tugas yang umum seperti <em>routing, authentication, sessions, </em>dan <em>caching.</em></p>
        
        <p style="text-align: justify">Pengembangan Web Menggunakan <em>framework Laravel </em>mempunyai kelebihan sebagai berikut:</p>
        
        <ul style="text-align: justify">
          <li>Waktu yang dibutuhkan untuk mengembangan projek website dengan menggunakan <em>framework </em>ini menjadi lebih cepat.</li>
          <li>Dapat meningkatkan pengunjung webiste karena teknologi <em>framework </em>ini dapat digunakan di segala <em>browser </em>dan berbagai perangkat dengan baik.</li>
          <li>Laravel dilengkapi dengan utilitas pemrograman untuk membantu proses pengembangan aplikasi web dan juga moderasi dengan cara terbaik. Ini dikemas dengan Modular Packaging System (MPS) dengan pengaturan ketergantungan yang lengkap.</li>
        </ul>
        
        <p style="text-align: justify">Beberapa fitur yang terdapat di Laravel :</p>
        
        <ul style="text-align: justify">
          <li>Bundles, yaitu sebuah fitur dengan sistem pengemasan modular dan tersedia beragam di aplikasi.</li>
          <li>Eloquent ORM, merupakan penerapan PHP lanjutan menyediakan metode internal dari pola &ldquo;active record&rdquo; yang menagatasi masalah pada hubungan objek database.</li>
          <li>Application Logic, merupakan bagian dari aplikasi, menggunakan controller atau bagian Route.</li>
          <li>Reverse Routing, mendefinisikan relasi atau hubungan antara Link dan Route.</li>
          <li>Restful controllers, memisahkan logika dalam melayani HTTP GET and POST.</li>
          <li>Class Auto Loading, menyediakan loading otomatis untuk class PHP.</li>
          <li>View Composer, adalah kode unit logikal yang dapat dieksekusi ketika view sedang loading.</li>
          <li>IoC Container, memungkin obyek baru dihasilkan dengan pembalikan controller.</li>
          <li>Migration, menyediakan sistem kontrol untuk skema database.</li>
          <li>Unit Testing, banyak tes untuk mendeteksi dan mencegah regresi.</li>
          <li>Automatic Pagination, menyederhanakan tugas dari penerapan halaman.</li>
        </ul>
        
        <p style="text-align: justify">Untuk menggunakan Laravel itu sendiri pengguna dibutuhkan untuk melakukan penginstalan sebuah <em>composer.Composer</em> adalah alat manajemen <em>dependency</em> pada PHP seperti npm(Node.js) dan <em>Bundler(Ruby).Composer</em> memungkinkan untuk membuat library pada <em>project</em> anda dan <em>composer</em> sendiri akan meninstall atau mengupdate secara otomatis tanpa anda harus menginstall manual.</p>
        
        <p style="text-align: justify">Kelebihan dalam menggunakan <em>composer</em>:</p>
        
        <ul style="text-align: justify">
          <li>Membuat proses <em>coding</em> menggunakan PHP lebih terstruktur karena mengikuti konsep MVC.</li>
          <li>Tidak diperlukan meng-include semua file PHP atau <em>class</em> PHP yang dibutuhkan,sudah ada <em>autoload</em> yang akan menangani fungsi tersebut.</li>
          <li><em>Package</em> yang dibutuhkan akan otomatis terpasang pada</li>
          <li>Dengan menggunakan <em>pakagist,</em> kita dapat menggunakan ribuan <em>package</em> yang suda termasuk di dalam</li>
        </ul>
        </main>',
            'isi_berita_eng' => '<p>Laravel is a contemporary web application framework, open source and widely used for fast and easy web application design. Laravel was created by Taylor Otwell in 2011. This framework was created for website application development which follows the MVC (model view controller) architecture.</p>

        <p>MVC itself is a software approach that separates application logic from presentation. MVC separates applications based on application components, such as: data manipulation, controllers, and user interfaces.</p>
        
        <p>&nbsp;&nbsp;&nbsp; Model, Model represents the data structure. Usually the model contains functions that help someone in database management such as entering data into the database, updating data and others.<br />
        &nbsp;&nbsp;&nbsp; View, View is the part that manages the view to the user. It can be said to be a web page.<br />
        &nbsp;&nbsp;&nbsp; Controller, Controller is the part that bridges the model and view.</p>
        
        <p>Laravel has an expressive, clear and time-saving syntax. This framework was developed with the aim that web development should be enjoyable and full of creativity. Web development with Laravel simplifies the web development process by simplifying common tasks such as routing, authentication, sessions, and caching.</p>
        
        <p>Web Development Using the Laravel framework has the following advantages:</p>
        
        <p>&nbsp;&nbsp;&nbsp; The time needed to develop website projects using this framework is faster.<br />
        &nbsp;&nbsp;&nbsp; It can increase website visitors because this framework technology can be used in all browsers and various devices properly.<br />
        &nbsp;&nbsp;&nbsp; Laravel comes with programming utilities to help the web application development process and also moderation in the best way. It is packaged with a Modular Packaging System (MPS) with complete dependency settings.</p>
        
        <p>Some of the features found in Laravel:</p>
        
        <p>&nbsp;&nbsp;&nbsp; Bundles, which is a feature with a modular packaging system and is available in various applications.<br />
        &nbsp;&nbsp;&nbsp; Eloquent ORM, is an advanced PHP implementation that provides internal methods of the &ldquo;active record&rdquo; pattern that resolve problems with database object relationships.<br />
        &nbsp;&nbsp;&nbsp; Application Logic, is part of the application, using the controller or the Route part.<br />
        &nbsp;&nbsp;&nbsp; Reverse Routing, defines the relationship or relationship between Link and Route.<br />
        &nbsp;&nbsp;&nbsp; Restful controllers, separate logic in serving HTTP GET and POST.<br />
        &nbsp;&nbsp;&nbsp; Class Auto Loading, provides automatic loading for PHP classes.<br />
        &nbsp;&nbsp;&nbsp; View Composer, is a logical unit code that can be executed while the view is loading.<br />
        &nbsp;&nbsp;&nbsp; IoC Container, allows new objects to be generated with controller inversion.<br />
        &nbsp;&nbsp;&nbsp; Migration, provides a control system for the database schema.<br />
        &nbsp;&nbsp;&nbsp; Unit Testing, many tests to detect and prevent regression.<br />
        &nbsp;&nbsp;&nbsp; Automatic Pagination, simplifies the task of page deployment.</p>
        
        <p>To use Laravel itself the user needs to install a composer.Composer is a dependency management tool in PHP like npm(Node.js) and Bundler(Ruby). Composer allows you to create libraries in your project and composer itself will install or update automatically. without you having to install manually.</p>
        
        <p>Pros of using composer:</p>
        
        <p>&nbsp;&nbsp;&nbsp; Make the coding process using PHP more structured because it follows the MVC concept.<br />
        &nbsp;&nbsp;&nbsp; It is not necessary to include all the PHP files or PHP classes needed, there is already an autoload that will handle this function.<br />
        &nbsp;&nbsp;&nbsp; The required packages will be automatically installed on the<br />
        &nbsp;&nbsp;&nbsp; By using Pakagist, we can use thousands of packages that are included in the package</p>',
            'tanggal' => 'Sunday, 18 July, 2021',
            'jam' => '16:50:12PM',
            'tag' => 'Framework',
            'gambar_berita' => 'https://i.ibb.co/Vqzjq8K/mvc-diagram.png',
            'video' => 'https://www.youtube.com/embed/khkwJF4o0dQ',
            'view' => '10'
        ]);
        CategorieUser::create([
            'categorie_id' => '5',
            'user_id' => '3',
            'judul_berita_ina' => 'Tahapan Pembuatan Laravel',
            'sluk' => 'tahapan-pembuatan-laravel',
            'judul_berita_eng' => 'HeidiSQL Editor SQL Scripting with the Latest Updates from Maria DB',
            'slug' => 'Translation results Laravel Development Stage',
            'trending' => 'Y',
            'headline' => 'Y',
            'aktif' => 'Y',
            'isi_berita_ina' => '<p style="text-align: justify">Untuk menggunakan Laravel itu sendiri pengguna dibutuhkan untuk melakukan penginstalan sebuah <em>composer.Composer</em> adalah alat manajemen <em>dependency</em> pada PHP seperti npm(Node.js) dan <em>Bundler(Ruby).Composer</em> memungkinkan untuk membuat library pada <em>project</em> anda dan <em>composer</em> sendiri akan meninstall atau mengupdate secara otomatis tanpa anda harus menginstall manual</p>

        <ol style="text-align: justify">
          <li><strong>Membuat&nbsp;<em>Controller</em></strong></li>
        </ol>
        
        <p style="text-align: justify">Fungsi dari <em>controller</em> adalah mengambil permintaan,memparsing permintaan, menginisialisasi,memanggil model dan kemudian mengambil responnya, dan mengirimkannya ke<em> View</em>. Berikut ini contoh pembuatan <em>Controller</em> :</p>
        
        <p style="text-align: justify"><a href="https://socs.binus.ac.id/files/2018/12/ham-2-1.jpg"><img alt="" class="aligncenter size-full wp-image-18329" height="24" loading="lazy" src="https://socs.binus.ac.id/files/2018/12/ham-2-1.jpg" width="259" /></a></p>
        
        <p style="text-align: justify">Tuliskan kode tersebut di dalam CMD, kemudian di dalam <em>file </em>Contoh1.php tuliskan kode berikut.</p>
        
        <p style="text-align: justify"><a href="https://socs.binus.ac.id/files/2018/12/ham-3-1.jpg"><img alt="" class="aligncenter size-full wp-image-18330" height="462" loading="lazy" src="https://socs.binus.ac.id/files/2018/12/ham-3-1.jpg" width="339" /></a></p>
        
        <p style="text-align: justify">Selanjutnya kita perlu mengubah route, pada routes.php</p>
        
        <p style="text-align: justify"><a href="https://socs.binus.ac.id/files/2018/12/ham-4-1.jpg"><img alt="" class="aligncenter size-full wp-image-18331" height="24" loading="lazy" src="https://socs.binus.ac.id/files/2018/12/ham-4-1.jpg" width="235" /></a></p>
        
        <p style="text-align: justify">Route ini akan digunakan untuk membantu pengguna memanggil halaman/<em>resource</em> tertentu dengan mudah.</p>
        
        <ol start="2" style="text-align: justify">
          <li><strong>Membuat <em>Layout</em> sederhana</strong></li>
        </ol>
        
        <p style="text-align: justify">Di dalam <em>folder </em>resources/views dengan nama blade_sample. Kemudian di dalam file tersebut buatlah sebuah <em>file </em>bernama layout.blade.php.</p>
        
        <p style="text-align: justify">Lalu di dalam <em>file </em>tersebut masukan kode berikut.</p>
        
        <p style="text-align: justify"><a href="https://socs.binus.ac.id/files/2018/12/ham-5-1.jpg"><img alt="" class="aligncenter size-full wp-image-18332" height="282" loading="lazy" src="https://socs.binus.ac.id/files/2018/12/ham-5-1.jpg" width="330" /></a></p>
        
        <p style="text-align: justify">Nantinya kode di atas akan menjadi wadah untuk kode lain yang menggunakan <em>layout </em>tersebut. Jadi pengguna hanya perlu menuliskan kode di atas sekali saja, sehingga pengguna tidak perlu menuliskan ulang <em>nav</em> dan <em>footer </em>di setiap <em>view</em> yang pengguna akan buat.</p>
        
        <ol start="3" style="text-align: justify">
          <li><strong>Menggunakan <em>Layout</em></strong></li>
        </ol>
        
        <p style="text-align: justify">Menggunakan <em>Layout</em> yang tadi telah kita buat di <em>view</em> baru, buatlah file baru bernama index.blade.php di dalam folder yang sama dengan <em>Layout </em>sederhana yang telah kita buat. Kemudian tuliskan kode berikut.</p>
        
        <p style="text-align: justify"><a href="https://socs.binus.ac.id/files/2018/12/ham-6-2.jpg"><img alt="" class="aligncenter size-full wp-image-18334" height="109" loading="lazy" src="https://socs.binus.ac.id/files/2018/12/ham-6-2.jpg" width="323" /></a></p>
        
        <p style="text-align: justify"><em>Extends</em> akan digunakan untuk memanggil <em>layout</em> sebelumnya yang telah dibuat. Sedangkan <em>section</em> menjadi <em>placeholder</em> untuk <em>content</em> yang akan diisi oleh pengguna. Hal ini mempermudah pengguna karena tidak perlu melakukan penulisan ulang.</p>
        
        <p style="text-align: justify">Contoh di atas hanya sebagian kecil dari <em>Laravel,</em> masih banyak fitur &ndash; fitur yang telah disediakan oleh <em>laravel</em>,yang bertujuan untuk membantu ataupun mempermudah pengguna dalam mengembangkan <em>project</em> yang akan dibuat. Demikian artikel yang ingin kami sampaikan, kami harap dapat bermanfaat.</p>',
            'isi_berita_eng' => '<p style="text-align: justify">Untuk menggunakan Laravel itu sendiri pengguna dibutuhkan untuk melakukan penginstalan sebuah <em>composer.Composer</em> adalah alat manajemen <em>dependency</em> pada PHP seperti npm(Node.js) dan <em>Bundler(Ruby).Composer</em> memungkinkan untuk membuat library pada <em>project</em> anda dan <em>composer</em> sendiri akan meninstall atau mengupdate secara otomatis tanpa anda harus menginstall manual</p>

        <ol style="text-align: justify">
          <li><strong>Membuat&nbsp;<em>Controller</em></strong></li>
        </ol>
        
        <p style="text-align: justify">Fungsi dari <em>controller</em> adalah mengambil permintaan,memparsing permintaan, menginisialisasi,memanggil model dan kemudian mengambil responnya, dan mengirimkannya ke<em> View</em>. Berikut ini contoh pembuatan <em>Controller</em> :</p>
        
        <p style="text-align: justify"><a href="https://socs.binus.ac.id/files/2018/12/ham-2-1.jpg"><img alt="" class="aligncenter size-full wp-image-18329" height="24" loading="lazy" src="https://socs.binus.ac.id/files/2018/12/ham-2-1.jpg" width="259" /></a></p>
        
        <p style="text-align: justify">Tuliskan kode tersebut di dalam CMD, kemudian di dalam <em>file </em>Contoh1.php tuliskan kode berikut.</p>
        
        <p style="text-align: justify"><a href="https://socs.binus.ac.id/files/2018/12/ham-3-1.jpg"><img alt="" class="aligncenter size-full wp-image-18330" height="462" loading="lazy" src="https://socs.binus.ac.id/files/2018/12/ham-3-1.jpg" width="339" /></a></p>
        
        <p style="text-align: justify">Selanjutnya kita perlu mengubah route, pada routes.php</p>
        
        <p style="text-align: justify"><a href="https://socs.binus.ac.id/files/2018/12/ham-4-1.jpg"><img alt="" class="aligncenter size-full wp-image-18331" height="24" loading="lazy" src="https://socs.binus.ac.id/files/2018/12/ham-4-1.jpg" width="235" /></a></p>
        
        <p style="text-align: justify">Route ini akan digunakan untuk membantu pengguna memanggil halaman/<em>resource</em> tertentu dengan mudah.</p>
        
        <ol start="2" style="text-align: justify">
          <li><strong>Membuat <em>Layout</em> sederhana</strong></li>
        </ol>
        
        <p style="text-align: justify">Di dalam <em>folder </em>resources/views dengan nama blade_sample. Kemudian di dalam file tersebut buatlah sebuah <em>file </em>bernama layout.blade.php.</p>
        
        <p style="text-align: justify">Lalu di dalam <em>file </em>tersebut masukan kode berikut.</p>
        
        <p style="text-align: justify"><a href="https://socs.binus.ac.id/files/2018/12/ham-5-1.jpg"><img alt="" class="aligncenter size-full wp-image-18332" height="282" loading="lazy" src="https://socs.binus.ac.id/files/2018/12/ham-5-1.jpg" width="330" /></a></p>
        
        <p style="text-align: justify">Nantinya kode di atas akan menjadi wadah untuk kode lain yang menggunakan <em>layout </em>tersebut. Jadi pengguna hanya perlu menuliskan kode di atas sekali saja, sehingga pengguna tidak perlu menuliskan ulang <em>nav</em> dan <em>footer </em>di setiap <em>view</em> yang pengguna akan buat.</p>
        
        <ol start="3" style="text-align: justify">
          <li><strong>Menggunakan <em>Layout</em></strong></li>
        </ol>
        
        <p style="text-align: justify">Menggunakan <em>Layout</em> yang tadi telah kita buat di <em>view</em> baru, buatlah file baru bernama index.blade.php di dalam folder yang sama dengan <em>Layout </em>sederhana yang telah kita buat. Kemudian tuliskan kode berikut.</p>
        
        <p style="text-align: justify"><a href="https://socs.binus.ac.id/files/2018/12/ham-6-2.jpg"><img alt="" class="aligncenter size-full wp-image-18334" height="109" loading="lazy" src="https://socs.binus.ac.id/files/2018/12/ham-6-2.jpg" width="323" /></a></p>
        
        <p style="text-align: justify"><em>Extends</em> akan digunakan untuk memanggil <em>layout</em> sebelumnya yang telah dibuat. Sedangkan <em>section</em> menjadi <em>placeholder</em> untuk <em>content</em> yang akan diisi oleh pengguna. Hal ini mempermudah pengguna karena tidak perlu melakukan penulisan ulang.</p>
        
        <p style="text-align: justify">Contoh di atas hanya sebagian kecil dari <em>Laravel,</em> masih banyak fitur &ndash; fitur yang telah disediakan oleh <em>laravel</em>,yang bertujuan untuk membantu ataupun mempermudah pengguna dalam mengembangkan <em>project</em> yang akan dibuat. Demikian artikel yang ingin kami sampaikan, kami harap dapat bermanfaat.</p>',
            'tanggal' => 'Sunday, 1 August 2021',
            'jam' => '16:50:12PM',
            'tag' => 'Laravel',
            'gambar_berita' => 'https://i.ibb.co/dMF6sBr/Laravel-best-PHP-Framework.jpg',
            'video' => 'https://www.youtube.com/embed/khkwJF4o0dQ',
            'view' => '8',

        ]);

        CategorieUser::create([
            'categorie_id' => '6',
            'user_id' => '3',
            'judul_berita_ina' => '1. Membuat Login pada Laravel 7 - Sub Langkah Awal',
            'sluk' => '1-membuat-login-pada-laravel-7-sub-langkah-awal',
            'judul_berita_eng' => '1. Making Login on Laravel 7 - Sub Prepare',
            'slug' => '1-making-login-on-laravel-7-sub-prepare',
            'trending' => 'Y',
            'headline' => 'Y',
            'aktif' => 'Y',
            'isi_berita_ina' => '<p><strong>Laravel </strong>merupakan aplikasi pengembangan website yang menggunakan bahasa pemrograman PHP dimana laravel memiliki arsitektur MVC (<em>Model View Controller</em>) yang sangat dinamis dan disukai web developer pada saat ini ditinjau dari banyak kelebihannya. Pada era revolusi industri 4.0 dan revolusi industri 5.0, laravel merupakan sebagian sistem informasi yang mampu untuk diterapkan secara luas, dinamis, mudah serta sederhana untuk aplikasi berbasis web maupun sebagai end user untuk aplikasi berbasis mobile dari skala kecil hingga besar dari perusahaan-perusahaan.&nbsp;</p>
        <p>&nbsp;</p>
        <p><strong>Keunggulan </strong>lain dari sistem login pada framework Laravel dari segi pengolahan data seperti : performance lebih cepat, reload data&nbsp; lebih stabil, memiliki keamanan data, menggunakan fitur canggih seperti blade yang menggunakan konsep <strong>HMVC (<em>Hierarchical Model View&nbsp; Controller</em>)</strong>, tersedianya banyak library yang sudah siap untuk digunakan dan adanya fitur pengelolaan migrations untuk pembuatan skema table pada database (Handika &amp; Purbasari, 2018) yang semua kelengkapan tersebut bisa dimanfaatkan dalam sistem login<em> framework</em> Laravel.&nbsp;</p>',
            'isi_berita_eng' => '<p><span class="VIiyi" jsaction="mouseup:BR6jm" jsname="jqKxS" lang="en"><span class="JLqJ4b" data-language-for-alternatives="en" data-language-to-translate-into="id" data-phrase-index="0" jsaction="agoMJf:PFBcW;usxOmf:aWLT7;jhKsnd:P7O7bd,F8DmGf;Q4AGo:Gm7gYd,qAKMYb;uFUCPb:pvnm0e,pfE8Hb,PFBcW;f56efd:dJXsye;EnoYf:KNzws,ZJsZZ,JgVSJc;zdMJQc:cCQNKb,ZJsZZ,zchEXc;Ytrrj:JJDvdc;tNR8yc:GeFvjb;oFN6Ye:hij5Wb" jscontroller="Zl5N8" jsdata="uqLsIf;_;$43" jsmodel="SsMkhd" jsname="txFAF"><span jsaction="click:qtZ4nf,GFf3ac,tMZCfe; contextmenu:Nqw7Te,QP7LD; mouseout:Nqw7Te; mouseover:qtZ4nf,c2aHje" jsname="W297wb"><strong>Laravel </strong>is a website development application that uses the PHP programming language where Laravel has a very dynamic MVC (Model View Controller) architecture and is favored by web developers today in terms of its many advantages. In the era of the industrial revolution 4.0 and industrial revolution 5.0, laravel is part of an information system that can be implemented widely, dynamically, easily and simply for web-based applications and end users for mobile-based applications from small. to large-scale companies. </span></span></span></p>
        <p>&nbsp;</p>
        <p><span class="VIiyi" jsaction="mouseup:BR6jm" jsname="jqKxS" lang="en"><span class="JLqJ4b" data-language-for-alternatives="en" data-language-to-translate-into="id" data-phrase-index="0" jsaction="agoMJf:PFBcW;usxOmf:aWLT7;jhKsnd:P7O7bd,F8DmGf;Q4AGo:Gm7gYd,qAKMYb;uFUCPb:pvnm0e,pfE8Hb,PFBcW;f56efd:dJXsye;EnoYf:KNzws,ZJsZZ,JgVSJc;zdMJQc:cCQNKb,ZJsZZ,zchEXc;Ytrrj:JJDvdc;tNR8yc:GeFvjb;oFN6Ye:hij5Wb" jscontroller="Zl5N8" jsdata="uqLsIf;_;$43" jsmodel="SsMkhd" jsname="txFAF"><span jsaction="click:qtZ4nf,GFf3ac,tMZCfe; contextmenu:Nqw7Te,QP7LD; mouseout:Nqw7Te; mouseover:qtZ4nf,c2aHje" jsname="W297wb"><strong>Other advantages</strong> of the login system in the Laravel framework in terms of data processing such as: faster performance, more stable data reloading, data security, using advanced features such as blades that use the concept of HMVC (Hierarchical Model View Controller), the availability of many ready-to-use libraries. used. used and there is a migration management feature to create table schemas in the database (Handika &amp; Purbasari, 2018) all of which can be used in the Laravel framework login system.</span></span></span></p>',
            'tanggal' => 'Sunday, 1 August 2021',
            'jam' => '16:50:12PM',
            'tag' => 'Laravel',
            'gambar_berita' => 'https://i.ibb.co/dMF6sBr/Laravel-best-PHP-Framework.jpg',
            'video' => 'https://www.youtube.com/embed/khkwJF4o0dQ',
            'view' => '20',
        ]);
        CategorieUser::create([
            'categorie_id' => '3',
            'user_id' => '1',
            'judul_berita_ina' => 'Konsep Basis Data (Database)',
            'sluk' => 'konsep-basis-data-database',
            'judul_berita_eng' => 'Database Concepts',
            'slug' => 'database-concepts',
            'trending' => 'Y',
            'headline' => 'Y',
            'aktif' => 'Y',
            'isi_berita_ina' => '<p><strong>Pengenalan Basis Data</strong><br />
        Basis data adalah kumpulan data yang saling berhubungan secara logis dan didesain untuk mendapatkan data yang dibutuhkan oleh suatu organisasi. Basis data sudah banyak digunakan dalam berbagai jenis aplikasi, mulai dari aplikasi sederhana, seperti aplikasi pengelolaan nomor telepon sampai dengan aplikasi kompleks, seperti aplikasi pembayaran gaji karyawan perusahaan.</p>
        
        <p><strong>Konsep Dasar Basis Data</strong><br />
        BASIS DATA adalah suatu susunan/kumpulan data operasional lengkap dari suatu organisasi/perusahaan yang diorganisir/dikelola dan simpan secara terintegrasi dengan menggunakan metode tertentu dengan menggunakan komputer sehingga mampu menyediakan informasi yang diperlukan pemakainya.</p>
        
        <p><br />
        <strong>SISTEM BASIS DATA</strong> adalah kumpulan dari program aplikasi yang berinteraksi dengan basis data bersama dengan Database Management System (DBMS) dan basis data itu sendiri.</p>
        
        <p><strong>Komponen Sistem Basis Data</strong><br />
        Terdapat 4 komponen pokok dari sistem basis data:<br />
        <strong>A.&nbsp; DATA</strong>,&nbsp; dengan ciri-ciri :</p>
        
        <ol>
          <li>Data disimpan secara terintegrasi (Integrated)&nbsp; Terintegrated yaitu Database merupakan kumpulan dari berbagai macam file dari aplikasi-aplikasi yang berbeda yang disusun dengan cara menghilangkan bagian-bagian yang rangkap (redundant)</li>
          <li>Data dapat dipakai secara bersama-sama(shared)&nbsp; Shared yaitu Masing-masing bagian dari database dapat diakses oleh pemakai dalam waktu yang bersamaan, untuk aplikasi yang berbeda.</li>
        </ol>
        
        <p>Ada 3 jenis data pada sistem basis data, yaitu:</p>
        
        <ol>
          <li>Data operasional dari suatu organisasi, berupa data yang disimpan didalam database</li>
          <li>Data masukan (input data), data dari luar sistem yang dimasukan melalui peralatan input (keyboard) yang dapat merubah data operasional</li>
          <li>Data keluaran (output data), berupa laporan melalui peralatan output sebagai hasil dari dalam sistem yang mengakses data operasional</li>
        </ol>
        
        <p><strong>B.&nbsp;&nbsp; Perangkat Keras (HARDWARE)</strong><br />
        &nbsp;Terdiri dari semua peralatan perangkat keras komputer yang digunakan untuk pengelolaan sistem database. &nbsp;&nbsp; Perangkat keras yang terdapat dalam sebuah sistem basis data adalah:</p>
        
        <ol>
          <li>&nbsp;Komputer (satu untuk sistem stand-alone atau lebih dari satu untuk sistem jaringan)</li>
          <li>Memori sekunder on-line (Harddisk)</li>
          <li>Memori sekunder off-line (Tape atau Removeble Disk) untuk backup data</li>
          <li>Media/perangkat komunikasi (untuk sistem jaringan) &nbsp;</li>
        </ol>
        
        <p><strong>C. Perangkat Lunak (SOFTWARE)</strong><br />
        Berfungsi sebagai perantara (interface) antara pemakai dengan data phisik pada database, dapat berupa :</p>
        
        <ol>
          <li>Database Management System (DBMS)</li>
          <li>Program-program aplikasi &amp; prosedur-prosedur &nbsp;</li>
        </ol>
        
        <p><strong>D. Pemakai (USER)</strong><br />
        &nbsp;Adalah pengguna basis data yang berinteraksi secara tidak langsung dengan basis data melalui program aplikasi basis data dan DBMS. Terbagi menjadi 3 klasifikasi :</p>
        
        <p>&nbsp;</p>
        
        <ol>
          <li>Database Administrator (DBA), yang membuat basis data dan mengontrol akses ke basis data. &nbsp;</li>
          <li>Programmer, yang membuat aplikasi basis data yang digunakan oleh DBA dan</li>
          <li>pemakai akhir.</li>
          <li>3. Pemakai akhir (End user) yang melakukan penambahan, penghapusan, pengubahan,</li>
          <li>dan pengaksesan data.</li>
        </ol>
        
        <p>&nbsp;</p>',
            'isi_berita_eng' => '<p>Database Introduction<br />
        A database is a collection of logically related data that is designed to obtain the data needed by an organization. The database has been widely used in various types of applications, ranging from simple applications, such as telephone number management applications, to complex applications, such as payroll applications for company employees.</p>
        
        <p>Basic Database Concepts<br />
        DATABASE is an arrangement/collection of complete operational data of an organization/company that is organized/managed and stored in an integrated manner using certain methods using a computer so as to be able to provide the information required by the user.</p>
        
        <p><br />
        A DATABASE SYSTEM is a collection of application programs that interact with the database along with the Database Management System (DBMS) and the database itself.</p>
        
        <p>Database System Components<br />
        There are 4 main components of a database system:<br />
        <strong>A. DATA</strong>, with the following characteristics:</p>
        
        <ol>
          <li>&nbsp;Data is stored in an integrated manner (Integrated) i.e. Database is a collection of various files from different applications which are arranged by eliminating redundant parts.</li>
          <li>Data can be shared (shared) Shared ie each part of the database can be accessed by users at the same time, for different application&nbsp; There are 3 types of data in the database system, namely:</li>
        </ol>
        
        <p>&nbsp;&nbsp;&nbsp; Operational data from an organization, in the form of data stored in a database<br />
        &nbsp;&nbsp;&nbsp; Data input (input data), data from outside the system that is entered through input devices (keyboards) that can change operational data<br />
        &nbsp;&nbsp;&nbsp; Output data (output data), in the form of reports through output equipment as a result of the system accessing operational data</p>
        
        <p><strong>B. Hardware (HARDWARE)</strong><br />
        &nbsp;Consists of all computer hardware equipment used for database system management. The hardware contained in a database system is:</p>
        
        <ol>
          <li>&nbsp;&nbsp;&nbsp;&nbsp; Computer (one for stand-alone system or more than one for network system)</li>
          <li>&nbsp;&nbsp;&nbsp; On-line secondary memory (Harddisk)</li>
          <li>&nbsp;&nbsp;&nbsp; Off-line secondary memory (Tape or Removeble Disk) for data backup</li>
          <li>&nbsp;&nbsp;&nbsp; Media/communication device (for network system)</li>
        </ol>
        
        <p><strong>C. Software (SOFTWARE)</strong><br />
        Serves as an intermediary (interface) between the user and the physical data in the database, can be in the form of:</p>
        
        <p>&nbsp;&nbsp;&nbsp; Database Management System (DBMS)<br />
        &nbsp;&nbsp;&nbsp; Application programs &amp; procedures</p>
        
        <p><strong>D. User (USER)</strong><br />
        &nbsp;Are database users who interact indirectly with the database through database application programs and DBMS. Divided into 3 classifications:</p>
        
        <p>&nbsp;&nbsp;&nbsp; Database Administrator (DBA), who creates the database and controls access to the database.<br />
        &nbsp;&nbsp;&nbsp; Programmers, who create database applications used by DBAs and<br />
        &nbsp;&nbsp;&nbsp; end user.<br />
        &nbsp;&nbsp;&nbsp; 3. End users who add, delete, modify,<br />
        &nbsp;&nbsp;&nbsp; and data access.</p>',
            'tanggal' => '31 July, 21',
            'jam' => '10:50:12PM',
            'tag' => 'Database',
            'gambar_berita' => 'https://i.ibb.co/PgkWBwT/database.jpg',
            'video' => 'https://www.youtube.com/embed/khkwJF4o0dQ',
            'view' => '1',

        ]);
    }
}
