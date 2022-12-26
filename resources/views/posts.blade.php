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
          <form method="POST" action="/berilmu/post" enctype="multipart/form-data">
            @csrf
            <h3 class="h6 mb-4">Topik Materi</h3>
              <textarea class="form-control" id="validationTextarea" placeholder="Contoh: Teks Eksposisi" required></textarea>
              <div class="invalid-feedback" style="padding-bottom: 2%;">
                Please enter a Notes in the textarea.
              </div>  

            <h3 class="h6 mb-4">Isilah dengan jenis Perangkat Pembelajaran, Kurikulum, Jenjang, Kelas, dan Mata Pelajaran yang sesuai</h3>
              <textarea class="form-control" id="validationTextarea" placeholder="Contoh: RPP, Kurikulum 2013, Jenjang SMP, Kelas 8, Bahasa Indonesia" required></textarea>
              <div class="invalid-feedback">
                Please enter a Notes in the textarea.
              </div>

            <h3 class="h6 mb-4" style="padding-top: 1.5pc;">Perangkat Pembelajaran</h3>
              <div class="input-group mb-4">
                <input type="file" accept="application/pdf" class="form-control" id="inputGroupFile02" aria-label="file example" required>
                <label class="input-group-text" for="inputGroupFile02">RPP, Silabus, Modul Ajar, ATP.pdf</label>
                <div class="invalid-feedback">Example invalid form file feedback</div>
              </div> 
            
            <h3 class="h6 mb-4">Media Pembelajaran</h3>
            <input type="url" class="form-control" placeholder="https://youtu.be/" required> 
          </div>
        </div>
        
        <div class="hstack gap-3" style="padding-top: 1%; padding-bottom:5%;">
          <input class="btn btn-outline-primary btn-lg" type="submit" value="Save">
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