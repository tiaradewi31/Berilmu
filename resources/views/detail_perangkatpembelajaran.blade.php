<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="icon" href="http://berilmu-laravel.test/img/logoputih.png" type = "image/x-icon">
    <link rel="icon" href="http://127.0.0.1:8000/img/logoputih.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/detailpp.css">
  </head>
  <body>

    @include('navbar2')

    <div class="container text-start">
        <a href="#"><img src="img/Kembali.png" alt="" style="width: 5%; margin: 150px 0px 30px;"></a>
    </div>
    
    <div class="container text-center">
      <h2 class="text-uppercase fw-bold">Jenis perangkat pembelajaran</h2>
      <h2 class="text-uppercase fw-bold">Judul</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur totam deleniti, atque vitae nulla dolorem repellat commodi! Ex ipsam maiores laborum eveniet perspiciatis, excepturi illum necessitatibus. Quasi laboriosam vitae assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ratione tempore nemo vel cum id, voluptatem dignissimos dolorem obcaecati quibusdam eligendi recusandae consectetur mollitia error explicabo at. Rem, corporis quidem!. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam accusantium maxime error ad itaque quia, ullam sunt eos? Quaerat porro autem repellat possimus, corporis impedit illum voluptatum alias eligendi voluptatibus.</p>
    </div>

    <div class ="container">
        <div class="card border border-0" style="background-color: #E4F5FF; border-radius: 60px;">
            <div class="card-body">
              <p class="isi">Nama Penulis   : </p>
              <p class="isi">kurikulum      : </p>
              <p class="isi">Jenis Sekolah  : </p>
              <p class="isi">Jenjang        : </p>
              <p class="isi">Mata Pelajaran : </p>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>