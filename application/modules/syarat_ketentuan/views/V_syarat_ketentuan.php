<?php foreach($tampil as $res) {
    $id_syarat_ketentuan=$res->id_syarat_ketentuan;
    
?>
<div class="bg-gray full-row py-5 page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="page-name float-left text-secondary mt-1 mb-0"></h3>
            </div>
            <div class="col-md-6">
                <nav aria-label="breadcrumb" class="float-left float-md-right">
                    <!-- <ol class="breadcrumb bg-transparent m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol> -->
                </nav>
            </div>
        </div>
    </div>
</div>

<!--    About Our Company
=================================================================-->
<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4"><?php echo $res->judul ?></h3>
            </div>
        </div>
        <div class="row about-company">
            <div class="col-md-12 col-lg-7">
                <div class="about-content"><?php echo $res->konten ?>
                    
                               <!--  <p>
                               <h6 class="text-secondary mb-2">1. Ruang Lingkup</h6>
                                Untuk menggunakan website  ini Kami menyarankan anda sudah berusia 18 tahun ke atas atau jika Anda berusia dibawah 18 tahun silakan untuk mengakses website ini dengan pengawasan dari orang tua atau wali Anda. 
                                <br>
                                <br>
                               <h6 class="text-secondary mb-2">2. Akun Pengguna</h6>
                                Untuk dapat menggunakan secara penuh dari fitur yang tersedia pada website, Anda diminta untuk melakukan pendaftaran dan membuat akun Anda. Untuk kepentingan pendaftaraan ini .Kami akan mengumpulkan dan memproses informasi yang Anda berikan diantaranya seperti Nomor Telepon dan Password.

                                <br>
                                <br>
                                <h6 class="text-secondary mb-2"> 3. Keamanan dan Perlindungan Informasi</h6>
                                Kami melindungi informasi maupun data Anda di bawah kepemilikan atau kendali terbaik yang Kami miliki dengan pengaturan keamanan yang wajar, termasuk prosedur, teknis dan organisasi, untuk mencegah akses, pengumpulan, penggunaan, penyebarluasan, penyalinan, modifikasi, penghapusan yang tidak sah atau risiko yang sama.
                                Anda bersedia untuk memberikan hak kepada Kami menerima, mengumpulkan, menyimpan informasi yang diberikan pada saat menggunakan website ini. Informasi dan data pribadi tersebut termasuk namun tidak terbatas pada informasi transaksi (seperti: user id), informasi User (seperti: nama, alamat), informasi non-pribadi yang teridentifikasi (yang tidak dapat digunakan untuk mengidentifikasi Anda).
                                <br>
                                <br>
                                <h6 class="text-secondary mb-2">4. Prosedur Pembayaran</h6>
                                <br>
                                1.  Anda wajib bertransaksi melalui prosedur transaksi yang telah ditetapkan oleh Website kami dan melakukan pembayaran dengan menggunakan metode pembayaran yang sebelumnya telah dipilih kepada Kami untuk kemudian Kami akan meneruskan dana ke pihak pemilik properti apabila tahapan transaksi pembayaran pada sistem telah selesai.

                                <br>
                                 2. Anda memahami bahwa Kami mungkin dapat memberikan batas waktu tertentu untuk melakukan pembayaran agar proses pemesanan Anda pada website selesai. Kegagalan dalam melakukan pembayaran pada jangka waktu yang dilakukan tanpa ada konfirmasi atau pemberitahuan sebelumnya kepada Kami dapat berakibat dengan pembatalan pesanan secara otomatis oleh Kami.

                                <br>
                                3. Anda dapat melakukan pembayaran dengan metode transfer Bank.

                                <br>
                                 Anda diharuskan untuk memeriksa kembali setiap pembayaran yang telah Anda lakukan dengan detail pemesanan yang Anda lakukan.
                                </p> -->
                    <img src="assets/images/about/02.png" alt=""> </div>
                <?php } ?>
                <div class="fact-counter mt-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="count wow text-center" data-wow-duration="300ms">
                                <div class="text-primary mb-3 d-flex justify-content-center">
                                    <h2 class="count-num" data-speed="3000" data-stop="1310">0</h2>
                                    <strong>+</strong> </div>
                                <span class="h6">Penawaran Sukses</span> </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="count wow text-center" data-wow-duration="300ms">
                                <div class="text-primary mb-3 d-flex justify-content-center">
                                    <h2 class="count-num" data-speed="3000" data-stop="110000000"></h2>
                                    <strong>+</strong> </div>
                                <span class="h6">Pemilik Kost</span> </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="count wow text-center" data-wow-duration="300ms">
                                <div class="text-primary mb-3 d-flex justify-content-center"><strong>$</strong>
                                    <h2 class="count-num" data-speed="3000" data-stop="7000">0</h2>
                                    <strong>+</strong> </div>
                                <span class="h6">Pencari Kost</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div class="about-img"> <img src="assets/images/about/01.png" alt=""> </div>
            </div>
        </div>
    </div>
</div>

<!--    Happy Living
============================================================-->


