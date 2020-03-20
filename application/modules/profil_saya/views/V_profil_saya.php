 <div class="col-md-11 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h2 class="text-secondary mb-4">Profil Saya</h2>
                                <div class="dashboard-personal-info p-5 bg-white">
    <?php 
            $rows = $this->db->query("SELECT * FROM t_login where no_telp='".$this->session->no_telp."'")->row_array();

            $id=$rows['id_user'];
            $status=$rows['status'];
            
 ?>
                                        <h5 class="text-secondary border-bottom-on-white pb-3 mb-4">Profil Saya</h5>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                             <form action="#" method="post" enctype="multipart/form-data">
                                                <div class="font-18">

                                                        <div class="mb-1"><b>Nama:</b> <?php echo $rows['nama'] ?></div><br>
                                                        <div class="mb-1"><b>No Telepon:</b> <?php echo $rows['no_telp'] ?></div><br>
                                                         <div class="mb-1"><b>Sebagai:</b> <?php if ($status==1) {
                                                            echo "pemilik";
                                                        }if ($status==2) {
                                                           echo "penyewa";
                                                        } ?></div>
                                                    </div>
                                                
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-5 col-md-5">
                                            <img src="<?php echo base_url('assets/images/foto_login/'.$rows['foto_user']); ?>" alt="foto-user" class="img-fluid">
                                            </div>
                                            <a href="<?php echo base_url('halaman_setting') ?>" class="btn btn-primary">Ubah Data</a>
                                        </div>
                                    </form>
                                </div>
                            </div>