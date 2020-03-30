    <div class="full-row p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-xl-5">
                            <div class="row">
                            <div id="googleMap" style="width:100%;height:500px;"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-7">
                            <div class="property-search my-2">
                                <div class="col-md-12">
                                    <h3 class="double-down-line-left text-secondary position-relative pb-4 my-4">Halaman Cari</h3>
                                </div>
                                <div class="col-md-12">
                                    <form class="font-12 formicon text-ordinary" method="post" action="http://unicoderbd.com/theme/html/homex/action-page-post.html">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg-gray" id="validationDefault03" placeholder="Lokasi" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control bg-gray">
                                                        <option>Harga Min</option>
                                                        <option>100/bulan</option>
                                                        <option>150/bulan</option>
                                                        <option>200/bulan</option>
                                                        <option>250/bulan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control bg-gray">
                                                        <option>Harga Max</option>
                                                        <option>300/Bulan</option>
                                                        <option>400/bulan</ption>
                                                        <option>500/bulan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary w-100 mt-sm-50">Cari</button>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-12">
                                    <div class="row pb-4">
                                        <div class="col-md-9">
                                            <form class="selecting-command d-inline-block" method="get">
                                                <label>Lokasi Kost Terkait :</label>
                                                <select class="form-control bg-gray border-none">
                                                    <option>Malang</option>
                                                    <option>Jakarta</option>
                                                    <option>Bandung</option>
                                                    <option>Banyuwangi</option>
                                                    <option>Bali</option>
                                                </select>
                                            </form>
                                        </div>
                                        <div class="col-md-3">
                                            <form class="view-category float-right" method="get">
                                                <button class="active" title="Grid" value="grid" name="display" type="submit">
                                                <a href="property-grid-map.html"><i class="fas fa-th-large"></i></a>
                                                </button>
                                                <button title="List" value="list" name="display" type="submit">
                                                <a href="property-list-map.html"><i class="fas fa-th-list"></i></a>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <?php foreach ($tampil as $key) {
                                         ?>
                                        <div class="col-md-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                          <div class="overlay-black overflow-hidden position-relative"> <img src="<?php echo base_url() ?>assets/images/foto_kost/<?php echo $key->foto?>" alt="" height="200">
                                    <!-- <h4 style="color: white;"><div class="tag button alt featured"style="background-color: red">Terpakai</div></h4> -->
                                    <div class="sale bg-secondary text-white">Dikostkan</div>
                                    <div class="price" style="color: aqua;"><!-- Rp.6.000.00/tahun  --><span class="text-white">Rp.600.000/bulan</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h6 class="text-secondary hover-text-primary mb-2"><a href="detail 2.html"><?php echo $key->nama_kost ?></a></h6>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo $key->alamat_kost ?></span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                           <li>
                                             <i class="flaticon-bed"></i>&nbsp;Kasur
                                           </li>
                                           <li>
                                             <i class="fa fa-home"></i>&nbsp;Kamar
                                           </li>
                                           <li>
                                             <i class="fa fa-wifi"></i>&nbsp;&nbsp;Wi-fi
                                           </li>
                                            <li>
                                            <i class="fa fa-laptop"></i>&nbsp;tv
                                           </li>
                                        </ul>
                                    </div>
                                    <div class="p-4 d-inline-block w-100">
                                        <div class="float-left"><i class="fas fa-user text-primary mr-1"></i> Surly </div>
                                        <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 6 bulan lalu</div>
                                    </div>
                                        </div>
                                      </div>
                                    </div>
                                        <?php }?>
                                        <div class="col-md-12">
                                            <nav aria-label="Page navigation">
                                                <?php 
                                                    echo $this->pagination->create_links();
                                                    ?>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div>