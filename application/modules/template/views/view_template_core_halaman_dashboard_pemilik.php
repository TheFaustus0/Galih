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
<link rel="stylesheet" type="text/css" href="assets/dropify/dropify.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="assets/css/layerslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">


<!--  Title
  =========================================================-->
<title>Homex - Real Estate Template</title>
<style>
    
#image-preview{
    display:none;
    width : 150px;
    height : 150px;
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
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2"> <a class="dropdown-item" href="dashboard-personal-info-pemilik.html">Profile</a> <a class="dropdown-item" href="<?php echo base_url('halaman_dashboard/log_out') ?>">Keluar</a> </div>
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
                                    <li><a href="dashboard-massanger-pemilik.html"><i class="flaticon-dashboard mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Dashboard</span></a></li>
                                    <li><a href="dashboard-message-pemilik.html"><i class="flaticon-email mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Pesan</span><sup class="text-primary">(05)</sup></a></li>
                                    <li><a href="dashboard-comment-pemilik.html"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Komentar</span><sup class="text-primary">(12)</sup></a></li>
                                </ul>
                                <h6 class="text-primary border-bottom-gray pb-3 my-2 pl-3 d-md-none d-xl-block">Kelola Kost</h6>
                                <ul class="mb-4 text-white">
                                    <li><a href="dashboard-booking-pemilik.html"><i class="flaticon-calendar mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Kos Yang Tersewa</span></a></li>
                                    <li><a href="dashboard-listing-pemilik.html"><i class="flaticon-house-1 mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Kos Saya</span></a></li>
                                    <li><a href="dashboard-faktur-pemilik.html"><i class="flaticon-bill mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Faktur</span></a></li>
                                    <li><a href="dashboard-pemesanan-pemilik.html"><i class="flaticon-tax mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Permintaan Pemesanan</span></a></li>
                                    <li><a href="dashboard-submit-property.html"><i class="flaticon-forward mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Tambah Kost</span></a></li>
                                 </ul>
                                <h6 class="text-primary border-bottom-gray pb-3 my-2 pl-3 d-md-none d-xl-block">Pengaturan</h6> 
                                <ul class="mb-4 text-white">
                                    <li><a href="dashboard-personal-info-pemilik.html"><i class="flaticon-seller mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Info Profil</span></a></li>
                                    <li><a href="dashboard-system-setting-pemilik.html"><i class="flaticon-settings mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Setings</span></a></li>
                                    <li><a href="cara-pendaftaran-pemilik.html"><i class="flaticon-resume r-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Cara Pendaftaran kost</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <?php
                         $this->load->view($namamodule .'/'.$namafileview);
                     ?>
                            <div class="dashboard-copyright bg-white py-4 text-center w-100"><p style="color: green;">© 2020 Rajakost</p></div>
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
<script src="assets/js/chart.min.js"></script> 
<script src="assets/js/wow.js"></script> 
<script src="assets/js/YouTubePopUchart.min.html"></script> 
<script src="assets/js/validate.js"></script> 
<script src="assets/js/jquery.cookie.js"></script> 
<script src="assets/js/custom.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/dropify/dropify.min.js"></script>
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <!-- <script>
        $('#combo').change(function(){
    $('#myOptionsDiv').html(''); //added this to clear the div before setting inputs
    var num =$(this).val();
    for(var i = 0; i < num; i++){
      $('#myOptionsDiv').append(
         '<div class="col-md-12 col-xl-12">
                        '<div class="row">
                            '<div class="dashboard-panel w-100">
                                '<h4 class="text-secondary mb-4">Tambahkan Kamar Sesuai Denah Lantai </h4>
                                '<div class="submit-form p-5 bg-white">
                                  '<div class="row">
                                    '<div class="col-md-12"> </div>
                                    '<div class="col-md-12">
                                '<img id="image-preview" alt="image preview"/><br/>
                                '<input type="file" name="image[i]" id="image-source" onchange="previewImage();"/>
                                  '<br>
                              '</div>
                                  '</div>
                                        '<div class="description">
                                            '<div class="row">
                                                '<div class="col-lg-12 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Nama Kamar :</label>
                                                        '<input type="text" name="nama_kamar" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3 col-sm-3">
                                                  '<div class="form-group">
                                                        '<label>Ukuran Kamar :</label>
                                                        '<input type="text" name="ukuran_kamar" class="form-control" placeholder="_ X _">
                                                    '</div>
                                                '</div>
                                                '<div class="col-lg-6 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Tipe Kost :</label>
                                                        '<select class="form-control" name="gender">
                                                            '<option></option>
                                                            '<option value="laki-laki">Laki - Laki</option>
                                                            '<option value="wanita">Wanita</option>
                                                        '</select>
                                                    '</div>
                                                '</div>
                                                '<div class="col-lg-3"> </div>
                                            '</div>
                                        '</div>
                                        '<div class="description mt-4">
                                            '<h5 class="text-secondary">Deskripsi</h5>
                                            '<hr>
                                            '<div class="row">
                                                '<div class="col-lg-12 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Deskripsi</label>
                                '<textarea class="form-control bg-gray" placeholder="Write Details..." rows="6" name="deskripsi_kamar"></textarea>
                                                    '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                        '<div class="property-location mt-4">
                                          '<h5 class="text-secondary">Harga</h5>
                                          '<hr>
                                            '<div class="row">
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perhari" placeholder="PerHari" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perminggu" class="form-control" placeholder="PerMinggu">
                                                    '</div>
                                                '</div>
                                                  '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perbulan" placeholder="PerBulan" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="pertahun" class="form-control" placeholder="PerTahun">
                                                    '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                        '<div class="additional-feature mt-4">
                                            '<h5 class="text-secondary mb-3">Fitur Tambahan :</h5>
                                            '<div class="row">
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="kulkas" name="kulkas">
                                                          '<label class="custom-control-label" for="kulkas">kulkas</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="mesincuci" name="mesincuci">
                                                          '<label class="custom-control-label" for="mesincuci">Mesin Cuci</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="sofa" name="sofa">
                                                          '<label class="custom-control-label" for="sofa">Sofa</label>
                                                        '</div>
                                                    '</div>
                                                '<div class="col-lg-3">
                                                       '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="wifi" name="wifi">
                                                          '<label class="custom-control-label" for="wifi">Wifi</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="Listrik" name="Listrik">
                                                          '<label class="custom-control-label" for="Listrik">Listrik</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="parkir_mobile" name="parkir">
                                                          '<label class="custom-control-label" for="parkir_mobile">Kasur</label>
                                                        '</div>
                                                '</div>
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="air" name="air">
                                                          '<label class="custom-control-label" for="air">Air</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="lemari" name="ac">
                                                          '<label class="custom-control-label" for="lemari">Lemari</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="kasur" name="ac">
                                                          '<label class="custom-control-label" for="kasur">Kamar Mandi</label>
                                                        '</div>
                                                '</div>
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="tv" name="tv">
                                                          '<label class="custom-control-label" for="tv">TV</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="heater" name="tv">
                                                          '<label class="custom-control-label" for="heater">Water Heater</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="dapur" name="tv">
                                                          '<label class="custom-control-label" for="dapur">Dapur</label>
                                                        '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                '</div>
                            '</div>
                        '</div>
                    '</div>'
        );
      }
  });
    </script>
    <script>
        $('#comboo').change(function(){
    $('#myOptionDiv').html(''); //added this to clear the div before setting inputs
    var nu =$(this).val();
    for(var l = 0; l < nu; l++){
      $('#myOptionDiv').append(
                 '<div class="col-md-12 col-xl-12">
                        '<div class="row">
                            '<div class="dashboard-panel w-100">
                                '<h4 class="text-secondary mb-4">Tambahkan Kamar Sesuai Denah Lantai </h4>
                                '<div class="submit-form p-5 bg-white">
                                  '<div class="row">
                                    '<div class="col-md-12"> </div>
                                    '<div class="col-md-12">
                                '<img id="image-preview" alt="image preview"/><br/><input type="file" id="image-source" onchange="previewImage();"/>
                                  '<br>
                              '</div>
                                  '</div>
                                        '<div class="description">
                                            '<div class="row">
                                                '<div class="col-lg-12 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Nama Kamar :</label>
                                                        '<input type="text" name="nama_kamar" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3 col-sm-3">
                                                  '<div class="form-group">
                                                        '<label>Ukuran Kamar :</label>
                                                        '<input type="text" name="ukuran_kamar" class="form-control" placeholder="_ X _">
                                                    '</div>
                                                '</div>
                                                '<div class="col-lg-6 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Tipe Kost :</label>
                                                        '<select class="form-control" name="gender">
                                                            '<option></option>
                                                            '<option value="laki-laki">Laki - Laki</option>
                                                            '<option value="wanita">Wanita</option>
                                                        '</select>
                                                    '</div>
                                                '</div>
                                                '<div class="col-lg-3"> </div>
                                            '</div>
                                        '</div>
                                        '<div class="description mt-4">
                                            '<h5 class="text-secondary">Deskripsi</h5>
                                            '<hr>
                                            '<div class="row">
                                                '<div class="col-lg-12 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Deskripsi</label>
                                '<textarea class="form-control bg-gray" placeholder="Write Details..." rows="6" name="deskripsi_kamar"></textarea>
                                                    '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                        '<div class="property-location mt-4">
                                          '<h5 class="text-secondary">Harga</h5>
                                          '<hr>
                                            '<div class="row">
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perhari" placeholder="PerHari" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perminggu" class="form-control" placeholder="PerMinggu">
                                                    '</div>
                                                '</div>
                                                  '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perbulan" placeholder="PerBulan" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="pertahun" class="form-control" placeholder="PerTahun">
                                                    '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                        '<div class="additional-feature mt-4">
                                            '<h5 class="text-secondary mb-3">Fitur Tambahan :</h5>
                                            '<div class="row">
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="kulkas" name="kulkas">
                                                          '<label class="custom-control-label" for="kulkas">kulkas</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="mesincuci" name="mesincuci">
                                                          '<label class="custom-control-label" for="mesincuci">Mesin Cuci</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="sofa" name="sofa">
                                                          '<label class="custom-control-label" for="sofa">Sofa</label>
                                                        '</div>
                                                    '</div>
                                                '<div class="col-lg-3">
                                                       '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="wifi" name="wifi">
                                                          '<label class="custom-control-label" for="wifi">Wifi</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="Listrik" name="Listrik">
                                                          '<label class="custom-control-label" for="Listrik">Listrik</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="parkir_mobile" name="parkir">
                                                          '<label class="custom-control-label" for="parkir_mobile">Kasur</label>
                                                        '</div>
                                                '</div>
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="air" name="air">
                                                          '<label class="custom-control-label" for="air">Air</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="lemari" name="ac">
                                                          '<label class="custom-control-label" for="lemari">Lemari</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="kasur" name="ac">
                                                          '<label class="custom-control-label" for="kasur">Kamar Mandi</label>
                                                        '</div>
                                                '</div>
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="tv" name="tv">
                                                          '<label class="custom-control-label" for="tv">TV</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="heater" name="tv">
                                                          '<label class="custom-control-label" for="heater">Water Heater</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="dapur" name="tv">
                                                          '<label class="custom-control-label" for="dapur">Dapur</label>
                                                        '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                '</div>
                            '</div>
                        '</div>
                    '</div>'
        );
      }
  });
    </script>
        <script>
        $('#combooo').change(function(){
    $('#myOptionsDivv').html(''); //added this to clear the div before setting inputs
    var num =$(this).val();
    for(var i = 0; i < num; i++){
      $('#myOptionsDivv').append(
                 '<div class="col-md-12 col-xl-12">
                        '<div class="row">
                            '<div class="dashboard-panel w-100">
                                '<h4 class="text-secondary mb-4">Tambahkan Kamar Sesuai Denah Lantai </h4>
                                '<div class="submit-form p-5 bg-white">
                                  '<div class="row">
                                    '<div class="col-md-12"> </div>
                                    '<div class="col-md-12">
                                '<img id="image-preview" alt="image preview"/><br/><input type="file" id="image-source" onchange="previewImage();"/>
                                  '<br>
                              '</div>
                                  '</div>
                                        '<div class="description">
                                            '<div class="row">
                                                '<div class="col-lg-12 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Nama Kamar :</label>
                                                        '<input type="text" name="nama_kamar" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3 col-sm-3">
                                                  '<div class="form-group">
                                                        '<label>Ukuran Kamar :</label>
                                                        '<input type="text" name="ukuran_kamar" class="form-control" placeholder="_ X _">
                                                    '</div>
                                                '</div>
                                                '<div class="col-lg-6 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Tipe Kost :</label>
                                                        '<select class="form-control" name="gender">
                                                            '<option></option>
                                                            '<option value="laki-laki">Laki - Laki</option>
                                                            '<option value="wanita">Wanita</option>
                                                        '</select>
                                                    '</div>
                                                '</div>
                                                '<div class="col-lg-3"> </div>
                                            '</div>
                                        '</div>
                                        '<div class="description mt-4">
                                            '<h5 class="text-secondary">Deskripsi</h5>
                                            '<hr>
                                            '<div class="row">
                                                '<div class="col-lg-12 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Deskripsi</label>
                                '<textarea class="form-control bg-gray" placeholder="Write Details..." rows="6" name="deskripsi_kamar"></textarea>
                                                    '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                        '<div class="property-location mt-4">
                                          '<h5 class="text-secondary">Harga</h5>
                                          '<hr>
                                            '<div class="row">
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perhari" placeholder="PerHari" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perminggu" class="form-control" placeholder="PerMinggu">
                                                    '</div>
                                                '</div>
                                                  '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perbulan" placeholder="PerBulan" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="pertahun" class="form-control" placeholder="PerTahun">
                                                    '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                        '<div class="additional-feature mt-4">
                                            '<h5 class="text-secondary mb-3">Fitur Tambahan :</h5>
                                            '<div class="row">
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="kulkas" name="kulkas">
                                                          '<label class="custom-control-label" for="kulkas">kulkas</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="mesincuci" name="mesincuci">
                                                          '<label class="custom-control-label" for="mesincuci">Mesin Cuci</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="sofa" name="sofa">
                                                          '<label class="custom-control-label" for="sofa">Sofa</label>
                                                        '</div>
                                                    '</div>
                                                '<div class="col-lg-3">
                                                       '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="wifi" name="wifi">
                                                          '<label class="custom-control-label" for="wifi">Wifi</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="Listrik" name="Listrik">
                                                          '<label class="custom-control-label" for="Listrik">Listrik</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="parkir_mobile" name="parkir">
                                                          '<label class="custom-control-label" for="parkir_mobile">Kasur</label>
                                                        '</div>
                                                '</div>
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="air" name="air">
                                                          '<label class="custom-control-label" for="air">Air</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="lemari" name="ac">
                                                          '<label class="custom-control-label" for="lemari">Lemari</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="kasur" name="ac">
                                                          '<label class="custom-control-label" for="kasur">Kamar Mandi</label>
                                                        '</div>
                                                '</div>
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="tv" name="tv">
                                                          '<label class="custom-control-label" for="tv">TV</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="heater" name="tv">
                                                          '<label class="custom-control-label" for="heater">Water Heater</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="dapur" name="tv">
                                                          '<label class="custom-control-label" for="dapur">Dapur</label>
                                                        '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                '</div>
                            '</div>
                        '</div>
                    '</div>'
        );
      }
  });
    </script>
        <script>
        $('#comb').change(function(){
    $('#myOptionsDivb').html(''); //added this to clear the div before setting inputs
    var num =$(this).val();
    for(var i = 0; i < num; i++){
      $('#myOptionsDivb').append(
                 '<div class="col-md-12 col-xl-12">
                        '<div class="row">
                            '<div class="dashboard-panel w-100">
                                '<h4 class="text-secondary mb-4">Tambahkan Kamar Sesuai Denah Lantai </h4>
                                '<div class="submit-form p-5 bg-white">
                                  '<div class="row">
                                    '<div class="col-md-12"> </div>
                                    '<div class="col-md-12">
                                '<img id="image-preview" alt="image preview"/><br/><input type="file" id="image-source" onchange="previewImage();"/>
                                  '<br>
                              '</div>
                                  '</div>
                                        '<div class="description">
                                            '<div class="row">
                                                '<div class="col-lg-12 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Nama Kamar :</label>
                                                        '<input type="text" name="nama_kamar" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3 col-sm-3">
                                                  '<div class="form-group">
                                                        '<label>Ukuran Kamar :</label>
                                                        '<input type="text" name="ukuran_kamar" class="form-control" placeholder="_ X _">
                                                    '</div>
                                                '</div>
                                                '<div class="col-lg-6 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Tipe Kost :</label>
                                                        '<select class="form-control" name="gender">
                                                            '<option></option>
                                                            '<option value="laki-laki">Laki - Laki</option>
                                                            '<option value="wanita">Wanita</option>
                                                        '</select>
                                                    '</div>
                                                '</div>
                                                '<div class="col-lg-3"> </div>
                                            '</div>
                                        '</div>
                                        '<div class="description mt-4">
                                            '<h5 class="text-secondary">Deskripsi</h5>
                                            '<hr>
                                            '<div class="row">
                                                '<div class="col-lg-12 col-md-12">
                                                    '<div class="form-group">
                                                        '<label>Deskripsi</label>
                                '<textarea class="form-control bg-gray" placeholder="Write Details..." rows="6" name="deskripsi_kamar"></textarea>
                                                    '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                        '<div class="property-location mt-4">
                                          '<h5 class="text-secondary">Harga</h5>
                                          '<hr>
                                            '<div class="row">
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perhari" placeholder="PerHari" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perminggu" class="form-control" placeholder="PerMinggu">
                                                    '</div>
                                                '</div>
                                                  '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="perbulan" placeholder="PerBulan" class="form-control">
                                                    '</div>
                                                '</div>
                                                '<div class="col-sm-3">
                                                    '<div class="form-group">
                                                        '<input type="text" name="pertahun" class="form-control" placeholder="PerTahun">
                                                    '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                        '<div class="additional-feature mt-4">
                                            '<h5 class="text-secondary mb-3">Fitur Tambahan :</h5>
                                            '<div class="row">
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="kulkas" name="kulkas">
                                                          '<label class="custom-control-label" for="kulkas">kulkas</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="mesincuci" name="mesincuci">
                                                          '<label class="custom-control-label" for="mesincuci">Mesin Cuci</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="sofa" name="sofa">
                                                          '<label class="custom-control-label" for="sofa">Sofa</label>
                                                        '</div>
                                                    '</div>
                                                '<div class="col-lg-3">
                                                       '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="wifi" name="wifi">
                                                          '<label class="custom-control-label" for="wifi">Wifi</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="Listrik" name="Listrik">
                                                          '<label class="custom-control-label" for="Listrik">Listrik</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="parkir_mobile" name="parkir">
                                                          '<label class="custom-control-label" for="parkir_mobile">Kasur</label>
                                                        '</div>
                                                '</div>
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="air" name="air">
                                                          '<label class="custom-control-label" for="air">Air</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="lemari" name="ac">
                                                          '<label class="custom-control-label" for="lemari">Lemari</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="kasur" name="ac">
                                                          '<label class="custom-control-label" for="kasur">Kamar Mandi</label>
                                                        '</div>
                                                '</div>
                                                '<div class="col-lg-3">
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="tv" name="tv">
                                                          '<label class="custom-control-label" for="tv">TV</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="heater" name="tv">
                                                          '<label class="custom-control-label" for="heater">Water Heater</label>
                                                        '</div>
                                                        '<div class="custom-control custom-checkbox">
                                                          '<input type="checkbox" class="custom-control-input" id="dapur" name="tv">
                                                          '<label class="custom-control-label" for="dapur">Dapur</label>
                                                        '</div>
                                                '</div>
                                            '</div>
                                        '</div>
                                '</div>
                            '</div>
                        '</div>
                    '</div>'
        );
      }
  });
    </script> -->

</body>

<!-- Mirrored from unicoderbd.com/theme/html/homex/dashboard-submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 03:31:19 GMT -->
</html>