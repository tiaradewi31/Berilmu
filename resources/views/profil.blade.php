<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profil | BERILMU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @include('navbarsudahlogin')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

<div class="container">
    <div class="row">
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                    <button class="btn btn-block" type="button" data-toggle="modal"><a href="/editprofil">Edit</a></button>   
                    </div>
                    <div class="d-flex align-items-start">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                        <div class="w-100 ms-3">
                            <h4 class="my-0">Geneva McKnight</h4>
                            <p class="text-muted">@webdesigner</p>
                        </div>
                    </div>

                    <div class="mt-3">
                    <div class="form-floating mb-3">
                        <input type="email" readonly class="form-control-plaintext" id="floatingEmptyPlaintextInput" placeholder="name@example.com">
                        <label for="floatingEmptyPlaintextInput">Empty input</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder="name@example.com" value="name@example.com">
                        <label for="floatingPlaintextInput">Input with value</label>
                    </div>
                    <h4 class="font-13 text-uppercase">About Me :</h4>
                        <p class="text-muted font-13 mb-3">
                            Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                        </p>
                        <p class="text-muted mb-2 font-13"><strong>Nama Lengkap :</strong> <span class="ms-2">Geneva D. McKnight</span></p>
                    
                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">user@email.domain</span></p>
                    
                        <p class="text-muted mb-1 font-13"><strong>Instansi :</strong> <span class="ms-2">USA</span></p>
                    </div>                                    

                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item text-center border-primary text-primary"><i class="mdi mdi-instagram"></i></a>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item text-center border-info text-info"><i class="mdi mdi-google"></i></a>
                    </ul>   
                </div>                                 
            </div> <!-- end card -->

            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-6 border-end border-light">
                        <h2 class="mb-0 fw-bold">Posts</h2>
                        </div>
                        <div class="col-6 border-end border-light">
                            <h2 class="mb-0 fw-bold">87</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="header-title mb-3">
                        <a href="/posts" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center pb-1" id="tooltips-container">
                                <div class="w-100 ms-2">
                                    <h4 class="mb-1">Posts</h4>
                                </div>
                                <i class="mdi mdi-chevron-right h2"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xl-7">
            <div class="card">
                <div class="card-body">
                    <div class="col-6 border-end border-light">
                        <h2 class="mb-0 fw-bold" style="padding: 4% 4% 5% 5%;">Posts</h2>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <h5><b>RPP</b></h5>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <img src="img/SilabusTIK.webp"  alt="" width="90%">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h4>Judul</h4>
                                            <h4>Tanggal terbit</h4>
                                            <p class="">TThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <h5><b>Silabus</b></h5>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <img src="img/SilabusTIK.webp"  alt="" width="90%">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h4>Judul</h4>
                                            <h4>Tanggal terbit</h4>
                                            <p class="">TThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    <h5><b>Modul Ajar</b></h5>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <img src="img/SilabusTIK.webp"  alt="" width="90%">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h4>Judul</h4>
                                            <h4>Tanggal terbit</h4>
                                            <p class="">TThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    <h5><b>ATP</b></h5>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <img src="img/SilabusTIK.webp"  alt="" width="90%">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h4>Judul</h4>
                                            <h4>Tanggal terbit</h4>
                                            <p class="">TThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card-->
</div> <!-- end col -->

        <!-- User Form Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create User</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-1">
              <form class="form" novalidate="">
                <div class="row">
                  <div class="col">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Full Name</label>
                          <input class="form-control" type="text" name="name" placeholder="John Smith" value="John Smith">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Username</label>
                          <input class="form-control" type="text" name="username" placeholder="johnny.s" value="johnny.s">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" type="text" placeholder="user@example.com">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <div class="form-group">
                          <label>About</label>
                          <textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-sm-6 mb-3">
                    <div class="mb-2"><b>Change Password</b></div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Current Password</label>
                          <input class="form-control" type="password" placeholder="••••••">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>New Password</label>
                          <input class="form-control" type="password" placeholder="••••••">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                          <input class="form-control" type="password" placeholder="••••••"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                    <div class="mb-2"><b>Keeping in Touch</b></div>
                    <div class="row">
                      <div class="col">
                        <label>Email Notifications</label>
                        <div class="custom-controls-stacked px-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                            <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                            <label class="custom-control-label" for="notifications-news">Newsletter</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
                            <label class="custom-control-label" for="notifications-offers">Personal Offers</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- end row-->

</div>

<style type="text/css">
body{
    background-color:#ecf2f5;
    margin-top:100px;
}

.card {
    box-shadow: 0 0 2px 0 rgb(0 0 0 / 10%);
    margin-bottom: 24px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid #ecf2f5;
    border-radius: .25rem;
}
.avatar-lg {
    height: 4.5rem;
    width: 4.5rem;
}
.rounded-circle {
    border-radius: 50%!important;
}
.img-thumbnail {
    padding: .25rem;
    background-color: #ecf2f5;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}
.avatar-sm {
    height: 2.25rem;
    width: 2.25rem;
}
.rounded-circle {
    border-radius: 50%!important;
}
.me-2 {
    margin-right: .75rem!important;
}
.avatar-md {
    height: 3.5rem;
    width: 3.5rem;
}
.rounded-circle {
    border-radius: 50%!important;
}
.bg-transparent {
    --bs-bg-opacity: 1;
    background-color: transparent!important;
}
.post-user-comment-box {
    background-color: #f2f8fb;
    margin: 0 -.75rem;
    padding: 1rem;
    margin-top: 20px;
}
.simplebar-wrapper {
    overflow: hidden;
    width: inherit;
    height: inherit;
    max-width: inherit;
    max-height: inherit;
}
.simplebar-height-auto-observer-wrapper {
    box-sizing: inherit!important;
    height: 100%;
    width: 100%;
    max-width: 1px;
    position: relative;
    float: left;
    max-height: 1px;
    overflow: hidden;
    z-index: -1;
    padding: 0;
    margin: 0;
    pointer-events: none;
    flex-grow: inherit;
    flex-shrink: 0;
    flex-basis: 0;
}
.font-13 {
    font-size: 13px!important;
}
.btn-soft-info {
    color: #45bbe0;
    background-color: rgba(69,187,224,.18);
    border-color: rgba(69,187,224,.12);
}
.social-list-item {
    height: 2rem;
    width: 2rem;
    line-height: calc(2rem - 2px);
    display: block;
    border: 2px solid #adb5bd;
    border-radius: 50%;
    color: #adb5bd;
}
.comment-area-box .comment-area-btn {
    background-color: #f2f8fb;
    padding: 10px;
    border: 1px solid #dee2e6;
    border-top: none;
    border-radius: 0 0 .2rem .2rem;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>