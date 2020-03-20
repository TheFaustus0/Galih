<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

<!--
//initial checkCount of zero
var checkCount=0
//maximum number of allowed checked boxes
var maxChecks=1
function setChecks(obj){
//increment/decrement checkCount
if(obj.checked){
checkCount=checkCount+1
}else{
checkCount=checkCount-1
}
//if they checked a 4th box, uncheck the box, then decrement checkcount and pop alert
if (checkCount>maxChecks){
obj.checked=false
checkCount=checkCount-1
}
}
//-->
</script>
<script type="text/javascript">

<!--
//initial checkCount of zero
var checkCount=0
//maximum number of allowed checked boxes
var maxChecks=1
function setCheck(obj){
//increment/decrement checkCount
if(obj.checked){
checkCount=checkCount+1
}else{
checkCount=checkCount-1
}
//if they checked a 4th box, uncheck the box, then decrement checkcount and pop alert
if (checkCount>maxChecks){
obj.checked=false
checkCount=checkCount-1
}
}
//-->
</script>

        
        <!--    Banner
        ===============================================================-->
           <style>
        
#image-preview{
    display:none;
    width : 150px;
    height : 150px;
}
    </style>
<body class="bg-grea-3">
        <div class="bg-gray full-row py-5 page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="page-name float-left text-secondary mt-1 mb-0">Detail Kamar</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mt-2 text-secondary">Bunga Kost</h5>
                                <span class="mb-sm-20 d-block"><i class="fas fa-map-marker-alt text-primary font-12"></i> Jln Sudirman No 1</span> </div>
                            <div class="col-md-6"> <span class="d-block text-left text-secondary text-md-right"><i class="far fa-star"></i></span>
                                <div class="text-primary text-left h5 my-2 text-md-right">Rp.5.000,000/Thn</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                                    <!-- Slide 1-->
                                    <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="assets/images/slider/1.jpg" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 2-->
                                    <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnszoom:out; kenburnsscale:1.2;"> <img width="1920" height="1080" src="assets/images/slider/2.jpg" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 3-->
                                    <div class="ls-slide" data-ls="duration:5000; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="assets/images/slider/3.jpg" class="ls-bg" alt="" /> </div>
                                </div>
                            </div>
                        </div>
                        <h4>Fasilitas Umum</h4>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="property-details">
                                    <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                        <ul style="color: blue;">
                                           <li>
                                             <i class="flaticon-bed"></i>&nbsp;Kasur
                                           </li>
                                           <li>
                                             <i class="fa fa-home"></i>&nbsp;Kamar
                                           </li>
                                           <li>
                                             <i class="fa fa-wifi"></i>&nbsp;Wifi
                                           </li>
                                            <li>
                                            <i class="fa fa-laptop"></i>&nbsp;tv
                                           </li>
                                        </ul>
                                    </div>

                                    <!--single form panel-->
                                     <h5><a class="text-primary hover-text-secondary mt-4 mb-4 pl-3 position-relative plus-minus d-block" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"> Details Fasilitas Kost</a></h5>
                                    <div class="collapse" id="multiCollapseExample1">
                                        <ul>
                                             <li style="color: blue;">
                                             <i class="flaticon-bed"></i>&nbsp;Kasur
                                             <i class="fa fa-home" style="margin-left: 5%;"></i>&nbsp;Kamar
                                             <i class="fa fa-bath" style="margin-left: 5%;"></i>&nbsp;Bak Mandi<br><br>


                                             <i class="fa fa-wifi"></i>&nbsp;Wifi
                                             <i class="fa fa-laptop" style="margin-left: 6%;"></i>&nbsp;tv
                                             <i class="fa fa-bicycle" style="margin-left: 7%;"></i>&nbsp;Parkir Sepedah
                                             </li> 
                                        </ul>
                                        <br>
                                        <br>
                                    </div>
                                    <h5 style="color: black;"> Luas Kamar</h5>
                                    <br>
                                    <h5 style="margin-left: 4%; color: blue;"> 3x3 </h5>
                                    <h5 class="mt-5 mb-4 text-secondary">Tempat Terdekat :</h5>
                                    <ul class="nav nav-pills mb-3 bg-gray" id="pills-tab" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Rumah Sakit</a> </li>
                                        <li class="nav-item"> <a class="nav-link" id="pills-profile-tab2" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Super Market</a> </li>
                                        <li class="nav-item"> <a class="nav-link" id="pills-contact-tab3" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Sekolah </a> </li>
                                        <li class="nav-item"> <a class="nav-link" id="pills-contact-tab4" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Pasar</a> </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                            <div class="overflow-x-scroll pb-3">
                                                <table class="tab-table w-100 text-secondary">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Jarak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>rs sandoyo</td>
                                                            <td>23.7 km</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile">
                                            <div class="overflow-x-scroll pb-3">
                                                <table class="tab-table w-100 text-secondary">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Jarak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>super market melati</td>
                                                            <td>23.7 km</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-resturant" role="tabpanel" aria-labelledby="pills-resturant">
                                            <div class="overflow-x-scroll pb-3">
                                                <table class="tab-table w-100 text-secondary">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Jarak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Massachusetts General Hospital</td>
                                                            <td>23.7 km</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact">
                                            <div class="overflow-x-scroll pb-3">
                                                <table class="tab-table w-100 text-secondary">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Jarak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>pasar klewer</td>
                                                            <td>23.7 km</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                 <h4>Mau Ngekost Kapan ?</h4><br>
                                  <form method="post" action="<?php echo base_url().'detail_kamar/pemesanan' ?>" enctype="multipart/form-data">
                                    <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn"> 
                                      <div class="multisteps-form__content">
                                        <div class="form-row mt-4">
                                          <div class="col-12 col-sm-12" style="margin-left: 20%;">
                                            <br>
                                            <h6>Tanggal Masuk :<h6>
                                            <br>
                                            <input id="datepicker" name="tanggal" width="400" />
                                            <script>
                                                $('#datepicker').datepicker({
                                                    uiLibrary: 'bootstrap4'
                                                });
                                            </script>
                                          </div>
                                        </div>
                                        <div class="col-7 col-sm-12"style="margin-left: 16%;">
                                        <br>
                                        <h6 style="margin-left: 2%;">Durasi Sewa :</h6>
                                        <br>
                                        <div class="col-1 col-sm-8">
                                        <div class="search-area d-none d-xl-block d-lg-block">
                                          <div class="form-group">
                                             <select class="form-control" name="durasi_sewa">
                                                <option>Durasi Sewa</option>
                                                    <option>1 Bulan</option>
                                                    <option>2 Bulan</option>
                                                    <option>3 Bulan</option>
                                                    <option>4 Bulan</option>
                                                    <option>5 Bulan</option>
                                                    <option>6 Bulan</option>
                                                    <option>7 Bulan</option>
                                                    <option>8 Bulan</option>
                                                    <option>9 Bulan</option>
                                                    <option>10 Bulan</option>
                                                    <option>11 Bulan</option>
                                                    <option>12 Bulan</option>
                                                    <option>1 tahun</option>
                                                    <option>2 Tahun</option>
                                                    <option>3 Tahun</option>
                                                    <option>4 Tahun</option>
                                                    <option>5 Tahun</option>
                                              </select>
                                            </div>
                                          </div>
                                       </div>
                                       </div>
                                       <br>
                                        <div class="multisteps-form__content">
                                       <!--    <h6 style="margin-left: 20%;">Hitungan Sewa :</h6>
                                          <br>
                                           <div class="form-check checkbox-theme" name="hitungan" style="margin-left: 20%;">
                                              <input class="form-check-input" type="checkbox" value="" id="minggu" onclick="setCheck(this)">
                                                  <label class="form-check-label" for="ktp" style="margin-right: 12%;">
                                                       Per Minnggu
                                                  </label>
                                                  <input class="form-check-input" type="checkbox" value="" id="Bulan" onclick="setCheck(this)">
                                                  <label class="form-check-label" for="sim" style="margin-right: 10%;">
                                                       Per Bulan
                                                  </label>
                                                  <input class="form-check-input" type="checkbox" value="" id="tahun" onclick="setCheck(this)">
                                                  <label class="form-check-label" for="kartu_pelajar">
                                                       Per Tahun
                                                  </label>
                                              </div> -->
                                              <br>     
                                          <h6 style="margin-left: 20%;">Jenis Kelamin :</h6>
                                          <br>
                                           <div class="form-check checkbox-theme"  style="margin-left: 20%;">
                                              <input class="form-check-input"name="jenis"  type="checkbox" value="laki-laki" id="laki" onclick="setChecks(this)">
                                                  <label class="form-check-label" for="laki" style="margin-right: 18%;">
                                                       Laki Laki
                                                  </label>
                                                  <input class="form-check-input" name="jenis" type="checkbox" value="wanita" id="wanita" onclick="setCheck(this)">
                                                  <label class="form-check-label" for="wanita">
                                                       Perempuan
                                                  </label>
                                              </div>
                                              <br>
                                              <h6 style="margin-left: 20%;">Masukkan Foto Identitas :</h6>
                                              <br>
                                                  <div class="col-md-8 " style="margin-left: 18%;">
                                                        <input type="file" name="gambar" id="image-source" onchange="previewImage();"/>
                                                  </div>       
                                                    <br>
                                                  <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-3">
                                                            <img id="image-preview" alt="image preview"/>
                                                   </div>
                                                </div>
                                            <div class="button-row d-flex mt-4">
                                              <button style="margin-left: 90%;%;" class="btn btn-success">Kirim</button>
                                           </div>
                                        </div>
                                       </div>
                                    </div>
                                         
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="mt-5 mb-4 text-secondary">Harga</h4>
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn"> 
                                    <div class="widget categories">
                                        <h5 class="sidebar-title">Keterangan</h5><br>
                                        <ul><h5 style="margin-left: 20%;">
                                            <li><a href="#">Rp. 100.000<span>/Hari</span></a></li><br>
                                            <li><a href="#">Rp. 300.000<span>/Minggu</span></a></li><br>
                                            <li><a href="#">Rp. 700.000<span>/Bulan</span></a></li><br>
                                            <li><a href="#">Rp. 5.000.000<span>/Tahun</span></a></li>
                                            <br>
                                        </h5></ul>
                                    </div>
                                </div>
                                <div class="mt-4 p-4 shadow-one">
                                    <div class="img-80 float-left mr-3 mb-4 rounded-circle"><img src="assets/images/user/02.jpg" alt=""></div>
                                    <h6 class="mt-2 text-primary">Surly</h6>
                                    <span>+( 81 ) 84 538 231</span>
                                    <form class="bg-gray-input d-inline-block" action="http://unicoderbd.com/theme/html/homex/action.html" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="massage" name="massage" cols="30" rows="6" placeholder="Pesan"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" id="send" value="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">

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

        