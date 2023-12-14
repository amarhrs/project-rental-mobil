<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Mobil</h1>
	</div>

	<!-- Content Row -->
	<?php foreach($detail_mobil as $dm) : ?>
        <div class="row">
			<div class="col-sm-8">
				<div class="card shadow">
					<div class="card-header">
						<h6 class="m-0 font-weight-bold text-primary">Detail Mobil - <?php echo $dm->merk ?></h6>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<img src="<?php echo base_url().'assets/upload/'.$dm->gambar ?>" alt="" class="img-thumbnail mb-4">
							</div>
							<div class="col-md-6">
								<table class="table table-borderless">
									<tr>
                                        <td>Type Mobil</td>
                                        <td>:</td>
                                        <td><b>
                                        <?php  
                                            if ($dm->kode_type == "SDN") {
                                                echo "Sedan";
                                            }elseif($dm->kode_type == "SUV") {
                                                echo "Sport Utility Vehicle";
                                            }elseif($dm->kode_type == "MPV") {
                                                echo "Multi Purpose Vehicle";
                                            }elseif($dm->kode_type == "SPT") {
                                                echo "Sport";
                                            }else{
                                                echo "<span class='text-danger'>Type mobil belum terdaftar</span>";
                                            }
                                        ?>
                                        </b></td>
									</tr>
									<tr>
									    <td>Merk</td>
										<td>:</td>
										<td><b><?php echo $dm->merk ?></b></td>
									</tr>
									<tr>
										<td>No. Plat</td>
										<td>:</td>
										<td><b><?php echo $dm->no_plat ?></b></td>
									</tr>
									<tr>
										<td>Warna</td>
										<td>:</td>
										<td><b><?php echo $dm->warna ?></b></td>
									</tr>
									<tr>
										<td>Tahun Beli</td>
										<td>:</td>
										<td><b>Tahun <?php echo $dm->tahun ?></b></td>
									</tr>
									<tr>
										<td>Status</td>
										<td>:</td>
										<td><b>
                                        <?php
                                            if ($dm->status == "0") {
                                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                            }else{
                                                echo "<span class='badge badge-primary'>Tersedia</span>";
                                            }
                                        ?>
                                        </b></td>
									</tr>
								</table>	
							</div>				
						</div>
						<div class="row">
							<div class="col">
								<a href="<?php echo base_url('admin/Data_mobil/update_mobil/'.$dm->id_mobil) ?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
								<a href="<?php echo base_url('admin/Data_mobil') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    <?php endforeach; ?>
	<!-- Content Row -->

	</div>
	<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->
	

   