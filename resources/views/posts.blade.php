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
    <h2 style="padding: 1% 0% 1% 0%;">Posts Perangkat Pembelajaran</h2>
  </div>

  <!-- Main content -->
  <div class="row">
    <!-- Left side -->
    <div class="col-lg-8">
      <!-- Basic information -->
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="h6 mb-4">Notes</h3>
          <div class="row">
            <div class="col-lg-12">
            <textarea class="form-control" rows="3"></textarea>
            </div>
          </div>
        </div>
      </div>
      <!-- Address -->
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="h6 mb-4">Perangkat Pembelajaran</h3>
          <div class="input-group mb-3">
            <input type="file" accept="application/pdf" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">RPP, Silabus, Modul Ajar, ATP.pdf</label>
          </div>
          <h3 class="h6 mb-4">Media Pembelajaran</h3>
          <div class="mb-3">
            <input type="url" ac class="form-control" id="exampleFormControlInput1" placeholder="https://youtu.be/">
          </div>
          <h3 class="h6 mb-4">Kurikulum</h3>
          <div class="mb-3">
            <select class="form-select">
              <option value="Kurikulum Merdeka" selected="">Kurikulum Merdeka</option>
              <option value="Kurikulum 2013">Kurikulum 2013</option>
            </select>
          </div>
          <h3 class="h6 mb-4">Jenjang</h3>
          <div class="mb-3">
            <select class="form-select">
              <option value="SD/MI" selected="">SD/MI</option>
              <option value="SMP/MTS">SMP/MTS</option>
              <option value="SMA/SMK/MA">SMA/SMK/MA</option>
            </select>
          </div>
          <h3 class="h6 mb-4">Mata Pelajaran</h3>
          <div class="mb-3">
              <select class="form-select">
              <option value="PKn" selected="">PKn</option>
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
              <option value="Kimis">Kimia</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <!-- Right side -->
    <div class="col-lg-4">
      <!-- Status -->
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="h6">Status</h3>
          <select class="form-select">
            <option value="draft" selected="">Draft</option>
            <option value="Post">Post</option>
          </select>
        </div>
      </div>
      <!-- Avatar -->
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="h6">Avatar</h3>
          <input class="form-control" type="file">
        </div>
      </div>
      <!-- Notes -->
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="h6">Notes</h3>
          <textarea class="form-control" rows="3"></textarea>
        </div>
      </div>
      <!-- Notification settings -->
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="h6">Notification Settings</h3>
          <ul class="list-group list-group-flush mx-n2">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">RPP</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Silabus</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Bahan Ajar</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">ATP</label>
            </div>
          </ul>
        </div>
      </div>
      <div class="hstack gap-3">
      <button class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span class="text">Cancel</span></button>
      <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Save</span></button>
    </div>
    </div>
  </div>
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