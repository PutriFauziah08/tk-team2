<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK - Web Programming</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/script.js">

</head>

<body>
    <nav class="nav">
        <div class="wrapper">
            <div class="logo"><a href=''>Logo Website</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Info Banjir</a></li>
                    <li><a href="#">Berita</a></li>
                    <li><a href="login.php" class="btn-login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="banner">
        <?php include 'slider.php'; ?>
    </div>
 
    <div class="status-overview">
		<div class="container">
			<div class="col-md-6 col-sm-6">
				<div class="image">
					<img src="images/image1.png" class="img-responsive">
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="header">
                    <div class="col-sm-6">
                        <h3>Data Terkini</h3>
                    </div>
                    <div class="col-sm-6">
                        <h4>16 April 2024</h4>
                    </div>
				</div>
                <div class="item" style="background-color: #EF5C5C;">
                    <div class="col-md-5 col-sm-5">
                        <div class="grid-item">
                            <h3 style="font-weight: bold;">Awas</h3>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="grid-item" style="text-align:right;padding-right: 20px;">
                            <h3>1 Provinsi</h3>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2" >
                        <div class="grid-item" style="float: right;">
                            <a href="#"><img src="icons/arrow_right.png" class="grid-btn"></a>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-color: #F4AE5C;">
                    <div class="col-md-5 col-sm-5">
                        <div class="grid-item">
                            <h3 style="font-weight: bold;">Waspada</h3>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="grid-item" style="text-align:right;padding-right: 20px;">
                            <h3>0 Provinsi</h3>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2" >
                        <div class="grid-item" style="float: right;">
                            <a href="#"><img src="icons/arrow_right.png" class="grid-btn"></a>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-color: #FBDB6C;">
                    <div class="col-md-5 col-sm-5">
                        <div class="grid-item">
                            <h3 style="font-weight: bold;">Aman</h3>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="grid-item" style="text-align:right;padding-right: 20px;">
                            <h3>0 Provinsi</h3>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2" >
                        <div class="grid-item" style="float: right;">
                            <a href="#"><img src="icons/arrow_right.png" class="grid-btn"></a>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
    

    <div class="info-overview">
        <h3>Dapatkan Informasi Tentang Banjir</h3>
		<div class="container">
			<div class="col-md-4 col-sm-4">
                <div class="item">
                    <img src="images/img_flood.png" class="info-img">
                    <h4>Info Banjir</h4>
                    <a href="#"><h6>Baca Selengkapnya...</h6></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="item">
                    <img src="images/img_call.png" class="info-img">
                    <h4>Panggilan Darurat</h4>
                    <a href="#"><h6>Baca Selengkapnya...</h6></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="item">
                    <img src="images/img_rain.png" class="info-img">
                    <h4>Perkiraan Cuaca</h4>
                    <a href="#"><h6>Baca Selengkapnya...</h6></a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <h3>Logo Website</h3>
        </div>
        <div class="container">
            <div class="grid-item">
                        <a href="#"><img src="icons/youtube.png" class="footer-btn"></a>
                   
                        <a href="#"><img src="icons/tiktok.png" class="footer-btn"></a>
                  
                        <a href="#"><img src="icons/facebook.png" class="footer-btn"></a>
                    
                        <a href="#"><img src="icons/twitter.png" class="footer-btn"></a>
                   
                        <a href="#"><img src="icons/instagram.png" class="footer-btn"></a>
                    
                
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2024. <b>Team 2 </b> All Rights Reserved.
        </div>
    </div>
    


    <script src="js/script.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/bootstrap.js"></script></script>
</body>
</html>