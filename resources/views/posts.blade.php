<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Posts | BERILMU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid">

<div class="container">
  <!-- Title -->
  <div class="d-flex align-items-lg-center py-4 flex-column">
      <img src="img/logotoga.png"  alt="" width="50px;"> 
      <h2 style="padding: 1% 0% 1% 5%;">Upload Perangkat Pembelajaran</h2>
  </div>

  <!-- Main content -->
  <form class="was-validated">
    <div class="row">
        <div class="card mb-4">
          <div class="card-body">
          <div class="mb-3">
            <form method="POST" action="searchpage" enctype="multipart/form-data">
            @csrf            
            <label for="title">Judul</label>
              <input class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Contoh: RPP Matematika" required autofocus value = "{{old('title')}}">
                <div class="invalid-feedback" style="padding-bottom: 2%;">
                Wajib diisi
                </div>  
          </div>                  
            
          <div class="mb-3">
            <label for="category_id"><h6>Jenis Perangkat Pembelajaran</h6></label>
              <select name="category_id" id="category" required>
                  <option value="">Pilih Satu</option>
                  @foreach ($class as $categories)
                    <option value="{{$categories->id}}">{{$categories->name}}</option>
                  @endforeach
              </select>
          </div>
              <!-- <div class="invalid-feedback">
                Please enter a Notes in the textarea.
              </div> -->
          <div class="mb-3">
            <label for="excerpt">Keterangan</label>
              <textarea class="form-control" id="excerpt" placeholder="Beri keterangan mengenai kurikulum, kelas dan jenjang pendidikan" required value = "{{old('excerpt')}}"></textarea>
                <div class="invalid-feedback">
                Wajib diisi
                </div>
          </div>                          

          <div class="mb-3">
            <h6>Perangkat Pembelajaran</h6>
              <div class="input-group mb-4">
                <input type="file" accept="application/pdf" class="form-control" id="inputGroupFile02" aria-label="file example" required>
                <label class="input-group-text" for="inputGroupFile02">RPP, Silabus, Modul Ajar, ATP.pdf</label>
                <div class="invalid-feedback">Wajib diisi</div>
              </div> 
          </div>          
          </div>
        </div>
        
        <div class="hstack gap-3" style="padding-top: 1%; padding-bottom:5%;">
          <button class="btn btn-outline-success btn-lg" type="submit"> save </button>
          <input class="btn btn-outline-success btn-lg" type="reset" value="Clear">
          <a class="btn btn-outline-danger btn-lg" href="/homepage" role="button">Back</a>
        </div>

      </div>
    </div>
  </form>
</div>

  </div>

<style type="text/css">
body{
    background:#E8F2FD;
}

/* .card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 10%);
} */

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: 1rem;
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.5rem 1.5rem;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>