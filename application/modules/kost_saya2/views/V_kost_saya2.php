<div class="col-md-11 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h4 class="text-secondary mb-4">Ubah Data</h4>
                                <div class="submit-form p-5 bg-white">
                                <form method="post"  action="<?php echo base_url().'kost/edit_kost' ?>" enctype="multipart/form-data">
                                    <div class="upload-media mt-5">
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="nav nav-pills mb-3 bg-gray" id="pills-tab" role="tablist">
                                                        <li class="nav-item"  style="margin-left: 20%;"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Data Kost</a> </li>
                                                        <li></li>
                                                        <li class="nav-item"  style="margin-left: 20%;"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Data Kamar</a> </li>
                                                    </ul>
                                                    <div class="tab-content mt-4" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                                            <div class="row">
                              <div class="dashboard-panel w-100">
                                <div class="submit-form p-5 bg-white">
                                        <div class="description">
                                            <h5 class="text-secondary">Informasi Kost :</h5>
                                            <hr>
                                            <?php foreach($tampil as $res) {
                                               $id_kost = $res->id_kost;
                                            ?>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Nama Kost :</label>
                                                        <span class="ml-2 fa-2x"><i title="Property Title" class="fas fa-question-circle text-secondary"></i></span>
                                                        <input type="text" name="nama_kost" class="form-control" value="<?php echo $res->nama_kost?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Tahun Di Bangun Atau Terakhir Di Renovasi :</label>
                                                        <select class="form-control" name="tahun">
                                                          <option><?= $res->tahun_dibangun ?> </option>
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
                                                            <option><?= $res->tipe_kost ?> </option>
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
                                                        <textarea class="form-control bg-gray" rows="8" name="deskripsi"><?php $res->deskripsi ?></textarea>
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
                                                        <input type="text" name="alamat" class="form-control" value="<?php echo $res->alamat_kost ?>">
                                                    </div>
                                                </div>
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
                                                          <label class="custom-control-label" for="wifi"><i class="fa fa-wifi"></i>&nbsp;Wifi</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="Listrik" name="listrik">
                                                          <label class="custom-control-label" for="Listrik"><i class="fa fa-bolt"></i>&nbsp;Listrik</label>
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
                                                          <input type="checkbox" class="custom-control-input" id="luar" name="kamar_mandi_luar">
                                                          <label class="custom-control-label" for="luar"><i class="fa fa-bath"></i>&nbsp;Kamar Mandi Luar</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" class="custom-control-input" id="dalam" name="kamar_mandi_dalam">
                                                          <label class="custom-control-label" for="dalam"><i class="fa fa-bath"></i>&nbsp;Kamar Mandi dalam</label>
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
                                                        <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#rumah_sakit" role="tab" aria-controls="pills-home" aria-selected="true">Rumah Sakit</a> </li>
                                                        <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">SuperMarket</a> </li>
                                                        <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Sekolah</a> </li>
                                                        <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Rumah Makan</a> </li>
                                                    </ul>
                                                    <div class="tab-content mt-4" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="rumah_sakit" role="tabpanel" aria-labelledby="pills-home">
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
                                    <a class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#tambahkmr">Ubah</a>
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
                                              <button class="btn btn-success">Ubah</button>
                                            </div>
                                            <?php } ?>
                                            <?= form_close(); ?>
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