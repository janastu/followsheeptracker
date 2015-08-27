<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BaaServer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/baa.css" rel="stylesheet">
  <link rel="stylesheet" href="./leaflet-0.7.3/leaflet.css" />
  <script src="./leaflet-0.7.3/leaflet.js"></script>
 </head>
 <body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">BaaServer</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="upload.php">Upload</a>
                    </li>
                    <li>
                        <a href="#">APK</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Map section -->
   <section id="maps">
     <div class="container">
  	<div id="map"></div>
      </div>
   </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

  <script>
   var map = L.map('map').setView([21, 77.58], 4);
   L.tileLayer( 'https://' + '{s}.tiles.mapbox.com/' + 'v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiamFuYXN0dSIsImEiOiIyODI0OTkyMjQyM2QyYzJmZjQ4MGY4ZWE1ZGNlZDRlNyJ9.QBstwv42I5bhvSPFB317uA', {
   maxZoom: 18,
   attribution: 'Map data &copy; <a href="http://openstreetmap.org/"> OpenStreetMap </a> contributors, ' +
   '<a href="http://creativecommons.org/"> CC-BY-SA </a>, ' +
   'Imagery © <a href="http://mapbox.com">Mapbox</a>',
   id: 'janastu.dfd9d706'
   }).addTo(map);
  </script>
 </body>
</html>

