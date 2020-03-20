<div class="col-md-11 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h4 class="text-secondary mb-4">Permintaan Pemesanan</h4>
                                <table class="w-100 items-list">
                                    <thead>
                                        <tr>
                                            <th  style="text-align: center;">Id</th>
                                            <th  style="text-align: center;">Gambar Kost</th>
                                            <th  style="text-align: center;">Nama Penyewa</th>
                                            <th  style="text-align: center;">Tanggal Masuk</th>
                                            <th  style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#224</td>
                                            <td><img src="assets/images/thumbnail/1.jpg" alt="">
                                                <div class="property-info d-table">
                                                    <p><b>Bunga Kost</b></p>
                                                    <div class="price mt-3"><span>Block 1-A</span></div>
                                                </div></td>
                                            <td>God Zainal</td>
                                            <td>20 Maret 2020</td>
                                            <td><a class="btn btn-outline-success" data-toggle="modal" data-target="#setuju">Setuju</a> <a data-toggle="modal" data-target="#hapus"class="btn btn-outline-danger ">Tolak</a></td>
                                        </tr>
                                        <tr>
                                            <td>#224</td>
                                            <td><img src="assets/images/thumbnail/2.jpg" alt="">
                                                <div class="property-info d-table">
                                                    <p><b>Bunga Kost</b></p>
                                                    <div class="price mt-3"><span>Block 2-A</span></div>
                                                </div></td>
                                            <td>God Zainal</td>
                                            <td>20 Maret 2020</td>
                                            <td><a href="#" class="btn btn-outline-success">Setuju</a> <a data-toggle="modal" data-target="#hapus"class="btn btn-outline-danger ">Tolak</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center mt-5">
                                        <li class="page-item disabled"> <span class="page-link">Sebelumnya</span> </li>
                                        <li class="page-item active" aria-current="page"> <span class="page-link"> 1 <span class="sr-only">(current)</span> </span> </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">...</li>
                                        <li class="page-item"><a class="page-link" href="#">45</a></li>
                                        <li class="page-item"> <a class="page-link" href="#">Selanjutnya</a> </li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- Wrapper End -->
<div class="modal fade" id="hapus" style="top: 15%;">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
            <h5>Tolak</h5>
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="mt-6 p-5 shadow-one">
            <center><h5>Apakah anda Yakin Untuk Menolaknya?</h5></center>
            <br>
            </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Batal</button>
         <button type="button" class="btn btn-success  btn-block">Setuju</button>
         <!--  <a href="dashboard-booking.html" class="btn btn-success">Kirim</a> -->
        </div>
        
      </div>
    </div>
  </div>

    <div class="modal fade" id="setuju" style="top: 5%;">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center;">Detail</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
                <div class="modal-body">
            <div class="row">
            <div class="col-sm-5">
                <img src="assets/images/thumbnail/2.jpg" width="100" height="80">
                <br>
                <br>
          </div>
          <div class="col-sm-5">
              <h4><p>Bunga Kost</p></h4>
              <p>Block 1-A</p>
          </div>
          </div>
          <div class="row">
              <div class="col-sm-4">
                  <p>Nama Penyewa</p> 
                  <p>Jenis Kelamin</p> 
                  <p>No Telepon</p>
                  <br>
                  <p>Foto Ktp</p> 
              </div>
              <div class="col-sm-1">
                  :
                  <br>
                  :
                  <br>
                  :
                  <br>
                  :
                  <br>
                  <br>
                  :
                  
              </div>
              <div class="col-sm-4">
                  <p> God Zaenal</p> 
                  <p> Perempuan</p> 
                  <p> 082696969</p>
                  <p><img src="assets/images/thumbnail/00.jpg" width="100" height="80"></p>
              </div>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <a href="dashboard-booking-pemilik.html" class="btn btn-success">Setuju</a>
        </div>
        
      </div>
    </div>
  </div>