   <section class="bg-primary">
      <div class="container text-white p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
         <div class="d-sm-flex align-items-center justify-content-between">
            <div>
               <h1>Welome To, Rental<b>Ly</b></h1>
               <p class="lead my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Praesentium quae ullam perferendis deserunt animi,
                  ipsum illo totam corrupti illum eveniet vel cumque
                  ea sint voluptatibus aut unde doloribus labore omnis!</p>
               <button class="btn btn-light btn-lg">Explore</button>
            </div>
            <img class="img-fluid w-50 d-none d-sm-block" src="<?php echo base_url('assets/assets_customer/images/showcase3.png') ?>" alt="">
         </div>
      </div>
   </section>

   <div class="container my-5 py-5" id="cars">
      <?php echo $this->session->flashdata('pesan') ?>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
         <?php foreach ($mobil as $mb) : ?>
            <div class="col">
               <div class="card h-100 rounded-4 shadow bg-body-tertiary">
                  <img src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" class="card-img-top p-4" alt="...">
                  <div class="card-body">
                     <h5 class="card-title"><?php echo $mb->merk ?></h5>
                     <p class="card-text">Rp. <?php echo number_format($mb->harga, 0, ',', '.') ?> / Hari</p>
                     <hr>
                  </div>

                  <div class="card-body">
                     <table class="table table-bordered text-center">
                        <tr>
                           <td>
                              <?php if ($mb->ac == '1') {
                                 echo "<i class='bi bi-check-circle-fill text-info'></i>";
                              } else {
                                 echo "<i class='bi bi-x-circle-fill text-danger'></i>";
                              } ?>
                              AC
                           </td>
                           <td>
                              <?php if ($mb->supir == '1') {
                                 echo "<i class='bi bi-check-circle-fill text-info'></i>";
                              } else {
                                 echo "<i class='bi bi-x-circle-fill text-danger'></i>";
                              } ?>
                              Supir
                           </td>
                           <td>
                              <?php if ($mb->mp3_player == '1') {
                                 echo "<i class='bi bi-check-circle-fill text-info'></i>";
                              } else {
                                 echo "<i class='bi bi-x-circle-fill text-danger'></i>";
                              } ?>
                              Mp3 Player
                           </td>
                           <td>
                              <?php if ($mb->central_lock == '1') {
                                 echo "<i class='bi bi-check-circle-fill text-info'></i>";
                              } else {
                                 echo "<i class='bi bi-x-circle-fill text-danger'></i>";
                              } ?>
                              Central Lock
                           </td>
                        </tr>
                     </table>

                  </div>

                  <div class="card-body">
                     <?php
                     if ($mb->status == "0") {
                        echo "<span class='btn btn-danger' disable>Telah di Rental</span>";
                     } else {
                        echo anchor('customer/Rental/tambah_rental/' . $mb->id_mobil, '<button class="btn btn-success">Rental</button>');
                     }
                     ?>
                     <a class="btn btn-warning" href="<?php echo base_url('customer/Dashboard/detail_mobil/') . $mb->id_mobil ?>">Detail</a>
                  </div>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </div>