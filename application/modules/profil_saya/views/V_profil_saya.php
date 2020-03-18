 <div class="col-md-11 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h2 class="text-secondary mb-4">Profil Saya</h2>
                                <div class="dashboard-personal-info p-5 bg-white">
                                     <?php foreach ($tampil as $key) {
                                $id = $key->id_user;
                                $status=$key->status;
                                   ?>
                                       
                                        <h5 class="text-secondary border-bottom-on-white pb-3 mb-4">Profil Saya</h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                             <form action="#" method="GET" enctype="multipart/form-data">
                                                <div class="font-18">

                                                        <div class="mb-1"><b>Nama:</b> <?php echo $key->nama ?></div><br>
                                                        <div class="mb-1"><b>No Telepon:</b> <?php echo $key->no_telp ?></div><br>
                                                         <div class="mb-1"><b>Sebagai:</b> <?php if ($status==1) {
                                                            echo "pemilik";
                                                        }if ($status==2) {
                                                           echo "penyewa";
                                                        } ?></div>
                                                    </div>
                                                
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-5 col-md-5">
                                            <img src="<?php echo base_url()?>assets/images/user/<?php echo $key->foto_user?>" alt="profile-photo" class="img-fluid">
                                                <div class="user-info mt-md-10"> 
                                                    <div class="mb-4 mt-3 col-lg-11 col-md-10">
                                                        <label class="btn btn-primary btn-block" for="file-upload">Unggah Foto</label>
                                                        <input id="file-upload" class="d-none" type="file" name="foto_user">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php } ?>
                            </div>