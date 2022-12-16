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
  <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
    <h2 style="padding: 1% 0% 1% 5%;">Upload Perangkat Pembelajaran</h2>
  </div>

  <!-- Main content -->
  <form class="was-validated">
    <div class="row">
      <!-- Left side -->
      <div class="col-lg-8">
        <!-- Posts -->
        <div class="card mb-4">
          <div class="card-body">
            <div class="mb-3">
              <h3 class="h6 mb-4">Perangkat Pembelajaran</h3>
                <div class="input-group mb-3">
                  <input type="file" accept="application/pdf" class="form-control" id="inputGroupFile02" aria-label="file example" required>
                  <label class="input-group-text" for="inputGroupFile02">RPP, Silabus, Modul Ajar, ATP.pdf</label>
                  <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>            
            </div>
          
            <div class="mb-3">
              <h3 class="h6 mb-4">Media Pembelajaran</h3>
              <input type="url" class="form-control" placeholder="https://youtu.be/" required>
            </div>

            <div class="mb-3">
              <h3 class="h6 mb-4">Kurikulum</h3>
                <select class="form-select" required aria-label="select example">
                  <option selected disabled value="">Pilih Kurikulum...</option>
                  <option value="Kurikulum Merdeka">Kurikulum Merdeka</option>
                  <option value="Kurikulum 2013">Kurikulum 2013</option>
                </select>
              <div class="invalid-feedback">Example invalid select feedback</div>
            </div>

            <div class="mb-3">
              <h3 class="h6 mb-4">Jenjang</h3>
                <select class="form-select" required aria-label="select example">
                  <option selected disabled value="">Pilih Jenjang...</option>
                  <option value="SD/MI">SD/MI</option>
                  <option value="SMP/MTS">SMP/MTS</option>
                  <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                </select>
              <div class="invalid-feedback">Example invalid select feedback</div>
            </div>

            <div class="mb-3">
              <h3 class="h6 mb-4">Mata Pelajaran</h3>
                <select class="form-select" required aria-label="select example">
                  <option selected disabled value="">Pilih Mata Pelajaran...</option>
                  <option value="PKn">PKn</option>
                  <option value="Matematika">Matematika</option>
                  <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                  <option value="IPA">IPA</option>
                  <option value="IPS">IPS</option>
                  <option value="TIK">TIK</option>
                  <option value="Bahasa Inggris">Bahasa Inggris</option>
                  <option value="SBK">SBK</option>
                  <option value="PJOK">PJOK</option>
                  <option value="Fisika">Fisika</option>
                  <option value="Geologi">Geologi</option>
                  <option value="Kimia">Kimia</option>
                </select>
              <div class="invalid-feedback">Example invalid select feedback</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Right side -->
      <div class="col-lg-4">
        <!-- Basic information -->
        <div class="card mb-4">
          <div class="card-body was-validated">
            <h3 class="h6 mb-4"><label for="validationTextarea" class="form-label">Notes</label></h3>
            <div class="row">
              <div class="col-lg-12">
                <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                <div class="invalid-feedback">
                  Please enter a Notes in the textarea.
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Jenis Perangkat Pembelajaran -->
        <div class="card mb-4">
          <div class="card-body">
            <h3 class="h6">Jenis Perangkat Pembelajaran</h3>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
              <label class="form-check-label" for="validationFormCheck2">RPP</label>
            </div>
      
            <div class="form-check">
              <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
              <label class="form-check-label" for="validationFormCheck2">Silabus</label>
            </div>
            
            <div class="form-check">
              <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
              <label class="form-check-label" for="validationFormCheck2">Modul Ajar</label>
            </div>
          
            <div class="form-check">
              <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
              <label class="form-check-label" for="validationFormCheck2">ATP</label>
            </div>
          </div>
        </div>
        
        <div class="hstack gap-3" style="padding-top: 5%; padding-bottom:5%;">
          <input class="btn btn-outline-primary btn-lg" type="submit" value="Save">
          <input class="btn btn-outline-success btn-lg" type="reset" value="Clear">
          <a class="btn btn-outline-danger btn-lg" href="/profil" role="button">Back</a>
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

.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 10%);
}

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