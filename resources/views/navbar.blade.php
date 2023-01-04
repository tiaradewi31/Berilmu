<header class="navbar fixed-top navbar-expand-lg navbar-dark bd-navbar" style= "background-color : rgb(136, 212, 255)">
    <nav class="container bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">
        <a class="navbar-brand" href="homepage">
            <img src="img/logoputih.png"  alt="" width="37%;">
        </a>    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="navMenu">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <h4><a class="nav-link" style= "color : black; padding-top: 10px;" href="\profil"><b>Welcome Back, {{ auth()->user()->name }} </b></a></h4>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"  style= "color : black; padding-right: 20px; padding-top: 2px;" href="\login"><b>LOG IN</b></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" style= "color : black; padding-top: 2px;" href="\register"><b>REGISTER</b></a>
                        </li> -->
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>