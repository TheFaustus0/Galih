
<div class="col-md-12 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h4 class="text-secondary mb-4">Kamar Saya</h4>
                                <table class="w-100 items-list bg-transparent">
                                    <thead>
                                        <tr class="bg-white">
                                            <th>Gambar Kamar</th>
                                            <th>Tanggal Upload</th>
                                            <!-- <th>Views</th> -->
                                            <!-- <th>Komentar</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php foreach($tampil as $key) {
                                        $id_kamar = $key->id_kamar; ?>
                                        <tr>
                                            <td><img src="assets/images/thumbnail/2.jpg" alt="">
                                                <div class="property-info d-table">
                                                    <h5 class="text-secondary"><?php echo $key->nama_kamar ?></h5>
                                                    <span class="font-14"><i class="">Block 1-A</i> </span>
                                                   <!--  <div class="price mt-3"> <span class="text-primary">Rp 500.000</span></div> -->
                                                </div></td>
                                            <td>10 Jan, 2019</td>
                                            <!-- <td>34</td> -->
                                            <!-- <td>5 Comments</td> -->
                                            <td>
                                            <a href="<?php echo base_url().'ubah_kamar'?>" class="btn btn-outline-info mr-1 mb-1">Ubah</a> 
                                            <a data-toggle="modal" data-target="#hapus"class="btn btn-outline-danger mb-1">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                </div>
                </div>
                </div>