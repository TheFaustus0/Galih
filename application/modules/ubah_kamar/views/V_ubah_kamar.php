<div class="col-md-11 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h4 class="text-secondary mb-4"></h4>
                                <div class="submit-form p-5 bg-white">
                                  <center><h5 class="text-secondary mb-5">Ubah Kamar Sesuai Denah Lantai </h5></center>
                                                <?php foreach ($tampil as $key) {
                            $id_lantai = $key->id_lantai;
                         ?>
                                    
                                        <div class="property-plan mt-4">
                                            <div class="row">
                                                <div class="col-lg-12">

                                    <form action="<?php echo base_url().'ubah_kamar/edit'; ?>" method="post" enctype="multipart/form-data">
                          
                                    <input type="text" name="id_lantai" value="<?php echo $id_lantai; ?>">
                                                     <div class="accordion mt-4" id="accordionExample">
                                                  
                                                      <div class="col-md-12 col-xl-12">
                                                          <div class="row">
                                                              <div class="dashboard-panel w-100">
                                                                  <!-- <h4 class="text-secondary mb-4"> Kamar Sesuai Denah Lantai </h4> -->
                                                                  <div class="submit-form p-5 bg-white">
                                                                    <div class="row">
                                                                      <div class="col-md-4"></div>
                                                                      <div class="col-md-4">
                                                                    
                                                                  <img id="image-preview" alt="image preview"/><br/>
                                                                  <input type="file" class="dropify" id="assets/images/foto_kamar" name="foto_kamar"  multiple required="required" />
                                                                   <br>
                                                                </div>
                                                                    </div>
                                                                          <div class="description">
                                                                              <div class="row">
                                                                                  <div class="col-lg-12 col-md-12">
                                                                                      <div class="form-group">
                                                                                          <label>Nama Kamar :</label>
                                                                                          <input type="text" name="nama_kamar" class="form-control" value="<?php echo $key->nama_kamar; ?>">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-sm-3 col-sm-3">
                                                                                    <div class="form-group">
                                                                                          <label>Ukuran Kamar :</label>
                                                                                          <input type="text" name="ukuran_kamar" class="form-control" placeholder="_ X _" value="<?php echo $key->ukuran; ?>">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-lg-6 col-md-12">
                                                                                      <div class="form-group">
                                                                                          <label>Tipe Kost :</label>
                                                                                          <select class="form-control" name="gender">
                                                                                              <option><?php echo $key->tipe_kost; ?></option>
                                                                                              <option value="laki-laki">Laki - Laki</option>
                                                                                              <option value="wanita">Wanita</option>
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
                                                                  <textarea class="form-control bg-gray" placeholder="Write Details..." rows="6" name="deskripsi_kamar"></textarea>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                          <div class="property-location mt-4">
                                                                            <h5 class="text-secondary">Harga</h5>
                                                                            <hr>
                                                                              <div class="row">
                                                                                  <div class="col-sm-3">
                                                                                      <div class="form-group">
                                                                                          <input type="text" name="perhari" placeholder="PerHari" class="form-control"value="<?php echo $key->perhari; ?>">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-sm-3">
                                                                                      <div class="form-group">
                                                                                          <input type="text" name="perminggu" class="form-control" placeholder="PerMinggu"value="<?php echo $key->perminggu; ?>">
                                                                                      </div>
                                                                                  </div>
                                                                                    <div class="col-sm-3">
                                                                                      <div class="form-group">
                                                                                          <input type="text" name="perbulan" placeholder="PerBulan" class="form-control"value="<?php echo $key->perbulan; ?>">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-sm-3">
                                                                                      <div class="form-group">
                                                                                          <input type="text" name="pertahun" class="form-control" placeholder="PerTahun"value="<?php echo $key->pertahun; ?>">
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                          <div class="additional-feature mt-4">
                                                                              <h5 class="text-secondary mb-3">Fitur Tambahan :</h5>
                                                                              <div class="row">
                                                                                  <div class="col-lg-3">
                                                                                          <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="kulkas" name="kulkas">
                                                                                            <label class="custom-control-label" for="kulkas">kulkas</label>
                                                                                          </div>
                                                                                          <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="mesincuci" name="mesincuci">
                                                                                            <label class="custom-control-label" for="mesincuci">Mesin Cuci</label>
                                                                                          </div>
                                                                                          <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="sofa" name="sofa">
                                                                                            <label class="custom-control-label" for="sofa">Sofa</label>
                                                                                          </div>
                                                                                      </div>
                                                                                  <div class="col-lg-3">
                                                                                         <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="wifi" name="wifi">
                                                                                            <label class="custom-control-label" for="wifi">Wifi</label>
                                                                                          </div>
                                                                                          <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="Listrik" name="Listrik">
                                                                                            <label class="custom-control-label" for="Listrik">Listrik</label>
                                                                                          </div>
                                                                                          <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="parkir_mobile" name="kasur">
                                                                                            <label class="custom-control-label" for="parkir_mobile">Kasur</label>
                                                                                          </div>
                                                                                  </div>
                                                                                  <div class="col-lg-3">
                                                                                          <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="air" name="air">
                                                                                            <label class="custom-control-label" for="air">Air</label>
                                                                                         </div>
                                                                                          <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="lemari" name="lemari">
                                                                                            <label class="custom-control-label" for="lemari">Lemari</label>
                                                                                          </div>
                                                                                          <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="kasur" name="ac">
                                                                                            <label class="custom-control-label" for="kasur">Kamar Mandi</label>
                                                                                          </div>
                                                                                  </div>
                                                                                  <div class="col-lg-3">
                                                                                         <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="tv" name="tv">
                                                                                            <label class="custom-control-label" for="tv">TV</label>
                                                                                         </div>
                                                                                          <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="heater" name="tv">
                                                                                            <label class="custom-control-label" for="heater">Water Heater</label>
                                                                                          </div>
                                                                                          <div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input" id="dapur" name="dapur">
                                                                                            <label class="custom-control-label" for="dapur">Dapur</label>
                                                                                          </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                  </div>
                                                              </div>
                                                              
                                                              <div class="modal fade" id="lantai_1" style="top:25%;">
                                                                  <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                    
                                                                      <!-- Modal Header -->
                                                                      <div class="modal-header">
                                                                        <h4 class="modal-title"></h4>
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      </div>
                                                                      
                                                                      <!-- Modal body -->
                                                                      <div class="modal-body">
                                                                          Apakah Anda Yakin untuk mengubah data ini ?
                                                                      </div>
                                                                      
                                                                      <!-- Modal footer -->
                                                                      <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                                        <button class="btn btn-success">Ubah</button>
                                                                      </div>
                                                                      
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                          </div>
                                                      </div>
                                                            </div>
                                                        </div>
                                                        </form>

                                                        
                                    <br>

                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                        <label class="custom-control-label" for="customCheck"><a href="syarat.html">Saya Menyetujui Syarat Dan Ketentuan Layanan</a></label>


                                      </div>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#lantai_1">Ubah</button>
                                </div>
                                <?php } ?>
                            </div>