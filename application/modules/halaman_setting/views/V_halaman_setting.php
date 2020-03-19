<div class="col-md-11 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h4 class="text-secondary mb-4">Informasi Pribadi</h4>
                                <div class="dashboard-personal-info p-5 bg-white">
                                    <form action="<?php echo base_url().'halaman_setting/edit'; ?>" method="post" enctype="multipart/form-data">
                                        <?php foreach ($tampil as $key) {
                                            $id = $key->id_user;
                                        ?>
                                        <input type="hidden" name="id_user" value="<?php echo $key->id_user; ?>">
                                        <h5 class="text-secondary border-bottom-on-white pb-3 mb-4">Info Akun</h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group name">
                                                            <label>Username</label>
                                                            <input type="text" name="nama" class="form-control" style="color: black;" value="<?php echo $key->nama; ?>">
                                                        </div>
                                                        <div class="form-group subject">
                                                            <label>Telepon</label>
                                                            <input type="text" name="no_telp" class="form-control" style="color: black;" value="<?php echo $key->no_telp; ?>">
                                                        </div>
                                                <br>
                                                <div class="send-btn">
                                                        <button class="btn btn-primary mb-4"  style="margin-left: 67%;">Simpan perubahan</button>
                                                    </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="form-group" style="margin-top: -10%;"><br>
                                                <form action="<?php echo base_url().'halaman_setting/edit'; ?>" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id_user" value="<?php echo $key->id_user; ?>">
                                                <label></label><br><br>
                                                <input type="file" name="foto_user"> 
                                            </div>
                                            <!-- <div class="col-lg-5 col-md-12">
                                                <div class="user-info mt-md-50"> <img src="assets/images/team/p.jpeg" alt="">
                                                    <div class="mb-4 mt-3 col-lg-11 col-md-10">
                                                        <label class="btn btn-primary btn-block" for="file-upload">Unggah Foto</label>
                                                        <input id="file-upload" class="d-none" type="file" name="file-upload">
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </form>
                                </div>
                            <div class="col-md-11 col-xl-10">
                                <div class="row">
                                    <div class="dashboard-panel w-100">
                                    
                                        <h4 class="text-secondary mb-4">Ganti Password</h4>
                                        <div class="dashboard-personal-info p-5 bg-white">
                                            <form action="<?php echo base_url().'halaman_setting/password';?>" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id_user" value="<?php echo $key->id_user; ?>">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label for="current-password">Password Lama</label>
                                                            <abbr title="Put your current password here">
                                                            <input id="current-password" type="text" name="password" class="form-control">
                                                            </abbr> </div>
                                                        <div class="form-group position-relative">
                                                            <label for="new-password">Password Baru</label>
                                                            <abbr title="Password must 8 charactor and contain latter and number">
                                                            <input id="new-password" type="text" name="password" class="form-control" >
                                                            </abbr> </div>
                                                        <div class="form-group">
                                                            <label for="renew-password">Konfirmasi Password Baru</label>
                                                            <abbr title="Re-Type New Password">
                                                            <input id="renew-password" type="text" name="password" class="form-control">
                                                            </abbr> </div>
                                                            <div class="send-btn">
                                                        <button class="btn btn-primary mb-4"  style="margin-left: 40%;">Simpan perubahan</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <a  class="text-primary d-table mt-4">Klik disini jika lupa password?</a> </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            </div>