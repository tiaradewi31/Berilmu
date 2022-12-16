<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    </style>
    <link rel="icon" href="http://localhost:8080/Tiara/apa/img/logotoga.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>BERILMU | Homepage</title>
    </head>
  <body>

  @include('navbarsudahlogin')

    <div class="container">
      <div class = "text-center" style="margin-top: 100px; padding-top: 30px; font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Poppins?query=Poppins);">
        <h3><b>PERANGKAT PEMBELAJARAN</b><h3>
        <div>
            <form class="d-flex" style="margin: 4%;">
                <input class="form-control me-2" href type="search" placeholder="Masukkan Kata Kunci Pencarian" aria-label="Search">
            </form>
        </div>
      </div>
    </div>

        <div class="col-12 mb-4">
            <form action="#">
                <div id="pencarian" class="row pt-3" style="margin: 0px 5% 0px 0px; padding-left:22%;">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="mb-3">
                            <label for="validationDefault04" class="form-label fw-bold">Jenis Perangkat Pembelajaran</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option>Semua Jenis</option>
                                <option>RPP</option>
                                <option>Silabus</option>
                                <option>Media Pembelajaran</option>
                                <option>Modul Ajar</option>
                                <option>ATP</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="mb-3">
                            <label for="validationDefault04" class="form-label fw-bold">Jenjang Sekolah</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option>Semua Jenjang</option>
                                <option>SD/MI</option>
                                <option>SMP/MTS</option>
                                <option>SMA/SMK/MA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="mb-3">
                            <label for="validationDefault04" class="form-label fw-bold">Mata Pelajaran</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option>Semua Mata Pelajaran</option>
                                <option>PKn</option>
                                <option>Matematika</option>
                                <option>Bahasa Indonesia</option>
                                <option>IPA</option>
                                <option>IPS</option>
                                <option>TIK</option>
                                <option>Bahasa Inggris</option>
                                <option>SBK</option>
                                <option>PJOK</option>
                                <option>Fisika</option>
                                <option>Biologi</option>
                                <option>Kimia</option>
                            </select>
                        </div>
                    </div>  
                </div>
            </div>
        </div>









        <!-- <!-- <div class="text-right col-md-3">
            <label for="validationDefault04" class="form-label">Jenis Perangkat Pembelajaran</label>
            <select class="form-select" id="validationDefault04" required>
                <option>RPP</option>
                <option>Silabus</option>
                <option>Media Pembelajaran</option>
                <option>Modul Ajar</option>
                <option>ATP</option>
            </select>
        </div>
        <div class="text-right col-md-3">
            <label for="validationDefault04" class="form-label">Jenjang Sekolah</label>
            <select class="form-select" id="validationDefault04" required>
                <!-- <option selected disabled value="">Choose...</option> -->
                <!-- <option>SD/MI</option>
                <option>SMP/MTS</option>
                <option>Media Pembelajaran</option>
                <option>Modul Ajar</option>
                <option>ATP</option>
            </select>
        </div> -->


    <div class="row" style="padding-bottom: 2%">       
        <div class="col-md-6" style= "padding-left: 35%">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" style= "font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Poppins?query=Poppins);" for="flexCheckChecked"><b>Kurikulum 2013</b></label>
        </div>
        <div class="col-md-6" style= "padding-left: 5%">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" style= "font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Poppins?query=Poppins);" for="flexCheckDefault"><b>Kurikulum Merdeka Belajar</b></label>
        </div>
    </div>

    <div class="container">
        <div class = "text-center" style="padding-top: 30px; padding-bottom: 30px; font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Poppins?query=Poppins);">
            <form class="d-flex" style="margin: 4%;">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <style>
                .btn-outline-success{
                    background-color: white;
                    color: black;
                    border-color: rgb(136, 212, 255);
                }
                .btn-outline-success:hover {
                    background-color: rgb(136, 212, 255);
                    color: white;
                    border-color: white;
                }
                </style> 
            </form>
        </div>
    </div>


  <div class="custom_container" style="background-color: #E4F5FF; border-radius: 60px; padding-top: 5%; padding-bottom: 5%; margin-left: 5%; margin-right: 5%; margin-bottom: 5%; font-family: 'Pridi'; src: url(https://fonts.google.com/specimen/Pridi?query=pridi);">

    <div class="container text-justify pt-4">
        <style>
            .btn-outline-download{
            background-color: #088dff;
            color: white;
            border-color: white;
            }
            .btn-outline-download:hover {
            background-color: white;
            color: black;
            border-color: #088dff;
            }
            .btn-outline-youtube{
            background-color: #c60240;
            color: white;
            border-color: white;
            }
            .btn-outline-youtube:hover {
            background-color: white;
            color: black;
            border-color: #c60240;
            }
        </style>
        <div class="row row-cols-2 row-cols-md-2 g-3">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Perangkat Pembelajaran</h5>
                        <h5 class="card-title">Judul</h5>
                        <h6 class="card-title">Nama Penulis</h6>
                        <h6 class="card-title">Tanggal Terbit</h6>
                        <h6 class="card-title">Kurikulum</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nis Phasellus imperdiet, nulla et dictum interdum, nis dfa sd</p>
                        <div class="col">
                            <button class="btn btn-outline-download"><i class="fa fa-download"></i> Download File</button>
                            <button class="btn btn-outline-youtube"><i class="fa fa-play"></i> Tonton Media Ajar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Perangkat Pembelajaran</h5>
                        <h5 class="card-title">Judul</h5>
                        <h6 class="card-title">Nama Penulis</h6>
                        <h6 class="card-title">Tanggal Terbit</h6>
                        <h6 class="card-title">Kurikulum</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, terdum, ices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nis Phasellus imperdiet, nulla et dictum interdum, nis dfa sd</p>
                        <div class="col">
                            <button class="btn btn-outline-download"><i class="fa fa-download"></i> Download File</button>
                            <button class="btn btn-outline-youtube"><i class="fa fa-play"></i> Tonton Media Ajar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Perangkat Pembelajaran</h5>
                        <h5 class="card-title">Judul</h5>
                        <h6 class="card-title">Nama Penulis</h6>
                        <h6 class="card-title">Tanggal Terbit</h6>
                        <h6 class="card-title">Kurikulum</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, as vitae scelerisque eni est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nis Phasellus imperdiet, nulla et dictum interdum, nis dfa sd</p>
                        <div class="col">
                            <button class="btn btn-outline-download"><i class="fa fa-download"></i> Download File</button>
                            <button class="btn btn-outline-youtube"><i class="fa fa-play"></i> Tonton Media Ajar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Perangkat Pembelajaran</h5>
                        <h5 class="card-title">Judul</h5>
                        <h6 class="card-title">Nama Penulis</h6>
                        <h6 class="card-title">Tanggal Terbit</h6>
                        <h6 class="card-title">Kurikulum</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. nterdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nis Phasellus imperdiet, nulla et dictum interdum, nis dfa sd</p>
                        <div class="col">
                            <button class="btn btn-outline-download"><i class="fa fa-download"></i> Download File</button>
                            <button class="btn btn-outline-youtube"><i class="fa fa-play"></i> Tonton Media Ajar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Perangkat Pembelajaran</h5>
                        <h5 class="card-title">Judul</h5>
                        <h6 class="card-title">Nama Penulis</h6>
                        <h6 class="card-title">Tanggal Terbit</h6>
                        <h6 class="card-title">Kurikulum</h6>rdum, nisi lorem egestas vita
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum intee erdum, nis dfa sd</p>
                        <div class="col">
                            <button class="btn btn-outline-download"><i class="fa fa-download"></i> Download File</button>
                            <button class="btn btn-outline-youtube"><i class="fa fa-play"></i> Tonton Media Ajar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Perangkat Pembelajaran</h5>
                        <h5 class="card-title">Judul</h5>
                        <h6 class="card-title">Nama Penulis</h6>
                        <h6 class="card-title">Tanggal Terbit</h6>
                        <h6 class="card-title">Kurikulum</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nis Phasellus imperdiet, nulla et dictum interdum, nis dfa sd</p>
                        <div class="col">
                            <button class="btn btn-outline-download"><i class="fa fa-download"></i> Download File</button>
                            <button class="btn btn-outline-youtube"><i class="fa fa-play"></i> Tonton Media Ajar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

    @include ('topbutton')

    @include ('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>