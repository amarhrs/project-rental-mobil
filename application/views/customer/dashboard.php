   <div class="jumbotron jumbotron-fluid">
        <div class="container"></div>
   </div>

   <!-- About -->
   <!-- <section class="py-5">
      <div class="container text-center">
         <h1 class="sub-item">About</h1>

         <div class="row mt-5">
            <div class="col-lg-6">
               <h1 class="about">Rental.Ly</h1>
               <p class="p-about fw-medium">
                  Layanan aplikasi ini dibuat karena kebutuhan konsumen di berbagai daerah akan keperluan kendaraan untuk berpergian terutama masa libur, dimana banyak orang membutuhkan alat transportasi dalam waktu dekat dan tempo penggunaan yang singkat
               </p>
            </div>
            <div class="col-lg-6">
               <img src="<?php echo base_url('assets/assets_customer/img/about.png') ?>" height="100px" width="100px" alt="">
            </div>
      
         </div>
      </div>
   </section> -->

   <!-- Our Renting Process -->
   <!-- <section class="py-5">
      <div class="container text-center">
         <h1 class="sub-item">Our Renting Process</h1>

         <div class="row align-items-center mt-5">
            <div class="col">
               <h4>Choose A Vehicle</h4>
               <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col">
               <h4>Book Your Car</h4>
               <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col">
               <h4>finish Process</h4>
               <p>Lorem ipsum dolor sit amet.</p>
            </div>
         </div>
      </div>
   </section> -->

   <section class="py-5 car">
      <div class="container text-center">
         <h1 class="sub-item">Cars For Rental</h1>
         
         <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 row-cols-lg-4 g-4 mt-lg-5">
            <?php foreach($mobil as $mb) : ?>
            <div class="col">
               <div class="card h-100">
                  <img src="<?php echo base_url('assets/upload/'.$mb->gambar) ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title"><?php echo $mb->merk ?></h5>
                     <p class="card-text">Harga</p>
                     <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                           <i class="fa fa-car text-primary mr-1"></i>
                           <span>AC</span>
                        </div>
                        <div class="px-2">
                           <span>|</span>
                        </div>
                        <div class="px-2">
                           <i class="fa fa-cogs text-primary mr-1"></i>
                           <span>Diesel</span>
                        </div>
                        <div class="px-2">
                           <span>|</span>
                        </div>
                        <div class="px-2">
                           <i class="fa fa-road text-primary mr-1"></i>
                           <span>Auto</span>
                        </div>
                     </div>
                     <div class="text-center">
                        <?php
                        if ($mb->status == "0") {
                           echo "<span class='btn btn-danger' disable>Telah di Rental</span>";
                        }else {
                           echo anchor('customer/rental/tambah_rental'.$mb->id_mobil, '<button class="btn btn-success">Rental</button>');
                        }
                        ?>
                        <a class="btn btn-warning" href="<?php echo base_url('customer/Dashboard/detail_mobil/').$mb->id_mobil ?>">Detail</a>
                        </div>
                  </div>
               </div>
            </div>
            <?php endforeach; ?>

         </div>
      </div>
   </section>

   

   