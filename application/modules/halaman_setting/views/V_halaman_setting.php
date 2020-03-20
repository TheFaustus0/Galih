<div class="col-md-11 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h4 class="text-secondary mb-4">Informasi Pribadi</h4>
                                <div class="dashboard-personal-info p-5 bg-white">
                                    <form action="<?php echo base_url().'halaman_setting/edit'; ?>" method="post" enctype="multipart/form-data">
    <?php 
            $rows = $this->db->query("SELECT * FROM t_login where no_telp='".$this->session->no_telp."'")->row_array();
            $id=$rows['id_user'];
            
 ?>
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>">
                                        <h5 class="text-secondary border-bottom-on-white pb-3 mb-4">Info Akun</h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group name">
                                                            <label>Username</label>
                                                            <input type="text" name="nama" class="form-control" style="color: black;" value="<?php echo $rows['nama'] ?>">
                                                        </div>
                                                        <div class="form-group subject">
                                                            <label>Telepon</label>
                                                            <input type="text" name="no_telp" class="form-control" style="color: black;" value="<?php echo $rows['no_telp']; ?>">
                                                        </div>
                                                <br>
                                            </div>
                                            <div class="col-lg-4">
                                                 <div class="form-group" style="margin-top: -10%;"><br>
                                                <form action="<?php echo base_url().'halaman_setting/edit'; ?>" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id_user" value="<?php echo $id; ?>">
                                                <label></label><br><br>
                                                <input type="file" name="foto_user" accept="image/*" onchange="preview_image(event)">
                                                <img id="output_image" src="<?php echo base_url('assets/images/foto_login/'.$rows['foto_user']); ?>" />
                                                
                                            </div>
                                            </div>
                                            <div class="col-md-11">
                                                <center><button class="btn btn-primary mb-4" >Simpan perubahan</button></center>
                                            </div>
                                        </div>
                                                    
                                    </form>
                                </div>
                            <div class="col-md-11 col-xl-10">
                                <div class="row">
                                    <div class="dashboard-panel w-100">
                                    
                                        <h4 class="text-secondary mb-4">Ganti Password</h4>
                                        <div class="dashboard-personal-info p-5 bg-white">
                                            <form action="<?php echo base_url().'halaman_setting/password';?>" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id_user" value="<?php echo $id; ?>">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label for="current-password">Password Lama</label>
                                                            <abbr title="Put your current password here">
                                                            <input id="current-password" class="form-control bg-gray" type="password" name="old_password" class="form-control" >
                                                            </abbr> </div>
                                                        <div class="form-group position-relative">
                                                            <label for="new-password">Password Baru</label>
                                                            <abbr title="Password must 8 charactor and contain latter and number">
                                                            <input id="password" class="form-control bg-gray" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 6 Karakter' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="" required>
                                                            </abbr> </div>
                                                        <div class="form-group">
                                                            <label for="renew-password">Konfirmasi Password Baru</label>
                                                            <abbr title="Re-Type New Password">
                                                            <input id="password_two" class="form-control bg-gray" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Masukkan Password Yang Sama' : '');" placeholder="" required>
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
                            </div>