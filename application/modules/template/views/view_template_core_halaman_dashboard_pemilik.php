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
<link rel="shortcut icon" href="assets/images/favicon.ico">

<!--  Fonts
  ========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--  Css Link
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
<style>
    
#image-preview{
    display:none;
    width : 150px;
    height : 150px;
}
#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
}
#output_image
{
 max-width:300px;
}
</style>
</head>
<body>
    <?php 
            $rows = $this->db->query("SELECT * FROM t_login where no_telp='".$this->session->no_telp."'")->row_array();
            $id=$rows['id_user'];
            
 ?>

<div id="page-wrapper">
    <div class="row">
        <div class="full-row top-bar py-2 bg-secondary">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="dashboard-top-left"> <a class="float-left dashboard-logo mr-4" href="index-1.html"><img src="assets/images/logo/logo-icon.png" alt=""></a>
                            <div class="dropdown float-left mr-4"> <!-- <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboard Option </a> -->
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
                            </div>
                            <div class="d-flex"> <a class="text-primary hover-text-primary mr-4 font-18" href="#"><i class="fas fa-bell"></i><sup class="text-white">10</sup></a> <a class="text-primary hover-text-primary mr-4 font-18" href="#"><i class="fas fa-comments"></i><sup class="text-white">5</sup></a> <a class="text-white hover-text-primary d-none d-md-block" href="dashboard-submit-property.html">+ Tambah Kost</a> </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="dashboard-top-right float-left float-lg-right mt-2 mt-lg-0">
                            <div class="text-white float-left mr-4"> <span class="text-primary"></span></div>
                            <div class="dropdown float-left"> <a class="dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('assets/images/foto_login/'.$rows['foto_user']); ?>" alt=""><?php echo $rows['nama']; ?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2"> <a class="dropdown-item" href="<?php echo base_url('profil_saya') ?>">Profile</a> <a class="dropdown-item" href="<?php echo base_url('halaman_dashboard/log_out') ?>">Keluar</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="full-row dashboard py-0  bg-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1 col-xl-2 bg-secondary">
                        <div class="row">
                            <div class="dashboard-sidebar flat-small py-4 w-100">
                                <h6 class="text-primary border-bottom-gray pb-3 my-2 pl-3 d-md-none d-xl-block">Dasboard Pemilik</h6>
                                <ul class="mb-4 text-white">
                                    <li><a href="<?php echo base_url('halaman_dashboard'); ?>"><i class="flaticon-dashboard mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Dashboard</span></a></li>
                                    <li><a href="<?php echo base_url('pesan_pemilik'); ?>"><i class="flaticon-email mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Pesan</span><sup class="text-primary">(05)</sup></a></li>
                                    <li><a href="<?php echo base_url('komentar_pemilik'); ?>"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Komentar</span><sup class="text-primary">(12)</sup></a></li>
                                </ul>
                                <h6 class="text-primary border-bottom-gray pb-3 my-2 pl-3 d-md-none d-xl-block">Kelola Kost</h6>
                                <ul class="mb-4 text-white">
                                    <li><a href="dashboard-booking-pemilik.html"><i class="flaticon-calendar mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Kos Yang Tersewa</span></a></li>
                                    <li><a href="dashboard-listing-pemilik.html"><i class="flaticon-house-1 mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Kos Saya</span></a></li>
                                    <li><a href="<?php echo base_url('kamar_saya'); ?>"><i class="flaticon-house-1 mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Kamar Saya</span></a></li>
                                    <li><a href="dashboard-faktur-pemilik.html"><i class="flaticon-bill mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Faktur</span></a></li>
                                    <li><a href="dashboard-pemesanan-pemilik.html"><i class="flaticon-tax mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Permintaan Pemesanan</span></a></li>
                                    <li><a href="dashboard-submit-property.html"><i class="flaticon-forward mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Tambah Kost</span></a></li>
                                 </ul>
                                <h6 class="text-primary border-bottom-gray pb-3 my-2 pl-3 d-md-none d-xl-block">Pengaturan</h6> 
                                <ul class="mb-4 text-white">
                                    <li><a href="<?php echo base_url('profil_saya') ?>"><i class="flaticon-seller mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Info Profil</span></a></li>
                                    <li><a href="<?php echo base_url('halaman_setting') ?>"><i class="flaticon-settings mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Setings</span></a></li>
                                    <li><a href="<?php echo base_url('cara_pendaftaran_pemilik'); ?>"><i class="flaticon-resume r-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Cara Pendaftaran kost</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <?php
                         $this->load->view($namamodule .'/'.$namafileview);
                     ?>
                           <div class="dashboard-copyright bg-white py-4 text-center w-100">© 2020 Rajakost</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Modal -->

<!-- Wrapper End --> 
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--  Js Link
============================================================--> 
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
<script type="text/javascript">
  $(document).ready(function(){
    $('.dropify').dropify({
      messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
    });
  });
  
</script>
<script>
    function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>

</body>

<!-- Mirrored from unicoderbd.com/theme/html/homex/dashboard-submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 03:31:19 GMT -->
</html>