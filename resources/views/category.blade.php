<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    </style>
    <link rel="icon" href="img/logotoga.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>BERILMU | Jenis Perangkat Pembelajaran</title>
    </head>
  <body>

  @include('navbar')

    <div class="container">
      <div class = "text-center" style="margin:100px 0; font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Poppins?query=Poppins);">
        <h3><b>JENIS PERANGKAT PEMBELAJARAN : {{$category}}</b><h3>
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
        @foreach ($posts as $post)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="mb-3">{{$post->title}}</h5>
                        <p>Jenis: <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
                        <p class="card-text">{{$post->excerpt}}</p>
                        <div class="col"> 
                            <button class="btn btn-outline-download"><i class="fa fa-download"></i> Download File</button>
                            <button class="btn btn-outline-youtube"><i class="fa fa-play"></i> Tonton Media Ajar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
  </div>

    @include ('topbutton')

    @include ('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>