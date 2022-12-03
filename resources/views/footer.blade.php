<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HTML</title>
<style>	
    .footer {
        background-color : rgb(136, 212, 255);
    }
	.column {
      flex: 33.33%;
	  height: 200px;
	  padding: 10px;
      padding-top: 80px;
      padding-left: 100px;
      padding-bottom: 60px;
	  margin: 5px;
	  text-align: left;
	}
    .column-dua {
      flex: 33.33%;
	  height: 20px;
	  padding: 10px;
      padding-top: 80px;
      padding-left: 160px;
      padding-bottom: 80px;
	  margin: 5px;
    }
	.container-footer {
	   display: flex;
       background-color: rgb(136, 212, 2550);

       padding-left: 50px;
       padding-bottom: 50px;
	}	

</style>
</head>  
<body>
    <footer class="footer">
	    <div class="container-footer">
	        <div class="column">
                <p>
                    <a href="/about" class="nav-link text-dark">About Berilmu</a>
                </p>
                <p>
                    <a href="/searchpage" class="nav-link text-dark">Cari Perangkat Pembelajaran</a>
                </p>
	        </div>
	        <div class="column-dua">
                <div class="sosmed">
                    <img src="img/gmail.png"  alt="" width="70">
                    <img src="img/instagram.png"  alt="" width="50">
                </div>
            </div>
	        <div class="column">
                <img src="img/togaberilmuputih.png"  alt="" width="200">
	        </div>
	    </div>
        <div class="text-center p-4">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Berilmu.com</a>
        </div>
    </footer>
</body>
</html>