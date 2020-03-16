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
 <script src="http://maps.googleapis.com/maps/api/js"></script>
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

<style type="text/css">
  #formdiv {
  text-align: center;
}
#file {
  color: green;
  padding: 5px;
  border: 1px dashed #123456;
  background-color: #f9ffe5;
}
#img {
  width: 17px;
  border: none;
  height: 17px;
  margin-left: -20px;
  margin-bottom: 191px;
}
.upload {
  width: 100%;
  height: 30px;
}
.previewBox {
  text-align: center;
  position: relative;
  width: 150px;
  height: 150px;
  margin-right: 10px;
  margin-bottom: 20px;
  float: left;
}
.previewBox img {
  height: 150px;
  width: 150px;
  padding: 5px;
  border: 1px solid rgb(232, 222, 189);
}
.delete {
  color: red;
  font-weight: bold;
  position: absolute;
  top: 0;
  cursor: pointer;
  width: 20px;
  height:  20px;
  border-radius: 50%;
  background: #ccc;
}
</style>

<!--    Title
    =========================================================-->
<title>Homex - Real Estate Template</title>
</head>
<body>


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
                            <div class="dropdown float-left"> <a class="dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="assets/images/team/p.jpeg" alt=""> Zaenal Abidin </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2"> <a class="dropdown-item" href="dashboard-personal-info-pemilik.html">Profile</a> <a class="dropdown-item" href="halaman-pemilik.html">Keluar</a> </div>
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
                                    <li class="active"><a href="dashboard-submit-property.html"><i class="flaticon-forward mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Tambah Kost</span></a></li>
                                 </ul>
                                <h6 class="text-primary border-bottom-gray pb-3 my-2 pl-3 d-md-none d-xl-block">Pengaturan</h6> 
                                <ul class="mb-4 text-white">
                                    <li><a href="dashboard-personal-info-pemilik.html"><i class="flaticon-seller mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Info Profil</span></a></li>
                                    <li><a href="dashboard-system-setting-pemilik.html"><i class="flaticon-settings mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Setings</span></a></li>
                                    <li><a href="cara-pendaftaran-pemilik.html"><i class="flaticon-resume r-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Cara Pendaftaran kost</span></a></li>
                                    <li><a href="index-1.html"><i class="flaticon-percentage mr-3 mr-md-0 mr-xl-3"></i><span class="d-md-none d-xl-block">Log Out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-11 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h4 class="text-secondary mb-4">Tambah Kost</h4>
                                <div class="submit-form p-5 bg-white">
                                    
                                      <?php echo form_open_multipart('kost/input_kost');?>
                                        <div class="description">
                                            <h5 class="text-secondary">Informasi Kost :</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Nama Kost :</label>
                                                        
                                                        <span class="ml-2 fa-2x"><i title="Property Title" class="fas fa-question-circle text-secondary"></i></span>
                                                        <input type="text" name="nama_kost" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Tahun Di Bangun Atau Terakhir Di Renovasi :</label>
                                                        <select class="form-control" name="tahun">
                                                          <option> </option>
                                                          <option  value="1980">1980</option>
                                                          <option  value="1981">1981</option>
                                                          <option  value="1982">1982</option>
                                                          <option  value="1983">1983</option>
                                                          <option  value="1984">1984</option>
                                                          <option  value="1985">1985</option>
                                                          <option  value="1986">1986</option>
                                                          <option  value="1987">1987</option>
                                                          <option  value="1988">1988</option>
                                                          <option  value="1989">1989</option>
                                                          <option  value="1990">1990</option>
                                                          <option  value="1991">1991</option>
                                                          <option  value="1992">1992</option>
                                                          <option  value="1993">1993</option>
                                                          <option  value="1994">1994</option>
                                                          <option  value="1995">1995</option>
                                                          <option  value="1996">1996</option>
                                                          <option  value="1997">1997</option>
                                                          <option  value="1998">1998</option>
                                                          <option  value="1999">1999</option>
                                                          <option  value="2000">2000</option>
                                                          <option  value="2001">2001</option>
                                                          <option  value="2002">2002</option>
                                                          <option  value="2003">2003</option>
                                                          <option  value="2004">2004</option>
                                                          <option  value="2005">2005</option>
                                                          <option  value="2006">2006</option>
                                                          <option  value="2007">2007</option>
                                                          <option  value="2008">2008</option>
                                                          <option  value="2009">2009</option>
                                                          <option  value="2010">2010</option>
                                                          <option  value="2011">2011</option>
                                                          <option  value="2012">2012</option>
                                                          <option  value="2013">2013</option>
                                                          <option  value="2014">2014</option>
                                                          <option  value="2015">2015</option>
                                                          <option  value="2016">2016</option>
                                                          <option  value="2017">2017</option>
                                                          <option  value="2018">2018</option>
                                                          <option  value="2019">2019</option>
                                                          <option  value="2020">2020</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Tipe Kost :</label>
                                                        <select class="form-control" name="gender">
                                                            <option></option>
                                                            <option value="laki - laki">Laki - Laki</option>
                                                            <option value="Wanita">Wanita</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3"> </div>
                                            </div>
                                        </div>
                                        <div class="description mt-4">
                                            <h5 class="text-secondary">Deskripsi</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Deskripsi</label>
                                                        <textarea class="form-control bg-gray" placeholder="Write Details..." rows="8" name="deskripsi"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-location mt-4">
                                            <h5 class="text-secondary">Alamat Kost :</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <input type="text" name="alamat" class="form-control">
                                                    </div>
                                                </div>
