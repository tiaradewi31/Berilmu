<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    </style>
    <link rel="icon" href="http://berilmu-laravel.test/img/logoputih.png" type = "image/x-icon">
    <link rel="icon" href="http://127.0.0.1:8000/img/logoputih.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>BERILMU | Homepage</title>
    </head>
  <body>

  @include('navbarsudahlogin')

    <div class="container">
      <div class = "text-center" style="margin: 150px;">
      <style>
        body{
            background-color: #E8F2FD;
            background-size: cover;
            
        }
      </style>
        <h1>BERILMU<h1>
        <h5>Berbagi perangkat pembelajaran dari sekolah negeri dan swasta di Indonesia<h5>
        <form class="d-flex">
            <input class="form-control me-2" href type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
    <div class="custom_container">
        <div class="fitur_berilmu" style="padding-top: 300px;">
            <div class="fiturberilmu1">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top: 70px;padding-left: 200px;">
                        <h3>Simplest Drag and Drop Builder</h3>
                        <p class="">So simple, even a child could use!</p>
                        <span style="width: 40px;height: 3px;background: orange;display: inline-block;"> </span>
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
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <video class="desk-view" autoplay="" muted="" loop="" playsinline="" style="width:90%;" preload="none">
                            <source data-src="video/Silabus.mp4" type="video/mp4" src="video/Silabus.mp4">
                        </video>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top: 70px;padding-left: 200px;">
                        <h3>Super Powerful Character Builder</h3>
                        <p class="">So diverse, you can create Billions of unique characters.</p>
                        <span style="width: 40px;height: 3px;background: orange;display: inline-block;"> </span>
                    </div>
                </div>
            </div>
            <div class="fiturberilmu3">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top: 70px;padding-left: 200px;">
                        <h3>100M+ Stock Videos and Photos</h3>
                        <p class="">So ginormous, you can find anything you want.</p>
                        <span style="width: 40px;height: 3px;background: orange;display: inline-block;"> </span>
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
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <video class="desk-view" autoplay="" muted="" loop="" playsinline="" style="width:90%;" preload="none">
                            <source data-src="video/Bahan Ajar.mp4" type="video/mp4" src="video/Bahan Ajar.mp4">
                        </video>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top: 70px;padding-left: 200px;">
                         <h3>Super Powerful Character Builder</h3>
                        <p class="">So diverse, you can create Billions of unique characters.</p>
                        <span style="width: 40px;height: 3px;background: orange;display: inline-block;"> </span>
                    </div>
                </div>
            </div>
            <div class="fiturberilmu5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12" style="padding-top: 70px;padding-left: 200px;">
                        <h3>100M+ Stock Videos and Photos</h3>
                        <p class="">So ginormous, you can find anything you want.</p>
                        <span style="width: 40px;height: 3px;background: orange;display: inline-block;"> </span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <video class="desk-view" autoplay="" muted="" loop="" playsinline="" style="width:90%;" preload="none">
                            <source data-src="video/ATP.mp4" type="video/mp4" src="video/ATP.mp4">
                        </video>
                    </div>
                 </div>
            </div>
        </div>
        <img src="img/bgguru.png" alt="" width="75%" style="padding: 0% 0% 0% 28%;">
    </div>

    @include ('topbutton')
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>