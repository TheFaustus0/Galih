<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from unicoderbd.com/theme/html/homex/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 03:31:46 GMT -->
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Homex template">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="assets/images/favicon.ico">

<!--  Fonts
  ========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--  Css Link
  ========================================================-->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="assets/css/layerslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 <script src="http://maps.googleapis.com/maps/api/js"></script>
<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<script>
// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
    
}
  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-8.5830695,116.3202515),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>

<!--  Title
  =========================================================-->
<title>Homex - Real Estate Template</title>
</head>
<body>

<!--  Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
  <div class="d-flex justify-content-center y-middle position-relative">
    <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
    </div>
  </div>
</div>
--> 

<!-- Color Settings -->

<!-- End Color Settings -->

<div id="page-wrapper">
    <div class="row"> 
        <!--  Header One
        =============================================================-->
        <header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="top-contact list-text-white  d-table">
                                <li><a href="callto:012345678102"><i class="fas fa-phone-alt text-primary mr-1"></i> Tlp(012) 345 678 102</a></li>
                                <li><a href="mailto:office@example.com"><i class="fa fa-fax text-primary mr-1"></i>Fax(555)214 214 2149</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-primary-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index-1.html"><img class="nav-logo" src="assets/images/logo/logo.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto" style="margin-left: 81%;">
                                         <li  class="hover-text-primary"> <a href="about.html" class="d-block"style="color: black;">Tentang</a> </li> 
                                    </ul>
                                    <div class="dropdown" style="margin-right:2%;"> <a class="dropdown-toggle hover-text-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">Bantuan</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="faq.html">Faq</a> <a class="dropdown-item" href="contact.html">Kontak</a> </div>
                                    </div>
                                    <!-- <div class="dropdown" style="margin-right:2%;"> <a class="dropdown-toggle hover-text-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">Login</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="login-pemilik.html">Pemilik</a><a class="dropdown-item" href="login-penyewa.html">Pencari</a></div>
                                    </div> -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php
                         $this->load->view($namamodule .'/'.$namafileview);
                    ?>
                <footer class="full-row bg-gray p-0">
            <div class="container">
                <div  class="row">
                    <div class="col-lg-12">
                        <div class="divider py-80">
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <div class="footer-widget mb-4">
                                        <div class="footer-logo mb-4"> <a href="#"><img class="logo-bottom" src="assets/images/logo/logo.png" alt="image"></a> </div>
                                        <p class="pb-20">Tujuaan kami membuat rajakost agar memudahkan pemilik kost untuk menawarkan kostnya dan juga mempermudah si pencari kost kususnya di indonesia.</p>
                                        <a class="btn btn-primary mt-4" href="#">Registrasi Sekarang</a> </div>
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="footer-widget footer-nav mb-4">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Support</h4>
                                                <ul>
                                                    <!-- <li><a href="#">Forum</a></li> 
                                                    <li><a href="#">Statistik</a></li> -->
                                                    <li><a href="syarat-ketentuan.html">Syarat dan Ketentuan</a></li>
                                                    <li><a href="#">Didukung</a></li>
                                                    <li><a href="faq.html">Ajukan Pertanyaan dengan Bebas</a></li>
                                                    <li><a href="contact.html">Kontak</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="footer-widget footer-nav mb-4">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Tautan Langsung</h4>
                                                <ul>
                                                    <li><a href="about.html">Tentang kami</a></li>
                                                    <li><a href="#">Kost Unggulan</a></li>
                                                    <li><a href="#">Menjadi anggota</a></li>
                                                    <li><a href="#">Kirim Kos</a></li>
                                                    <li><a href="#">Bagaimana Cara Kerjanya</a></li>
                                                    <li><a href="#">Agen Kami</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="footer-widget">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Kontak Kami</h4>
                                                <ul>
                                                   <li>Rajakost</li>
                                                   <li>Telepon: 085-232-706-483</li>
                                                   <li>Fax: 555-535-89777</li>
                                                   <li>Email: rajakost@gmail.com</li>
                                                </ul>
                                            </div>
                                            <div class="footer-widget media-widget mt-4 text-secondary hover-text-primary"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-google-plus-g"></i></a> <a href="#"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fas fa-rss"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="col-sm-6"> <span>© 2020 Rajakost</span> </div>
                    <div class="col-sm-6">
                       <!--  <ul class="line-menu text-ordinary float-right">
                            <li><a href="#">Kebijakan pribadi</a></li>
                            <li>|</li>
                            <li><a href="#">Peta Situs</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </footer>
                <div class="row copyright">
                    <div class="col-sm-6"> <span>© 2020 Rajakost</span> </div>
                    <div class="col-sm-6">
                        <!-- <ul class="line-menu text-ordinary float-right">
                            <li><a href="#">Privacy & Policy</a></li>
                            <li>|</li>
                            <li><a href="#"> Site Map</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--  Js Link
============================================================--> 
<script src="assets/js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="assets/js/greensock.js"></script> 
<script src="assets/js/layerslider.transitions.js"></script> 
<script src="assets/js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="assets/js/popper.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script src="assets/js/tmpl.js"></script> 
<script src="assets/js/jquery.dependClass-0.1.js"></script> 
<script src="assets/js/draggable-0.1.js"></script> 
<script src="assets/js/jquery.slider.js"></script> 
<script src="assets/js/wow.js"></script> 
<script src="assets/js/YouTubePopUp.jquery.js"></script> 
<script src="assets/js/validate.js"></script> 
<script src="assets/js/jquery.cookie.js"></script> 
<script src="assets/js/custom.js"></script> 
<script src="assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBPZ-Erd-14Vf2AoPW2Pzlxssf6-2R3PPs"></script> 
<script src="assets/js/map/markerwithlabel_packed.js"></script> 
<script src="assets/js/map/infobox.js"></script> 
<script src="assets/js/map/custom-map.js"></script> 
<script>
(function($){
  var _latitude = 36.596165;
  var _longitude = -97.062988;
  createHomepageGoogleMap(_latitude,_longitude);
})(jQuery);
</script>
</body>

<!-- Mirrored from unicoderbd.com/theme/html/homex/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 03:31:46 GMT -->
</html>

