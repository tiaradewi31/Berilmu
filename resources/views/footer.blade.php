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
      padding-bottom: 80px;
	  margin: 5px;
	  text-align: left;
	}
    .column-dua {
      flex: 33.33%;
	  height: 20px;
	  padding: 10px;
      padding-top: 80px;
      padding-left: 100px;
      padding-bottom: 80px;
	  margin: 5px;
    }
	.container-footer {
	   display: flex;
       background-color: rgb(136, 212, 2550);
	}	
</style>
</head>  
<body>
    <footer class="footer">
	    <div class="container-footer">
	        <div class="column" href="/about">
	            <h6> About Berilmu </h6>
                <h6> Perangkat Pembelajaran </h6>
	        </div>
	        <div class="column-dua" href="/">
                <img src="img/logoputih.png">
            </div>
	        <div class="column">
                <img src="img/Logo.png"  alt="" width="200">
	        </div>
	    </div>
    </footer>
</body>
</html>