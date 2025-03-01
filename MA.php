<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK Telkom Purwokerto</title>
  <?php include 'snippets/styles.php' ?>
</head>

<body>

  <!-- NAVBAR -->
  <?php include 'snippets/navbar.php' ?>
  <!-- AKHIR NAVBAR -->

  <img width="100%" style="margin-top: 60px;" src="assets/img/header/perpus.png" alt="">

  <!-- tab -->
  <div class="container-fluid pb-5">
    <div class="container pt-5">
      <ul class="nav nav-tabs" id="myTab  " role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="fas-tab" data-bs-toggle="tab" data-bs-target="#fas" type="button" role="tab" aria-controls="fas" aria-selected="true">Fasilitas</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="katalog-tab" data-bs-toggle="tab" data-bs-target="#katalog" type="button" role="tab" aria-controls="katalog" aria-selected="false">Katalog</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="visimisi-tab" data-bs-toggle="tab" data-bs-target="#visimisi" type="button" role="tab" aria-controls="visimisi" aria-selected="false">Visi Misi</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="kegiatan-tab" data-bs-toggle="tab" data-bs-target="#kegiatan" type="button" role="tab" aria-controls="kegiatan" aria-selected="false">Kegiatan</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pres-tab" data-bs-toggle="tab" data-bs-target="#pres" type="button" role="tab" aria-controls="pres" aria-selected="false">Prestasi</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">

        <!-- FASILITAS -->
        <div class="tab-pane fade show active" id="fas" role="tabpanel" aria-labelledby="fas-tab">
          <!-- paskib -->
          <div style="background-color: #fdf0ec;" class="container-fluid  pt-5 pb-5" id="paskib">
            <div class="container pt-5 paskib">
              <div class="row">
                <h3>Paskibra Satdratama</h3>
                <p>Paskibra SATDRATAMA STEMATEL merupakan organisasi paskibra yang dilandasi dengan PANCASILA dan di sini akan dilatih sifat kepemimpinan, kebijaksanaan, rasa tanggung jawab, an memiliki rasa jiwa nasionalisme yang tinggi</p>
                <div class="row text-center pb-5">
                  <div class="col-sm-4">
                    <div style="background-color: rgb(255, 158, 119); border: none; padding: 3%;" class="card" style="width: 18rem;">
                      <img src="assets/img/ekskul/paskib1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Latihan Rutin</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div style="background-color: #fdd065; border: none; padding: 3%;" class="card" style="width: 18rem;">
                      <img src="assets/img/ekskul/paskib2.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Reorganisasi Satdratama</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div style="background-color: rgb(255, 158, 119); border: none; padding: 3%;" class="card" style="width: 18rem;">
                      <img src="assets/img/ekskul/paskib3.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Latihan Rutin</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <h3>Pramuka</h3>
                <div class="col-md-4 text-center pt-5">
                  <img style="width : 80%;" src="assets/img/ekskul/p1.jpg" alt="">
                </div>
                <div class="col-md-4 text-center pt-5">
                  <img style="width :  80%;" src="assets/img/ekskul/p2.jpg" alt="">
                </div>
                <div class="col-md-4 text-center pt-5">
                  <img style="width :  80%;" src="assets/img/ekskul/p3.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <!-- akhir paskib -->

          <!-- or -->
          <div style="background : #fdf0ec; color: #745A00;" class="container-fluid pt-5 pb-5">
            <div class="container futsal pt-5 pb-5">
              <div class="row">
                <div class="col-md-6 text-center">
                  <h3>Futsal Putri</h3>
                  <div class="d-flex justify-content-center pt-5">
                    <img style="width: 40%;" src="assets/img/ekskul/fp1.jpg" alt="">
                    <p style="color: transparent">o</p>
                    <img style="width: 40%;" src="assets/img/ekskul/fp2.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6 text-center pb-5">
                  <h3>Futsal Putra</h3>
                  <div class="d-flex justify-content-center pt-5">
                    <img style="width: 67%;" src="assets/img/ekskul/futsal.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="row  mt-5">
                <div class="col-md-6 text-center">
                  <h3>Bola Voli</h3>
                  <div class="d-flex justify-content-center pt-5">
                    <img style="height: 50vh;" src="assets/img/ekskul/voli.JPG" alt="">
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <h3>Basket</h3>
                  <div class="d-flex justify-content-center pt-5">
                    <img style="height: 50vh;" src="assets/img/ekskul/basket.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- akhir or -->

          <!-- scc -->
          <div style="background-color: rgb(255, 240, 198);" class="container-fluid pt-5 pb-5">
            <div class="container pt-5 pb-5">
              <div class="row text-center">
                <h3>Stematel Computer Club (SCC)</h3>
                <div class="col-md-4 text-center pt-5">
                  <img style="width : 50%;" src="assets/img/ekskul/web.png" alt="">
                  <h4 class="pt-3">Web Desain</h4>
                  <p style="text-align: justify;" class="pt-3">
                    Web desain adalah sebuah bentuk grafis dalam membuat suatu halaman web. Banyak orang yang masih belum tahu menahu tentang pengertian web desain.</p>
                </div>
                <div class="col-md-4 text-center pt-5">
                  <img style="width : 50%;" src="assets/img/ekskul/desain.png" alt="">
                  <h4 class="pt-3">Desain Grafis</h4>
                  <p style="text-align: justify;" class="pt-3">Desain grafis adalah sebuah bentuk seni dengan tujuan untuk memecahkan masalah komunikasi melalui kombinasi elemen grafis seperti bentuk, garis, warna, dan sebagainya.</p>
                </div>
                <div class="col-md-4 text-center pt-5">
                  <img style="width : 50%;" src="assets/img/ekskul/it.png" alt="">
                  <h4 class="pt-3">IT Software</h4>
                  <p style="text-align: justify;" class="pt-3">Berfokus pada penciptaan atau pengembangan perangkat lunak. Salah satu kriteria tambahan untuk output Software Development adalah kemampuan software untuk dapat dikembangkan lagi. </p>
                </div>
              </div>
              <div class="row pt-5">
                <div class="col-md-4 text-center pt-5">
                  <img style="width : 80%;" src="assets/img/ekskul/spec.png" alt="">
                  <h4 class="pt-3">English Club (SPEC)</h4>
                </div>
                <div class="col-md-4 text-center pt-5">
                  <img style="width :  80%;" src="assets/img/ekskul/rob.png" alt="">
                  <h4 class="pt-3">Robotic</h4>
                </div>
                <div class="col-md-4 text-center pt-5">
                  <img style="width :  80%;" src="assets/img/ekskul/math.png" alt="">
                  <h4 class="pt-3">Math Club</h4>
                </div>
              </div>
            </div>
          </div>
          <!-- akhir scc -->

          <!-- choir -->
          <div style="background-color: rgb(234, 248, 255);" class="container-fluid pt-5 pb-5">
            <div class="container pt-5 pb-5 choir">
              <div class="row">
                <div class="col-md-5">
                  <img style="width: 100%;" src="assets/img/illus/undraw_happy_music_g6wc 1.png" alt="">
                </div>
                <div class="col-md-1">
                  <p></p>
                </div>
                <div class="col-md-6">
                  <h3>Stematel Choir</h3>
                  <p>Potret Stematel Choir menjadi "pencuri" Diacara wisuda angkatan XXIV kemarin, suara yang memukau dan performa yang bagus menjadi kunci bagi mereka yang dapat memukau para hadirin</p>
                  <div class="d-flex">
                    <div class="p-2 flex-fill"><img style="width: 100%;" src="assets/img/ekskul/choir1.jpg" alt=""></div>
                    <div class="p-2 flex-fill"><img style="width: 100%;" src="assets/img/ekskul/choir2.jpg" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- akhir choir -->

          <!-- band -->
          <div style="background-color: rgb(234, 248, 255);" class="container-fluid pt-5 pb-5">
            <div class="container band pb-5">
              <div class="row">
                <div class="col-md-4">
                  <img style="width: 100%;" src="assets/img/ekskul/band1.jpg" alt="">
                </div>
                <div class="col-md-4">
                  <img style="width: 100%;" src="assets/img/ekskul/band2.jpg" alt="">
                </div>
                <div style="margin-top: 10%;" class="col-md-3 text text-center">
                  <h3>Band</h3>
                  <h1>Stematel</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- akhir band -->

          <!-- tari -->
          <div style="background-color: rgb(234, 248, 255);" class="container-fluid pt-5 pb-5">
            <div class="container tari pb-5">
              <div class="row">
                <div class="col-md-6 text-center ">
                  <h3>Tari Tradisional</h3>
                  <div style=" padding: 2%;
          background: #a4bfc7!important;
          border: none!important;
          border-radius: 1%!important;" class="card mt-5">
                    <div class="card-body">
                      <img style="width: 100%;" src="assets/img/ekskul/tari.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <h3>Dance</h3>
                  <div style=" padding: 2%;
          background: #a4bfc7!important;
          border: none!important;
          border-radius: 1%!important;" class="card mt-5 mb-4">
                    <div class="card-body">
                      <img style="width: 100%;" src="assets/img/ekskul/dance.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- tari -->

        </div>
        <!-- AKHIR FASILITAS -->

        <!-- KATALOG -->
        <div class="tab-pane fade" id="katalog" role="tabpanel" aria-labelledby="katalog-tab">
          <!-- section 2 -->
          <section>
            <div class="container pt-5 pb-5 j1">
              <h4 class="text-center pt-5 pb-5">TEKNIK JARINGAN AKSES</h4>
              <div class="row pt-5">
                <div class="col-md-6">
                  <p class="mt-4">Merupkanan program ilmu kejuruan yang mempelajari tentang jaringan, baik itu jaringan Akses Kabel (Tembaga, Coaxial, Fiber Optik) maupun Nirkabel (Radio, Gelombang Mikro).</p>
                  <div class="row mt-5">
                    <div class="container-fluid">
                      <iframe style="border-radius: 10px;" width="100%" height="315" src="https://www.youtube.com/embed/bmXh-9sEt38" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img style="width: 100%; margin-left: 30px;" src="assets/img/tja.png" alt="">
                </div>
              </div>
            </div>

            <div class="container pt-5 pb-5 j1">
              <h4 class="text-center pt-5 pb-5">TEKNIK KOMPUTER DAN JARINGAN</h4>
              <div class="row pt-5">
                <div class="col-md-6">
                  <img style="width: 100%; margin-right: 30px;" src="assets/img/tkj.png" alt="">
                </div>
                <div class="col-md-6">
                  <p>Merupakan program ilmu kejuruan dibidang teknologi informasi dan komunikasi yang berhubungan dengan kemampuan pemrograman komputer, perakitan komputer dan jaringan komputer, serta pengoperasian perangkat lunak komputer.</p>
                  </p>
                  <div class="row mt-5">
                    <div class="container-fluid">
                      <iframe style="border-radius: 10px;" width="100%" height="315" src="https://www.youtube.com/embed/KiSSu1qxcKA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="container pt-5 pb-5 j1">
              <h4 class="text-center pt-5 pb-5">REKAYASA PERANGKAT LUNAK</h4>
              <div class="row pt-5 mt-200">
                <div class="col-md-6">
                  <p>Jurusan yang mendalami cara-cara pengembangan perangkat lunak (software), meliputi pembuatan, pemeliharaan, manajemen, organisasi, dan pengembangannya. Pada kelas ini, siswa akan mendalami kegiatan-kegiatan yang berhubungan dengan rekayasa perangkat lunak, baik untuk komputer maupun gadget.</p>
                  <div class="row mt-5">
                    <div class="container-fluid">
                      <iframe style="border-radius: 10px;" width="100%" height="315" src="https://www.youtube.com/embed/bdcQam6u5PY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img style="width: 100%; margin-left: 40px;" src="assets/img/rpl.png" alt="">
                </div>
              </div>
            </div>
          </section>
          <!-- akhir sec 2 -->
        </div>
        <!-- AKHIR KATALOG -->
        <!-- KATALOG -->
        <div class="tab-pane fade" id="visimisi" role="tabpanel" aria-labelledby="visimisi-tab">
          <section>
            <div class="container-fluid pt-5 pb-5 profil">
              <div class="container pt-5 pb-5">
                <div class="row">
                  <h3 style="font-weight: 500; font-size: 36px;" class="pt-5 text-center">Visi Misi</h3>
                  <h4 class="pt-3 pb-4 text-center">Sekolah Telematika Terbaik se-Indonesia</h4>
                  <div style="width: 100%;" class="container">
                    <img style="width: 100%;" src="assets/img/tefa.jpg" alt="">
                  </div>
                  <p class="pt-5">Telkom Schools SMK Telkom Purwokerto didirikan pada tanggal 30 Januari 1993, dengan surat dari Kepala Kantor Wilayah Depdikbud Propinsi Jawa Tengah No.130/103/I/1993 tanggal 22 Januari 1993, tentang persetujuan pendirian sekolah swasta yang diselenggarakan oleh Yayasan Sandhykara Putra Telkom dan diresmikan oleh Menparpostel Bapak Soesilo Soedarman.</p>
                  <p class="pt-3">Kurikulum pertama yang dipergunakan adalah kurikulum 1984 dengan Rumpun Teknik Elektro Jurusan Jaringan Kabel. Kurikulum ini dikembangkan mengacu pada Pendidikan Menengah dengan kemampuan umum setara SMA dan kemampuan kejuruan setara STM. Meskipun sekolah baru, input siswa relatif bagus karena rasio pendaftar dibanding yang diterima adalah 9 : 1. Selain itu, terdapat kurikulum khusus untuk siswa karyawan program 1 tahun dan 2 tahun yang berjumlah 3 angkatan. Pada tahun 1995-2000, diterapkan kurikulum 1994 yang pengembangannya masih mengacu kurikulum sebelumnya dengan tujuan membentuk alumni yang berotot SMK dan berotak SMA. Pada tahun 1995, input siswa mengalami booming yaitu rasio pendaftar dibanding yang diterima adalah 12 : 1.</p>
                  <p class="pt-3">Tahun berikutnya yaitu tahun 2000-2004, diterapkan kurikulum 1999 dengan menyesuaikan perubahan nama Jurusan Jaringan Kabel menjadi Program Keahlian Teknik Jaringan Akses Pelanggan. Selain itu, SMK Telkom Purwokerto juga mendirikan program keahlian baru (tahun 2000) yaitu Teknik Informatika yang merupakan program keahlian ketiga yang dibuka di Indonesia setelah SMK Telkom Malang dan Jakarta.</p>
                  <p class="pt-3">Mulai tahun 2004, pemerintah memberlakukan Kurikulum Berbasis Kompetensi (KBK) yaitu Kurikulum 2004, dan SMK Telkom Purwokerto juga memberlakukan kurikulum tersebut disertai pengembangannya. Pada kurikulum ini (tahun 2004), Teknik Informatika yang semula merupakan program keahlian dari Teknik Telekomunikasi sekarang berubah menjadi Bidang Keahlian dengan nama Teknologi Informasi dan Komunikasi yang memiliki empat program keahlian yaitu Teknik Komputer dan Jaringan, Rekayasa Perangkat Lunak, Multimedia, dan Teknik Penyiaran Radio. Sedangkan Program Keahlian Teknik Jaringan Akses Pelanggan terbagi menjadi dua program keahlian yaitu Teknik Akses Kabel dan Teknik Akses Radio. Pada saat yang bersamaan, SMK Telkom Purwokerto harus memilih program keahlian yang disesuaikan yaitu Program Keahlian Teknik Akses Radio dan Teknik Komputer dan Jaringan. Pada perkembangannya di tahun 2005, SMK Telkom Purwokerto menambah satu program keahlian lagi yaitu Rekayasa Perangkat Lunak.</p>
                </div>
                <div class="row pt-5 pb-5">
                  <div class="col-md-6">
                    <h3 style="font-weight: 600; color:  #640202; font-size: 36px;" class="pt-3 pb-5 text-center">VISI</h3>
                    <div style="color: #FCCB1C;" class="col-md-12 text-center"><i class="fas fa-archive fa-6x"></i></div>
                    <p class="pt-5">SMK Telkom Purwokerto menghasilkan lulusan yang profesional di bidang Telematika, unggul di dunia kerja, mempunyai etos kerja tinggi, berbudi pekerti luhur, serta mampu berkompetisi dalam era global sampai dengan tahun 2020.</p>
                  </div>
                  <div class="col-md-6">
                    <h3 style="font-weight: 600; color:  #640202; font-size: 36px;" class="pt-3 pb-5 text-center">MISI</h3>
                    <div style="color: #FCCB1C;" class="col-md-12 text-center"><i class="fas fa-edit fa-6x"></i></div>
                    <p style="line-height: 60px;" class="pt-4">Menyelenggarakan proses belajar yang sesuai dengan budaya lokal dan nasional,<br>
                      Menyelenggarakan pendidikan dan latihan yang berwawasan mutu untuk mampu berkompetisi,<br>
                      Mengembangkan sistem pendidikan dan pelatihan yang adaptif, fleksible dan berwawasan global.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- AKHIR KATALOG -->

        <!-- KEGIATAN -->
        <div class="tab-pane fade" id="kegiatan" role="tabpanel" aria-labelledby="kegiatan-tab">
          <!-- section -->
          <section>
            <div class="container pt-5 pb-5 kegiatan">
              <div class="row text-center pt-5">
                <h3>Peringatan Bulan Bahasa</h3>
                <h4>“Menggali Potensi Literasi Peserta Didik Melalui Peringatan Bulan Bahasa”</h4>
              </div>
              <div class="row pt-5">
                <p>Tema kegiatan bulan Bahasa kali ini adalah “Menggali Potensi Literasi Peserta Didik Melalui Peringatan Bulan Bahasa”. Kegiatan ini dilaksanakan pada hari Kamis, 26 September 2019, bertempat di halaman samping perpustakaan SMK Telkom Sandhy Putra Purwokerto.</p>
                <p>Dalam peringatan bulan Bahasa ini terdapat beberapa agenda kegiatan, antara lain:</p>
                <p>1. Lomba baca puisi dengan peserta adalah peserta didik dari perwakilan kelas X, XI, dan XII SMK Telkom Sandhy Putra Purwokerto
                  <br>2. Talkshow Literasi dengan tema: Literasi, Cuma baca doang kah?
                </p>
                <p>dengan mengundang Pembicara dari penggiat literasi yaitu seorang Dosen Bahasa Indonesia Universitas Muhammdiyah Purwokerto, Ibu Yanwi Mudrikah, M.Pd.</p>
                <p>1. Lomba cipta puisi dengan peserta adalah peserta didik dari perwakilan kelas X, XI, dan XII SMK Telkom Sandhy Putra Purwokerto
                  <br>2. Lomba penulisan cerpen dengan peserta adalah peserta didik dari perwakilan kelas X, XI, dan XII SMK Telkom Sandhy Putra Purwokerto.
                </p>

                <div class="row ">
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/bb1.jpg" alt="">
                  </div>
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/bb2.jpg" alt="">
                  </div>
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/bb3.jpg" alt="">
                  </div>
                  <div class="col-sm-4 text-center pt-3"></div>
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/bb4.jpg" alt="">
                  </div>
                  <div class="col-sm-4 text-center pt-3"></div>
                </div>

                <div class="row text-center pt-5">
                  <h3>Giveaway MARVEL</h3>
                  <h4>“Milenial Love Literacy”</h4>
                </div>
                <p class="mt-4">Giveaway dilaksanakan dengan memanfaatkan media sosial Instagram dengan mengusung nama MARVEL (Milenial Love Literacy). Kegiatan ini dilaksanakan pada tanggal 1–14 April 2019.</p>
                <p>Adapun tujuan dilaksanakan Giveaway MARVEL, yaitu:</p>
                <p>1. Mengenalkan komunitas Stematel Reader kepada warga SMK Telkom Sandhy Putra Purwokerto khususnya untuk siswa kelas X, XI, dan XII SMK Telkom Sandhy Putra Purwokerto.
                  <br>2. Menggiatkan literasi peserta didik dengan cara membuat caption mengenai apa itu literasi dan harapan-harapan literasi di SMK Telkom Sandhy Putra Purwokerto.
                </p>

                <div class="row ">
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/j1.png" alt="">
                  </div>
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/j3.jpg" alt="">
                  </div>
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/j2.png" alt="">
                  </div>
                </div>

                <div class="row text-center pt-5">
                  <h3>Literasi Hijaiyah</h3>
                  <h4>Selama Bulan Ramadan</h4>
                </div>
                <p class="mt-5">Literasi Hijaiyah merupakan salah satu program perputakaan SMK Telkom Sandhy Putra Purwokerto yang dilaksanakan setiap hari, selama bulan ramadhan tahun 2019, pukul 07.00 -07.30. Kegiatan ini dimulai pada 13 Mei 2019 dan bertempat di masjid Syifaul Qolbi Kawasan SMK Telkom Sandhy Putra Purwokerto.</p>
                <p>Peserta kegiatan Literasi Hijaiyah adalah siswa SMK Telkom Sandhy Putra Purwokerto yang belum lancar membaca Al Quran (data dari guru PAI). Pendamping adalah guru PAI dan Tutor sebaya dari Rohis dan anggota Stematel Reader.</p>
                <p>Adapun tujuan dilaksanakan kegiatan ini yaitu :</p>
                <p>1. Memberantas buta huruf hijaiyah di lingkungan SMK Telkom Sandhy Putra Purwokerto.
                  <br>2. Mengembangkan kemampuan literasi dalam bidang keagamaan bagi anggota Stematel Reader.
                  <br>3. Meningkatkan kemampuan membaca Al Quran bagi anggota stematel reader dan siswa SMK Telkom Sandhy Putra Purwokerto
                </p>

                <div class="row ">
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/hij1.jpeg" alt="">
                  </div>
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/hij2.jpeg" alt="">
                  </div>
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/hij3.jpeg" alt="">
                  </div>
                  <div class="col-sm-2 text-center pt-3"></div>
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/hij4].jpeg" alt="">
                  </div>
                  <div class="col-sm-4 text-center pt-3">
                    <img style="width: 100%;" src="assets/img/perpustakaan/hij5.jpeg" alt="">
                  </div>
                  <div class="col-sm-2 text-center pt-3"></div>
                </div>

              </div>
            </div>
          </section>
          <!-- akhir section -->
        </div>
        <!-- AKHIR KEGIATAN -->

        <!-- PRESTASI -->
        <div class="tab-pane fade" id="pres" role="tabpanel" aria-labelledby="pres-tab">
          <div class="container-fluid pt-5 perpres">
            <div class="container pt-5">
              <div class="row text-center">
                <h4 class="pt-3">Juara Pada Festival Literasi Nasional</h4>
              </div>
              <div class="row mt-5">
                <p>Festival Literasi Nasional merupakan serangkaian acara dari Gerakan Sekolah Menulis Buku (GSMB). Sebagai salah satu peserta GSMB, maka SMK Telkom Sandhy Putra Purwokerto diundang untuk menghadiri acara tersebut.</p>
                <p>Dalam festival ini, SMK Telkom Sandhy Putra Purwokerto mendapatkan beberapa penghargaan, antara lain:</p>
                <p>1. Penghargaan Sekolah Aktif Literasi Tingkat Nasional
                  <br>2. Penghargaan Juara I, II, dan III SMA SMA/SMK/MA Kategori Puisi Tingkat Sekolah
                  <br>3. Penghargaan Juara I, II, dan III SMA/SMK/MA Kategori Cerpen Tingkat Sekolah
                  <br>4. Serta peluncuran buku karya peserta didik SMK Telkom Sandhy Putra Purwokerto berkolaborasi dengan GSMB, dengan judul “Orasi Para Pelantang”
                </p>
              </div>
            </div>
          </div>

          <!-- carousel -->
          <div class="container-fluid">
            <div style="width: 60%;" class="container mt-100 pb-5">
              <h4 class="text-center mb-5">Kejuaraan yang Didapat</h4>
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img style="border-radius: 8px" src="assets/img/perpustakaan/sertif1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img style="border-radius: 8px" src="assets/img/perpustakaan/sertif2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img style="border-radius: 8px" src="assets/img/perpustakaan/sertif3.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img style="border-radius: 8px" src="assets/img/perpustakaan/sertif4.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img style="border-radius: 8px" src="assets/img/perpustakaan/sertif5.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
          </div>
          <!-- carousel -->


          <div class="container-fluid pt-5 pb-5 perpres">
            <div class="container pt-5">
              <div class="row text-center">
                <h4 class="pt-3">Menjuarai Lomba Penulisan Artikel Populer Dinas Arsip dan Perpustakaan Daerah Banyumas</h4>
              </div>
              <div class="row mt-5">
                <p class="pt-3">Kegiatan lomba penulisan artikel dilaksanakan oleh Dinas Arsip dan Perpustakaan Daerah Banyumas pada hari Kamis, 5 Maret 2020 dengan tema “Mendekatkan Buku pada Milenial”. Pada hari Kamis, 5 maret 2020 dilakukan presentasi oleh peserta lomba. SMK Telkom Sandhy Putra Purwokerto mengirimkan sebuah tim yang terdiri dari 2 peserta didik untuk mengikuti lomba. Kedua peserta didik tersebut merupakan anggota Komunitas Stematel Reader, yaitu Shefira Tri Sadraharani dan Aghisna Aulia Rahma.</p>
                <p class="pt-3">Perwakilan dari SMK Telkom Sandhy Putra Purwokerto mendapatkan Juara I pada lomba penulisan artikel popular tersebut, dengan judul LIBDEL: Mendekatkan Buku pada Milenial.</p>
              </div>
              <div class="row mt-5 pb-5">
                <div class="col-md-1">
                  <p></p>
                </div>
                <div class="col-md-5">
                  <img style="height: 50vh; border-radius: 10px;" src="assets/img/perpus/l1.jpeg" alt="">
                </div>
                <div class="col-md-5">
                  <img style="height: 50vh; border-radius: 10px;" src="assets/img/perpus/l2.jpeg" alt="">
                </div>
                <div class="col-md-1">
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <!-- AKHIR PRESTASI -->
        </div>
      </div>
    </div>
  </div>
  <!-- akhir  tab -->


  <?php include 'snippets/footer.php' ?>
  <?php include 'snippets/scripts.php' ?>
</body>

</html>