<div class="col-md-11 col-xl-10">
                        <div class="row">
                            <div class="dashboard-panel w-100">
                                <h4 class="text-secondary mb-4">Kamar Kost Yang Di Sewa</h4>
                                <table class="w-100 items-list bg-transparent">
                                    <thead>
                                        <tr class="bg-white">
                                            <th>Gambar Kamar</th>
                                            <th>Tgl Boking</th>
                                            <th>Tgl Masuk</th>
                                            <th>Durasi Sewa</th>
                                            <!-- <th>Angsuran Selanjutnya</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="assets/images/thumbnail/2.jpg" alt="">
                                                <div class="property-info d-table">
                                                    <h5 style="color: blue;" class="text">Bunga Kost</h5>
                                                    <h6 class="text-secondary">Block 1-A</h6>
                                                </div></td>
                                            <td>11-2-2020</td>
                                            <td>12-2-2020</td>
                                            <td>5 Bulan</td>
                                            <td>
                                                <button class="btn btn-outline-info" type="button" title="send" data-toggle="modal" data-target="#detail">Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/thumbnail/1.jpg" alt="">
                                                <div class="property-info d-table">
                                                    <h5 style="color: blue;" class="text">Bunga Kost</h5>
                                                    <h6 class="text-secondary">Block 1-A</h6>
                                                </div></td>
                                            <td>15-2-2020</td>
                                            <td>12-12-2020</td>
                                            <td>5 Bulan</td>
                                            <td>
                                                <button class="btn btn-outline-info" type="button" title="send" data-toggle="modal" data-target="#detail">Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/thumbnail/2.jpg" alt="">
                                                <div class="property-info d-table">
                                                    <h5 style="color: blue;" class="text">Bunga Kost</h5>
                                                    <h6 class="text-secondary">Block 1-A</h6>
                                                </div></td>
                                            <td>11-2-2020</td>
                                            <td>12-2-2020</td>
                                            <td>5 Bulan</td>
                                            <td>
                                                <a  href="#" class="btn btn-outline-info">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/thumbnail/1.jpg" alt="">
                                                <div class="property-info d-table">
                                                    <h5 style="color: blue;" class="text">Bunga Kost</h5>
                                                    <h6 class="text-secondary">Block 1-A</h6>
                                                </div></td>
                                            <td>15-2-2020</td>
                                            <td>12-12-2020</td>
                                            <td>5 Bulan</td>
                                            <td>
                                                <button class="btn btn-outline-info" type="button" title="send" data-toggle="modal" data-target="#detail">Detail</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center mt-5">
                                        <li class="page-item disabled"> <span class="page-link">Previous</span> </li>
                                        <li class="page-item active" aria-current="page"> <span class="page-link"> 1 <span class="sr-only">(current)</span> </span> </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">...</li>
                                        <li class="page-item"><a class="page-link" href="#">45</a></li>
                                        <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="dashboard-copyright bg-white py-4 text-center w-100">© 2020 Rajakost</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 
<!-- The Modal -->
  <div class="modal fade" id="detail" style="top: 15%;">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-content">
        <div class="modal-header">
            <h5>Detail Sewa</h5>
          <h4 class="modal-title"></h4>
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
          <div class="col-sm-4">
              <h4><p style="color: blue;">Bunga Kost</p></h4>
              <h5><p >Block 1-A</p></h5>
          </div>
          </div>
          <div class="row">
              <div class="col-sm-4">
                  <p>Tanggal Masuk</p> 
                  <p>Durasi Sewa</p> 
                  <p>Total Harga Sewa</p> 
              </div>
              <div class="col-sm-1">
                  :
                  <br>
                  :
                  <br>
                  :
              </div>
              <div class="col-sm-4">
                  <p> 03-12-2020</p> 
                  <p> 5 Bulan</p> 
                  <p> 1.000.000</p> 
              </div>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
         <!--  <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button> -->
          <a href="dashboard-purchase.html" class="btn btn-success">Selesai</a>
        </div>
