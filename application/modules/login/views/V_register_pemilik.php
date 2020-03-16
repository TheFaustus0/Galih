<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from unicoderbd.com/theme/html/homex/dashboard-submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 03:31:19 GMT -->
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
<link rel="shortcut icon" href="images/favicon.ico">

<!--    Fonts
    ========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--    Css Link
    ========================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropify/dropify.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-slider.css') ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery-ui.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/layerslider.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/color.css') ?>" id="color-change">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/flaticon/flaticon.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dropzone.css') ?> " />

<!--    Title
    =========================================================-->
<title>Homex - Real Estate Template</title>
</head>
<body>

<div id="page-wrapper">
    <div class="row"> 
        <!--    Header One
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
                                    <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index-1.html"><img class="nav-logo" src="images/logo/logo.png" alt=""></a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mr-auto" style="margin-left: 74%;">
                                               <li  class="hover-text-primary"> <a href="about.html" class="d-block"style="color: black;">Tentang</a> </li> 
                                            </ul>
                                            <div class="dropdown" style="margin-right:2%;"> <a class="dropdown-toggle hover-text-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">Bantuan</a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="faq.html">Faq</a> <a class="dropdown-item" href="contact.html">Kontak</a> </div>
                                            </div>
                                            <div class="dropdown" style="margin-right:2%;"> <a class="dropdown-toggle hover-text-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">Login</a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="login-pemilik.html">Pemilik</a><a class="dropdown-item" href="login-penyewa.html">Pencari</a></div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
        
        <!--    Banner
        ===============================================================-->
        <div class="bg-gray full-row py-5 page-banner">
            <div class="container">
                <div class="col-md-5" style="margin-left: 39%;">
                    <div class="col-md-6">
                        <h4 class="page-name float-left text-secondary mt-1 mb-0">Register Pemilik</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                    </div>
                    <div class="col-md-5" style="margin-left: 30%;">
                        <div class="mt-sm-50"><!--  <a href="login-pemilik.html" class="text-secondary mr-3">Login</a> -->
                            </li>
                            <!-- <a href="register-pemilik.html" class="down-active text-secondary">Register</a> -->
                        </div>
                            <form class="mt-5 icon-form" method="post" action="<?php echo base_url().'login/aksi_register_pemilik' ?>">
                                <div class="form-group user">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input id="exampleInputEmail1" type="text" name="username" class="form-control bg-gray" placeholder="">
                                </div>
                                 <div class="form-group user">
                                    <label for="exampleInputEmail1">Nomor Telepon</label>
                                    <input id="exampleInputEmail1" name="no_telp" type="text" class="form-control bg-gray" placeholder="">
                                </div>
                                <div class="form-group password">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input id="password" class="form-control bg-gray" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 6 Karakter' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="" required>
                                </div>
                                <div class="form-group password">
                                    <label for="exampleInputPassword2">Konfirmasi Password</label>
                                    <input id="password_two" class="form-control bg-gray" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Masukkan Password Yang Sama' : '');" placeholder="" required>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Terima Syarat dan Ketentuan</label>
                                </div>
                                <a  class="text-secondary hover-text-primary d-block mt-4" href="#">Lihat Syarat dan Ketentuan</a>
                                <br>
                                <h5>
                                     <button class="btn btn-primary btn-block">Kirim</button>
                                     </form>
                                     <a href="#" class="btn btn-danger btn-block">Kembali</a>
                                </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--    Footer
        ============================================================-->
        <footer class="full-row bg-gray p-0">
            <div class="container">
                <div  class="row">
                    <div class="col-lg-12">
                        <div class="divider py-80">
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <div class="footer-widget mb-4">
                                        <div class="footer-logo mb-4"> <a href="#"><img class="logo-bottom" src="images/logo/logo.png" alt="image"></a> </div>
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
                                                    <li><a href="#">Statistics</a></li> -->
                                                    <li><a href="#">Terms and Condition</a></li>
                                                    <li><a href="#">Get Support</a></li>
                                                    <li><a href="#">Freequenly Ask Question</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="footer-widget footer-nav mb-4">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">tautan langsung</h4>
                                                <ul>
                                                    <li><a href="#">Tentang kami</a></li>
                                                    <li><a href="#">Kost Unggulan</a></li>
                                                    <li><a href="#">Menjadi anggota</a></li>
                                                    <li><a href="#">Kirim Kots</a></li>
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
                    <div class="col-sm-6"> <span>© 2019 Homex All right reserved</span> </div>
                    <div class="col-sm-6">
                        <ul class="line-menu text-ordinary float-right">
                            <li><a href="#">Privacy & Policy</a></li>
                            <li>|</li>
                            <li><a href="#"> Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script> 
<!--jQuery Layer Slider --> 
<script src="<?php echo base_url('assets/js/greensock.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/layerslider.transitions.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/layerslider.kreaturamedia.jquery.js') ?>"></script> 
<!--jQuery Layer Slider --> 
<script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/tmpl.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.dependClass-0.1.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/draggable-0.1.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.slider.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/wow.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/YouTubePopUp.jquery.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/validate.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.cookie.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<script src="<?php echo base_url('assets/js/dropzone.js') ?> "></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dropify/dropify.min.js')?>"></script>
</body>

<!-- Mirrored from unicoderbd.com/theme/html/homex/dashboard-submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 03:31:19 GMT -->
</html>