<!--                                                 <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Kota</label>
                                                        <select class="form-control" name="kota">
                                                            <option>Pilih Kota</option>
                                                            <option value="Malang">Status 1</option>
                                                            <option value="Banyuwangi">Status 2</option>
                                                            <option value="Surabaya">Status 3</option>
                                                        </select>
                                                    </div>
                                                </div> -->
                                                <br>
                                                <br>
                                                <div id="googleMap" style="width:100%;height:450px;"></div>
                                            </div>
                                        </div>
                                        <div class="additional-feature mt-4">
                                            <h5 class="text-secondary mb-3">Fitur :</h5>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                       <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="wifi" name="wifi">
                                                          <label class="custom-control-label" for="wifi"><i class="fa fa-wifi"></i>&nbsp;wifi</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="Listrik" name="listrik">
                                                          <label class="custom-control-label" for="Listrik"><i class="fa fa-bolt"></i>&nbsp;listrik</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="kasur" name="kasur">
                                                          <label class="custom-control-label" for="kasur"><i class="fa fa-bed"></i>&nbsp;Kasur</label>
                                                        </div>
                                                </div>
                                                <div class="col-lg-3">
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="air" name="air">
                                                          <label class="custom-control-label" for="air"><i class="fa fa-tint"></i>&nbsp;Air</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="lemari" name="lemari">
                                                          <label class="custom-control-label" for="lemari"><i class="fa fa-server"></i>&nbsp;Lemari</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="kursi" name="kursi">
                                                          <label class="custom-control-label" for="kursi"><i class="fa fa-couch"></i>&nbsp;Kursi</label>
                                                        </div>
                                                </div>
                                                <div class="col-lg-3">
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="tv" name="tv">
                                                          <label class="custom-control-label" for="tv"><i class="fa fa-tv"></i>&nbsp;TV</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="heater" name="water_heater">
                                                          <label class="custom-control-label" for="heater"><i class="fa fa-dumpster-fire"></i>&nbsp;Water Heater</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="dapur" name="dapur">
                                                          <label class="custom-control-label" for="dapur"><i class="fa fa-oven"></i>Dapur</label>
                                                        </div>
                                                </div>
                                                    <div class="col-lg-">
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="luar" name="kamar_luar">
                                                          <label class="custom-control-label" for="luar"><i class="fa fa-bath"></i>&nbsp;kamar Luar</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="dalam" name="kamar_mandi_dalam">
                                                          <label class="custom-control-label" for="dalam"><i class="fa fa-bath"></i>&nbsp;kamar Mandi dalam</label>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="property-plan mt-4">
                                            <h5 class="text-secondary mb-3">Denah :</h5>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="accordion mt-4" id="accordionExample">
                                                        <button class="bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Lantai 1 </button>
                                                        <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                            <div class="row">
                                                              <div class="col-md-4"></div>
                                                            <div class="col-md-4">
                                                                <div class="browse-submit">
                                                                   <input type="file" class="dropify" id="images" name="denah_1" onchange="preview_images();" multiple/>
                                                                    <div class="row" id="image_preview"></div>
                                                                </div>

                                                            </div>
                                                            </div>
                                                        </div>
                                                        <button class="bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Lantai 2 </button>
                                                        <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                            <div class="row">
                                                              <div class="col-md-4"></div>
                                                            <div class="col-md-4">
                                                                <div class="browse-submit">
                                                                   <input type="file" class="dropify" id="images" name="denah_2" onchange="preview_images();" multiple/>
                                                                    <div class="row" id="image_preview"></div>
                                                                </div>

                                                            </div>
                                                            </div>
                                                        </div>
                                                        <button class="bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Lantai 3 </button>
                                                        <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                              <div class="row">
                                                              <div class="col-md-4"></div>
                                                            <div class="col-md-4">
                                                                <div class="browse-submit">
                                                                   <input type="file" class="dropify" id="images" name="denah_3" onchange="preview_images();" multiple/>
                                                                    <div class="row" id="image_preview"></div>
                                                                </div>

                                                            </div>
                                                            </div>
                                                        </div>
                                                        <button class="bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree"> Lantai 4 </button>
                                                        <div id="collapsefour" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                              <div class="row">
                                                              <div class="col-md-4"></div>
                                                            <div class="col-md-4">
                                                                <div class="browse-submit">
                                                                   <input type="file" class="dropify" id="images" name="denah_4" onchange="preview_images();" multiple/>
                                                                    <div class="row" id="image_preview"></div>
                                                                </div>

                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="upload-media mt-5">
                                            <hr>
                                            <center><h5>Foto Kost</h5></center>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                               <input type="file" class="dropify" id="images" name="foto_kost"  multiple/>
                                                </div>
                                                <div class="col-md-4">
                                               <input type="file" class="dropify" id="images" name="foto_kost2"  multiple/>
                                                </div>
                                                <div class="col-md-4">
                                               <input type="file" class="dropify" id="images" name="foto_kost3"  multiple/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="upload-media mt-5">
                                            <h5 class="text-secondary">Tempat Terdekat :</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="nav nav-pills mb-3 bg-gray" id="pills-tab" role="tablist">
                                                        <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Rumah Sakit</a> </li>
                                                        <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">SuperMarket</a> </li>
                                                        <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Sekolah</a> </li>
                                                        <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Rumah Makan</a> </li>
                                                    </ul>
                                                    <div class="tab-content mt-4" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                                            <div class="row">
                                                                <div class="col-lg-5 col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="text" name="rumah_sakit" class="form-control" placeholder="Name of the places">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2">
                                                                    <div class="form-group">
                                                                        <input type="text" name="jarak_1" class="form-control" placeholder="Distance (km)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile">
                                                            <div class="row">
                                                                <div class="col-lg-5 col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="text" name="super_market" class="form-control" placeholder="Name of the places">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2">
                                                                    <div class="form-group">
                                                                        <input type="text" name="jarak_2" class="form-control" placeholder="Distance (km)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-resturant" role="tabpanel" aria-labelledby="pills-resturant">
                                                            <div class="row">
                                                                <div class="col-lg-5 col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="text" name="sekolah" class="form-control" placeholder="Name of the places">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2">
                                                                    <div class="form-group">
                                                                        <input type="text" name="jarak_3" class="form-control" placeholder="Distance (km)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact">
                                                            <div class="row">
                                                                <div class="col-lg-5 col-md-4">
                                                                    <div class="form-group">
                                                                        <input type="text" name="rumah_makan" class="form-control" placeholder="Name of the places">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2">
                                                                    <div class="form-group">
                                                                        <input type="text" name="jarak_4" class="form-control" placeholder="Distance (km)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" name="name" class="btn btn-primary" value="+">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <br>
                                    <a class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#tambahkmr">Tambah</a>
                                     <div class="modal fade" id="tambahkmr" style="top:25%;">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                          
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                              <h4 class="modal-title"></h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                Apakah Anda Yakin Dengan Data Yang Anda Isi ?
                                            </div>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                              <button class="btn btn-success">Tambah</button>
                                            </div>
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                </div>
                            </div>
                            <div class="dashboard-copyright bg-white py-4 text-center w-100"><p style="color: green;">© 2019 Raja Kost All right reserved</p></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- The Modal -->
 
<!-- Wrapper End --> 

<!--    Js Link

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
</body>

<!-- Mirrored from unicoderbd.com/theme/html/homex/dashboard-submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 03:31:19 GMT -->
</html>