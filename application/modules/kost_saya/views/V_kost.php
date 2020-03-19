                    <div class="col-md-12 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h4 class="text-secondary mb-4">Kos Saya</h4>
                                <table class="w-100 items-list bg-transparent">
                                    <thead>
                                        <tr class="bg-white">
                                            <th>Gambar Kos</th>
                                            <th>Tanggal Upload</th>
                                            <!-- <th>Views</th> -->
                                            <!-- <th>Komentar</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php foreach($tampil as $res) {
                                        $id_kost = $res->id_kost; ?>
                                        <tr>
                                            <td><img  src="<?= base_url(); ?>assets/images/foto_kost/<?= $res->foto?>" width="150px" />
                                                <div class="property-info d-table">
                                                    <h5 class="text-secondary"><?php echo $res->nama_kost ?></h5>
                                                    <input type="hidden" name="id_kost" value="<?php echo $res->id_kost ?>">
                                                    <span class="font-14"><i class="">Block 1-A</i> </span>
                                                   <!--  <div class="price mt-3"> <span class="text-primary">Rp 500.000</span></div> -->
                                                </div></td>
                                            <td>10 Jan, 2019</td>
                                            <!-- <td>34</td> -->
                                            <!-- <td>5 Comments</td> -->
                                            <td>
                                            <a href="<?php echo base_url().'kost_saya2/edit_kost/'.$id_kost  ?>" class="btn btn-outline-info mr-1 mb-1">Ubah</a>
                                            <a data-toggle="modal" data-target="#hapus"class="btn btn-outline-danger mb-1">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                </div>
                </div>
                </div>
                            <div class="modal-dialog">
                              <div class="modal-content">
                              
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h5>Hapus</h5>
                                  <h4 class="modal-title"></h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="mt-6 p-5 shadow-one">
                                    <center><h5>Apakah anda Yakin Untuk Menghapusnya?</h5></center>
                                    <br>
                                    </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                  <a type="button" class="btn btn-danger btn-block" href="<?php echo base_url('kost_saya/hapus/'. $res->id_kost) ?>">Hapus</a>
                                 <!--  <a href="dashboard-booking.html" class="btn btn-success">Kirim</a> -->
                                </div>
                                
                              </div>
                            </div>
                          </div>