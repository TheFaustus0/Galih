<div class="col-md-11 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h4 class="text-secondary mb-4"></h4>
                                <div class="submit-form p-5 bg-white">
                                  <center><h3 class="text-secondary mb-5">Konfirmasi Pembayaran</h3></center>
                                  <br>
                                  <br>
                                  <div class="box-content" style="margin-left: 5%;">
                                      <form action="" method="post" enctype="multipart/form-data">
                                      <table width="100%">
                                      <tbody><tr>
                                      <td><i class="text-secondary mb-5" >Data Pelanggan</i></td>
                                      <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                      <td>Nama Lengkap *</td>
                                      <td>: <span class=" your-name"><input type="text" name="your-name" value="" size="40" ></span></td>
                                      </tr>
                                      <tr>
                                      <td>Email *</td>
                                      <td>: <span class=" your-email"><input type="email" name="your-email" size="40"></span></td>
                                      </tr>
                                      <tr>
                                      <td>No Telp *</td>
                                      <td>: <span class=" no-telp"><input type="text" name="no-telp" size="40"></span></td>
                                      </tr>
                                      <tr>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                      <td><i class="text-secondary mb-5">Data Pembayaran</i></td>
                                      <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                      <td>No Faktur</td>
                                      <td>: <span><input type="text" name="no-invoice" value="" size="40"></span></td>
                                      </tr>
                                      <tr>
                                      <td>Tanggal Pembayaran</td>
                                      <td>
                                        <span><div class="form-group">:<input type="text" name="tanggal" class="tanggal" style="margin-left: 1%;"/></div></span>
                                      </td>
                                      </tr>
                                      <tr>
                                      <td>Bank yang digunakan</td>
                                      <td>: Dari <span class=" dari-bank"><select name="dari-bank"><option value="">---</option><option value="BCA">BRI</option><option value="Mandiri">BNI</option><option value="Lain-lain">BCA</option></select></span> Ke <span class=" ke-bank"><select name="ke-bank" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="">---</option><option value="BCA">BRI</option><option value="Mandiri">BNI</option><option value="Mandiri">BCA</option></select></span></td>
                                      </tr>
                                      <tr>
                                      <td>Nama Pemilik Rekening</td>
                                      <td>: <span class=" pemilik-rek"><input type="text" name="pemilik-rek" value="" size="40"></span></td>
                                      </tr>
                                      <tr>
                                      <td>Jumlah Pembayaran *</td>
                                      <td>: Rp <span class=" jumlah"><input type="text" name="jumlah" size="40"></span> <i>masukkan angka saja</i></td>
                                      </tr>
                                      <tr>
                                      <td>Bukti Pembayaran</td>
                                      <td>: <span class=" bukti"><input type="file" name="bukti" size="40"></span></td>
                                      </tr>
                                      <tr>
                                      <td>Keterangan Tambahan</td>
                                      <td>:<span class=""><textarea name="your-message" cols="40" rows="7"></textarea></span> </td>
                                      </tr>
                                      </tbody></table>
                                      </form>
                                      <center><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#bayar">&nbsp;&nbsp;&nbsp;Bayar&nbsp;&nbsp;&nbsp;</button></center>
                                      </div>
                                      </div>

                                  <br>
                                  <br>                          
                                </div>
                            </div>
                            <div class="dashboard-copyright bg-white py-4 text-center w-100"><p style="color: green;">© 2020 Rajakost</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <div class="modal fade" id="bayar" style="top: 15%;">
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title"></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <h5><p>Apakah Anda Yakin ?</p></h5>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <a class="btn btn-success" href="dashboard-booking.html">Bayar</a>
                </div>
                             
              </div>
            </div>
          </div>
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>