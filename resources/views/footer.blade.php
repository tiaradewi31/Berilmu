<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .body{
            display: flex;
            /* margin: 0;
            padding: 0; */
            box-sizing: border-box;
            background: rgb(136, 212, 255);
            font-family: sans-serif;
        }
        .footer{
            /* bottom: 0;
            left: 0;
            right: 0; */
            background: rgb(136, 212, 255);
            height: auto;
            width: 100vw;

            padding-top: 40px;
            color: #fff;
        }
        .footer-content{
            background: rgb(136, 212, 255);
            width: 100vw;
            /* padding: 20px; */
            padding-top: 2%;
            padding-bottom: 40px;
            text-align: center;
        }
        .footer-content p a{
            text-decoration: none;
            text-align: center;
            max-width: 500px;
            /* margin: 10px auto; */
            line-height: 28px;
            font-size: 14px;
            color: black;
            background: rgb(136, 212, 255);
        }
        .footer-bottom{
            background: rgb(136, 212, 255);
            width: 100vw;
            padding-bottom: 2%;
            text-align: center;
            
        }
    </style>
</head>

<body>
    <footer>
        <div class="footer-content">
            <img src="img/togaberilmuputih.png"  alt="" width="200">
            <p>
                <a href="/about">About Berilmu</a>
            </p>
            <img src="img/gmail.png"  alt="" width="40px">
            <img src="img/instagram.png"  alt="" width="30px">
        </div>
        <div class="footer-bottom">
            <div class="text-center" style= "padding-bottom: 15px; font-family: 'Poppins', Sans-serif; src: url(https://fonts.google.com/specimen/Poppins?query=Poppins);">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Berilmu.com</a>
            </div>
        </div>
    </footer>
</body>
</html>