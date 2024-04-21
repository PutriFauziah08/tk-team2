<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK - Web Programming</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/script.js">
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('assets/js/script.js') }}>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

      <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
 integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
 crossorigin=""></script>

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
        @include('slider')
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
                    <div class="col-md-2 col-sm-2">
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
                    <div class="col-md-2 col-sm-2">
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
                    <div class="col-md-2 col-sm-2">
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
                    <a href="#">
                        <h6>Baca Selengkapnya...</h6>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="item">
                    <img src="images/img_call.png" class="info-img">
                    <h4>Panggilan Darurat</h4>
                    <a href="#">
                        <h6>Baca Selengkapnya...</h6>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="item">
                    <img src="images/img_rain.png" class="info-img">
                    <h4>Perkiraan Cuaca</h4>
                    <a href="#">
                        <h6>Baca Selengkapnya...</h6>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div style="padding: 10%">
        <div>
            <h1>Informasi ketinggian Air</h1>
            <canvas id="myChart"></canvas>
        </div>
        <div>
            <div id="map" style="height: 360px">map</div>
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
    <script src="js/bootstrap.js"></script>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Kota 1', 'Kota 2', 'Kota 3', 'Kota 4', 'Kota 5', 'Kota 6', 'Kota 7'],
                datasets: [{
                    label: 'Ketinggian Air',
                    data: [12, 19, 3, 5, 2, 3, 1],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


<script>
    var greenIcon = L.icon({
    iconUrl: 'download.png',
    // shadowUrl: 'download.png',

    iconSize:     [38, 50], // size of the icon
    // shadowSize:   [50, 64], // size of the shadow
    // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
    var map = L.map('map').setView([51.505, -0.09], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

L.marker([51.5, -0.09], {icon: greenIcon}).addTo(map);
L.marker([51.508, -0.09], {icon: greenIcon}).addTo(map);
L.marker([51.508, -0.098], {icon: greenIcon}).addTo(map);
L.marker([51.50811, -0.0918], {icon: greenIcon}).addTo(map);
L.marker([51.50821, -0.0928], {icon: greenIcon}).addTo(map);
L.marker([51.50881, -0.0988], {icon: greenIcon}).addTo(map);

</script>

</body>

</html>
