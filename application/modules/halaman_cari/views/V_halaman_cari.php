<div class="full-row p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-xl-5">
                        <div class="row">
                           <div id="googleMap" style="width:100%;height:500px;"></div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-7">
                        <div class="property-search my-2">
                            <div class="col-md-12">
                                <h3 class="double-down-line-left text-secondary position-relative pb-4 my-4">Halaman Cari</h3>
                            </div>
                            <div class="col-md-12">
                                <form class="font-12 formicon text-ordinary" method="post" action="http://unicoderbd.com/theme/html/homex/action-page-post.html">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg-gray" id="validationDefault03" placeholder="Lokasi" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control bg-gray">
                                                    <option>Harga Min</option>
                                                    <option>100/bulan</option>
                                                    <option>150/bulan</option>
                                                    <option>200/bulan</option>
                                                    <option>250/bulan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control bg-gray">
                                                    <option>Harga Max</option>
                                                    <option>300/Bulan</option>
                                                    <option>400/bulan</ption>
                                                    <option>500/bulan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary w-100 mt-sm-50">Cari</button>
                                            </div>
                                        </div>
                                     <!--    <div class="col-lg-12">
                                            <div class="d-inline-block text-ordinary hover-text-primary my-4 font-14"> <a class="checkbox-collapse" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">More Option</a> </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="collapse font-14" id="multiCollapseExample1">
                                                        <div class="card card-body px-0 border-0">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6">
                                                                    <ul class="check-submit">
                                                                        <li>
                                                                            <input id="feature-1" class="d-none" type="checkbox">
                                                                            <label for="feature-1">Parking Garage</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="feature-2" class="d-none" type="checkbox">
                                                                            <label for="feature-2">Security System</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="feature-3" class="d-none" type="checkbox">
                                                                            <label for="feature-3">Window Covering</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6">
                                                                    <ul class="check-submit">
                                                                        <li>
                                                                            <input id="feature-4" class="d-none" type="checkbox">
                                                                            <label for="feature-4">Swiming Pool</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="feature-5" class="d-none" type="checkbox">
                                                                            <label for="feature-5">Air Condition</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="feature-8" class="d-none" type="checkbox">
                                                                            <label for="feature-8">Fire Protection</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6">
                                                                    <ul class="check-submit">
                                                                        <li>
                                                                            <input id="feature-9" class="d-none" type="checkbox">
                                                                            <label for="feature-9">Garden</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="feature-10" class="d-none" type="checkbox">
                                                                            <label for="feature-10">Fire Place</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="feature-11" class="d-none" type="checkbox">
                                                                            <label for="feature-11">Emeargency Exit</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6">
                                                                    <ul class="check-submit">
                                                                        <li>
                                                                            <input id="feature-12" class="d-none" type="checkbox">
                                                                            <label for="feature-12">Home Theater</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="feature-13" class="d-none" type="checkbox">
                                                                            <label for="feature-13">Gym & Sports</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <div class="row pb-4">
                                    <div class="col-md-9">
                                        <form class="selecting-command d-inline-block" method="get">
                                            <label>Lokasi Kost Terkait :</label>
                                            <select class="form-control bg-gray border-none">
                                                <option>Malang</option>
                                                <option>Jakarta</option>
                                                <option>Bandung</option>
                                                <option>Banyuwangi</option>
                                                <option>Bali</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="col-md-3">
                                        <form class="view-category float-right" method="get">
                                            <button class="active" title="Grid" value="grid" name="display" type="submit">
                                            <a href="property-grid-map.html"><i class="fas fa-th-large"></i></a>
                                            </button>
                                            <button title="List" value="list" name="display" type="submit">
                                            <a href="property-list-map.html"><i class="fas fa-th-list"></i></a>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                          <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/thumbnail/p1.jpg" alt="">
                                    <!-- <h4 style="color: white;"><div class="tag button alt featured"style="background-color: red">Terpakai</div></h4> -->
                                    <div class="sale bg-secondary text-white">Dikostkan</div>
                                    <div class="price" style="color: aqua;"><!-- Rp.6.000.00/tahun  --><span class="text-white">Rp.600.000/bulan</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h6 class="text-secondary hover-text-primary mb-2"><a href="detail 2.html">Nirala Kost</a></h6>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Jln.Agung No 17</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                           <li>
                                             <i class="flaticon-bed"></i>&nbsp;Kasur
                                           </li>
                                           <li>
                                             <i class="fa fa-home"></i>&nbsp;Kamar
                                           </li>
                                           <li>
                                             <i class="fa fa-wifi"></i>&nbsp;&nbsp;Wi-fi
                                           </li>
                                            <li>
                                            <i class="fa fa-laptop"></i>&nbsp;tv
                                           </li>
                                        </ul>
                                    </div>
                                    <div class="p-4 d-inline-block w-100">
                                        <div class="float-left"><i class="fas fa-user text-primary mr-1"></i> Surly </div>
                                        <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 6 bulan lalu</div>
                                    </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/thumbnail/p2.jpg" alt="">
                                   <!--  <h4><div class="tag button alt featured"style="background-color: #00ff00">Tersedia</div></h4> -->
                                   <div class="sale bg-secondary text-white">Dikoskan</div>
                                   <div class="price" style="color: aqua;"><span class="text-white">Rp.200.000/bulan</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h6 class="text-secondary hover-text-primary mb-2"><a href="detail 2.html">bunga kost</a></h6>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Jln jatim no.12</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                           <li>
                                             <i class="flaticon-bed"></i>&nbsp;Kasur
                                           </li>
                                           <li>
                                             <i class="fa fa-home"></i>&nbsp;Kamar
                                           </li>
                                           <li>
                                             <i class="fa fa-wifi"></i>&nbsp;&nbsp;Wi-fi
                                           </li>
                                            <li>
                                            <i class="fa fa-laptop"></i>&nbsp;tv
                                           </li>
                                        </ul>
                                    </div>
                                    <div class="p-4 d-inline-block w-100">
                                        <div class="float-left"><i class="fas fa-user text-primary mr-1"></i> Zaenal </div>
                                        <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 5 bulan lalu</div>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/thumbnail/p3.jpg" alt="">
                                    <!-- <h4 style="color: white;"><div class="tag button alt featured"style="background-color: red">Terpakai</div></h4> -->
                                    <div class="sale bg-secondary text-white"> Dikoskan</div>
                                    <div class="price" style="color: aqua;"> <span class="text-white">Rp.300.000/bulan</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h6 class="text-secondary hover-text-primary mb-2"><a href="detail 2.html"> Melati Kost</a></h6>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Jln tugung 01</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                            <li>
                                             <i class="flaticon-bed"></i>&nbsp;Kasur
                                           </li>
                                           <li>
                                             <i class="fa fa-home"></i>&nbsp;Kamar
                                           </li>
                                           <li>
                                             <i class="fa fa-wifi"></i>&nbsp;&nbsp;Wi-fi
                                           </li>
                                            <li>
                                            <i class="fa fa-laptop"></i>&nbsp;tv
                                           </li>
                                        </ul>
                                    </div>
                                    <div class="p-4 d-inline-block w-100">
                                        <div class="float-left"><i class="fas fa-user text-primary mr-1"></i> Sendi</div>
                                        <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i>  5 bulan lalu</div>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                          <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/thumbnail/p4.jpg" alt="">
                                    <!-- <h4 style="color: white;"><div class="tag button alt featured"style="background-color: red">Terpakai</div></h4> -->
                                    <div class="sale bg-secondary text-white">Dikostkan</div>
                                    <div class="price" style="color: aqua;"><!-- Rp.6.000.00/tahun  --><span class="text-white">Rp.600.000/bulan</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h6 class="text-secondary hover-text-primary mb-2"><a href="detail 2.html">Nirala Kost</a></h6>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Jln.Agung No 17</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                           <li>
                                             <i class="flaticon-bed"></i>&nbsp;Kasur
                                           </li>
                                           <li>
                                             <i class="fa fa-home"></i>&nbsp;Kamar
                                           </li>
                                           <li>
                                             <i class="fa fa-wifi"></i>&nbsp;&nbsp;Wi-fi
                                           </li>
                                            <li>
                                            <i class="fa fa-laptop"></i>&nbsp;tv
                                           </li>
                                        </ul>
                                    </div>
                                    <div class="p-4 d-inline-block w-100">
                                        <div class="float-left"><i class="fas fa-user text-primary mr-1"></i> Surly </div>
                                        <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 6 bulan lalu</div>
                                    </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/thumbnail/p5.jpg" alt="">
                                   <!--  <h4><div class="tag button alt featured"style="background-color: #00ff00">Tersedia</div></h4> -->
                                   <div class="sale bg-secondary text-white">Dikoskan</div>
                                   <div class="price" style="color: aqua;"><span class="text-white">Rp.200.000/bulan</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h6 class="text-secondary hover-text-primary mb-2"><a href="detail 2.html">bunga kost</a></h6>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Jln jatim no.12</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                           <li>
                                             <i class="flaticon-bed"></i>&nbsp;Kasur
                                           </li>
                                           <li>
                                             <i class="fa fa-home"></i>&nbsp;Kamar
                                           </li>
                                           <li>
                                             <i class="fa fa-wifi"></i>&nbsp;&nbsp;Wi-fi
                                           </li>
                                            <li>
                                            <i class="fa fa-laptop"></i>&nbsp;tv
                                           </li>
                                        </ul>
                                    </div>
                                    <div class="p-4 d-inline-block w-100">
                                        <div class="float-left"><i class="fas fa-user text-primary mr-1"></i> Zaenal </div>
                                        <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 5 bulan lalu</div>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/thumbnail/p6.jpg" alt="">
                                    <!-- <h4 style="color: white;"><div class="tag button alt featured"style="background-color: red">Terpakai</div></h4> -->
                                    <div class="sale bg-secondary text-white"> Dikoskan</div>
                                    <div class="price" style="color: aqua;"> <span class="text-white">Rp.300.000/bulan</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h6 class="text-secondary hover-text-primary mb-2"><a href="detail 2.html"> Melati Kost</a></h6>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Jln tugung 01</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                            <li>
                                             <i class="flaticon-bed"></i>&nbsp;Kasur
                                           </li>
                                           <li>
                                             <i class="fa fa-home"></i>&nbsp;Kamar
                                           </li>
                                           <li>
                                             <i class="fa fa-wifi"></i>&nbsp;&nbsp;Wi-fi
                                           </li>
                                            <li>
                                            <i class="fa fa-laptop"></i>&nbsp;tv
                                           </li>
                                        </ul>
                                    </div>
                                    <div class="p-4 d-inline-block w-100">
                                        <div class="float-left"><i class="fas fa-user text-primary mr-1"></i> Sendi</div>
                                        <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i>  5 bulan lalu</div>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/thumbnail/01.jpg" alt="">
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$582,000 <span class="text-white">$2430/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="detail 2.html">Office Floor In Trade Center</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="px-4 pb-4 d-inline-block w-100">
                                                    <div class="float-left"><i class="fas fa-user text-primary mr-1"></i> Jeson Billiam</div>
                                                    <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/thumbnail/02.jpg" alt="">
                                                <div class="featured bg-primary text-white">Featured</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$582,000 <span class="text-white">$2430/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="detail 2.html">Office Floor In Trade Center</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="px-4 pb-4 d-inline-block w-100">
                                                    <div class="float-left"><i class="fas fa-user text-primary mr-1"></i> Jeson Billiam</div>
                                                    <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/thumbnail/03.jpg" alt="">
                                                <div class="featured bg-primary text-white">Featured</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$582,000 <span class="text-white">$2430/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="detail 2.html">Office Floor In Trade Center</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="px-4 pb-4 d-inline-block w-100">
                                                    <div class="float-left"><i class="fas fa-user text-primary mr-1"></i> Jeson Billiam</div>
                                                    <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination justify-content-center mt-4">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br> 
        </div>