<!--    How it work
============================================================-->
<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-secondary double-down-line text-center">Bagaimana Cara Kerjanya</h2>
                <span class="text-center mt-4 d-block mb-5">Kami mendaftarkan peluang dan layanan kami sebagai perusahaan rajakost</span> </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="icon-thumb-one text-center mb-5">
                    <div class="bg-primary text-white rounded-circle position-absolute z-index-9">1</div>
                    <div class="left-arrow"><i class="flaticon-investor flat-medium icon-primary" aria-hidden="true"></i></div>
                    <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                    <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-thumb-one text-center mb-5">
                    <div class="bg-primary text-white rounded-circle position-absolute z-index-9">2</div>
                    <div class="left-arrow"><i class="flaticon-search flat-medium icon-primary" aria-hidden="true"></i></div>
                    <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                    <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-thumb-one text-center mb-5">
                    <div class="bg-primary text-white rounded-circle position-absolute z-index-9">3</div>
                    <div><i class="flaticon-handshake flat-medium icon-primary" aria-hidden="true"></i></div>
                    <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                    <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-thumb-one text-center mb-5">
                    <div class="bg-primary text-white rounded-circle position-absolute z-index-9">4</div>
                    <div class="left-arrow"><i class="flaticon-strategy flat-medium icon-primary" aria-hidden="true"></i></div>
                    <h5 class="text-secondary mt-5 mb-4">Managment</h5>
                    <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-thumb-one text-center mb-5">
                    <div class="bg-primary text-white rounded-circle position-absolute z-index-9">5</div>
                    <div class="left-arrow"><i class="flaticon-diagram flat-medium icon-primary" aria-hidden="true"></i></div>
                    <h5 class="text-secondary mt-5 mb-4">Survey</h5>
                    <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-thumb-one text-center mb-5">
                    <div class="bg-primary text-white rounded-circle position-absolute z-index-9">6</div>
                    <div><i class="flaticon-money flat-medium icon-primary" aria-hidden="true"></i></div>
                    <h5 class="text-secondary mt-5 mb-4">Collect</h5>
                    <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    Achievement
============================================================-->
<!--         <div class="full-row overlay-secondary" style="background-image: url('images/counterbg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <div class="container">
        <div class="fact-counter">
            <div class="row">
                <div class="col-md-3">
                    <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="1732">0</div>
                        <div class="text-white h5">Property Available</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="341">0</div>
                        <div class="text-white h5">Registered Agents</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-invention flat-large text-white" aria-hidden="true"></i>
                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="2350">0</div>
                        <div class="text-white h5">People Are Invested</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count wow text-center mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-investment flat-large text-white" aria-hidden="true"></i>
                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="13780">0</div>
                        <div class="text-white h5">Total Investment</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!--    Our Team
============================================================-->
<div class="full-row">
    <div class="container">
<!--                 <div class="row">
            <div class="col-lg-12">
                <h2 class="text-secondary double-down-line text-center">Agen Kami</h2>
                <span class="text-center mt-4 d-block mb-5">Proses untuk mendapatkan yang benar, hampir mudah, fleksibel, dan menyenangkan.</span> </div>
        </div> -->
<!--                 <div class="team-one">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="hover-zoomer bg-white shadow-one mb-4">
                        <div class="overflow-hidden"> <img src="images/team/01.jpg" alt=""> </div>
                        <div class="py-3 text-center">
                            <h5 class="text-secondary hover-text-primary"><a href="#">Karen Eilla Boyette</a></h5>
                            <span>Agen Kost</span> </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="hover-zoomer bg-white shadow-one mb-4">
                        <div class="overflow-hidden"> <img src="images/team/02.jpg" alt=""> </div>
                        <div class="py-3 text-center">
                            <h5 class="text-secondary hover-text-primary"><a href="#">Walter Devid Moye</a></h5>
                            <span>Agen kondominium</span> </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="hover-zoomer bg-white shadow-one mb-4">
                        <div class="overflow-hidden"> <img src="images/team/03.jpg" alt=""> </div>
                        <div class="py-3 text-center">
                            <h5 class="text-secondary hover-text-primary"><a href="#">Linda Dina Pate</a></h5>
                            <span>Agen Bangunan Komersial</span> </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>

<!--    Partner
===========================================================-->
<div class="full-row pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-secondary double-down-line text-center">Siapa Kami Bekerja</h2>
                <span class="text-center mt-4 d-block mb-5">Kami mendaftarkan peluang dan layanan kami sebagai perusahaan rajakost</span> </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="partner">
                    <div class="owl-carousel partners"> <img src="assets/images/partner/1.png" alt=""> <img src="assets/images/partner/2.png" alt=""> <img src="assets/images/partner/3.png" alt=""> <img src="assets/images/partner/4.png" alt=""> <img src="assets/images/partner/5.png" alt=""> <img src="assets/images/partner/3.png" alt=""> <img src="assets/images/partner/1.png" alt=""> <img src="assets/images/partner/2.png" alt=""> <img src="assets/images/partner/3.png" alt=""> <img src="assets/images/partner/4.png" alt=""> <img src="assets/images/partner/5.png" alt=""> <img src="assets/images/partner/3.png" alt=""> </div>
                </div>
            </div>
        </div>
    </div>
</div>
