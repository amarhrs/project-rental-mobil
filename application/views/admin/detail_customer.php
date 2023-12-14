<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Detail Customer</h1>
	</div>

	<!-- Content Row -->
	<?php foreach($detail_customer as $dc) : ?>
        <div class="row">
			<div class="col-sm-8">
				<div class="card shadow">
					<div class="card-header">
						<h6 class="m-0 font-weight-bold text-primary">Detail Customer - <?php echo $dc->nama ?></h6>
					</div>
					<div class="card-body">
						<div class ="row">
							<div class="col">
								<table class="table table-borderless">
									<tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td><b><?php echo $dc->nama ?></b></td>
									</tr>
									<tr>
									    <td>Username</td>
										<td>:</td>
                                        <td><b><?php echo $dc->username ?></b></td>
										
									</tr>
									<tr>
										<td>Gender</td>
										<td>:</td>
                                        <td><b><?php echo $dc->gender ?></b></td>
										
									</tr>
									<tr>
										<td>Nomor Telepon</td>
										<td>:</td>
                                        <td><b><?php echo $dc->no_telepon ?></b></td>
										
									</tr>
									<tr>
										<td>Nomor KTP</td>
										<td>:</td>
                                        <td><b><?php echo $dc->no_ktp ?></b></td>
										
									</tr>
									<tr>
										<td>Alamat</td>
										<td>:</td>
                                        <td><b><?php echo $dc->alamat ?></b></td>
										
									</tr>
									<tr>
										<td>Password</td>
										<td>:</td>
										<td><b><?php echo $dc->password ?></b></td>
									</tr>
								</table>	
                            </div>	
						</div>
						<div class="row">
							<div class="col">
								<a href="<?php echo base_url('admin/Data_customer/update_customer/'.$dc->id_customer) ?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
								<a href="<?php echo base_url('admin/Data_customer') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
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
	

   