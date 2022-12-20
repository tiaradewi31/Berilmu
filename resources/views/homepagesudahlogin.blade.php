<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    </style>
    <link rel="icon" href="http://berilmu-laravel.test/img/logoputih.png" type = "image/x-icon">
    <link rel="icon" href="http://127.0.0.1:8000/img/logoputih.png" type = "image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>BERILMU | Homepage</title>
    </head>
  <body>

  @include('navbarsudahlogin')

    <div class="container">
      <div class = "text-center" style="margin-top: 100px;">
      <style>
        body{
            background-color: #E8F2FD;
            background-size: cover;
            
        }
            .btn-outline-go{
            background-color: white;
            color: black;
            border-color: rgb(136, 212, 255);
            border-width: medium;
            }
            .btn-outline-go:hover {
            background-color: rgb(136, 212, 255);
            color: white;
            border-color: black;
            border-width: medium;
            }
        </style>
      </style>
        <div class="text-center">
          <img src="img/togaberilmu.png" alt="Logo Berilmu" style="width: 40%; padding-bottom: 2%; padding-top: 7%;">
        </div>
        <div class="text-center" style="padding-left: 2%; padding-bottom: 4%;">
          <h5>Tempat berbagi perangkat pembelajaran<h5>
        </div>
        <div class="cari">
        <a class="text-center" href="/searchpage">
          <button class="btn btn-outline-go" >KLIK DISINI UNTUK MENCARI RPP, SILABUS, MEDIA PEMBELAJARAN, MODUL AJAR, DAN ATP DARI RIBUAN SEKOLAH DI INDONESIA!</button>
        </a>
        </div>
        <div class="upload" style="margin-top: 3%;">
        <a class="text-center upload" href="/posts">
          <button class="btn btn-outline-go" >KLIK DISINI UNTUK MENGUPLOAD PERANGKAT PEMBELAJARAN!</button>
        </a>
        </div>
      </div>
    </div>
    <div class="custom_container">
      <div class="fitur_berilmu" style="padding-top: 300px;">
        <div class="fiturberilmu1">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-left: 12%;">
              <h3>Memberikan kemudahan bagi Anda untuk mencari perangkat pembelajaran</h3>
              <p class="">Dengan BERILMU, pasti bisa!</p>
              <span style="width: 100px;height: 3px;background: rgb(136, 212, 255);display: inline-block;"> </span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <video class="desk-view" autoplay="" muted="" loop="" playsinline="" style="width:90%;" preload="none">
                <source data-src="video/RPP.mp4" type="video/mp4" src="video/RPP.mp4">
              </video>
            </div>
          </div>
        </div>
        <div class="fiturberilmu2">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-left: 7%;">
              <video class="desk-view" autoplay="" muted="" loop="" playsinline="" style="width:90%;" preload="none">
                <source data-src="video/Silabus.mp4" type="video/mp4" src="video/Silabus.mp4">
              </video>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top: 10%;padding-left: 12%;">
              <h3>100+ Koleksi Perangkat Pembelajaran</h3>
              <p class="">Upload Perangkat Pembelajaranmu sekarang juga!</p>
              <span style="width: 100px;height: 3px;background: rgb(136, 212, 255);display: inline-block;"> </span>
            </div>
          </div>
        </div>
        <div class="fiturberilmu3">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top: 10%;padding-left: 12%;">
              <h3>Berbagi perangkat pembelajaran dengan ribuan guru di seluruh Indonesia</h3>
              <p class="">Mari wujudkan pengajaran yang lebih berkualitas!</p>
              <span style="width: 100px;height: 3px;background: rgb(136, 212, 255);display: inline-block;"> </span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <video class="desk-view" autoplay="" muted="" loop="" playsinline="" style="width:90%;" preload="none">
                <source data-src="video/Media Pembelajaran.mp4" type="video/mp4" src="video/Media Pembelajaran.mp4">
              </video>
            </div>
          </div>
        </div>
        <div class="fiturberilmu4">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-left: 7%;">
              <video class="desk-view" autoplay="" muted="" loop="" playsinline="" style="width:90%;" preload="none">
                <source data-src="video/Bahan Ajar.mp4" type="video/mp4" src="video/Bahan Ajar.mp4">
              </video>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top: 10%;padding-left: 12%;">
              <h3>Upload dengan mudah dan cepat</h3>
              <p class="">Simple, tanpa ribet!</p>
              <span style="width: 100px;height: 3px;background: rgb(136, 212, 255);display: inline-block;"> </span>
            </div>
          </div>
        </div>
        <div class="fiturberilmu5">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top: 10%;padding-left: 12%; margin-bottom: 12%">
              <h3>Pilihan jenjang dan mata pelajaran yang beragam</h3>
              <p class="">Dari Sekolah Dasar sampai Sekolah Menengah Atas/Kejuruan. Dari Matematika sampai TIK, semua ada!</p>
              <span style="width: 100px;height: 3px;background: rgb(136, 212, 255);display: inline-block;"> </span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <video class="desk-view" autoplay="" muted="" loop="" playsinline="" style="width:90%;" preload="none">
                <source data-src="video/ATP.mp4" type="video/mp4" src="video/ATP.mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
      <img src="img/background.png" alt="" width="75%" style="padding: 0% 0% 0% 18%;">
    </div>
    
    @include ('topbutton')

    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


