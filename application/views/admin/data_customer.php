<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Customer</h1>
	</div>

	<!-- Content Row -->
	<div class="row">
        <div class="col-sm-4">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
				</div>

				<div class="card-body">
					<form method="POST" action="<?php echo base_url('admin/Data_customer/tambah_customer') ?>" enctype="multipart/form-data">

						<div class="row">
								<div class="form-group col-6">
									<label for="nama">Nama</label>
									<input type="text" name="nama" id="nama" placeholder="ketik" autocomplete="off" class="form-control">
									<?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
								</div>

								<div class="form-group col-6">
								<label for="username">Username</label>
									<input type="text" name="username" id="username" placeholder="ketik" autocomplete="off" class="form-control">
									<?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
								</div>
						</div>

						<div class="row">
                            <div class="form-group col-6">
								<label for="gender">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="">--Pilih Gender--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?php echo form_error('nama','<span class="text-sm text-danger">','</span>') ?>
							</div>

							<div class="form-group col-6">
								<label for="no_telepon">No. Telepon</label>
								<input type="text" name="no_telepon" id="no_telepon" placeholder="ketik" autocomplete="off" class="form-control">
								<?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-6">
								<label for="no_ktp">No. KTP</label>
								<input type="text" name="no_ktp" id="no_ktp" placeholder="ketik" autocomplete="off" class="form-control">
								<?php echo form_error('no_ktp','<div class="text-small text-danger">','</div>') ?>
							</div>

                            <div class="form-group col-6">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" placeholder="ketik" autocomplete="off" class="form-control">
								<?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
							</div>
						</div>

                        <div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="text" name="alamat" placeholder="ketik" autocomplete="off" class="form-control">
							<?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-success" name="tambah"><i class="fa fa-plus"></i> Tambah</button>
							<button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
						</div>
					</form>
				</div>
			</div>
		</div>

        <div class="col-sm-8">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Daftar Customer</h6>
				</div>

				<div class="card-body">
					<?php echo $this->session->flashdata('pesan') ?>
					<table class="table table-bordered overflow-scroll" id="dataTable" cellspacing="0">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Jenis Kelamin</th>
								<th>Aksi</th>
							</tr>
						</thead>

						<tbody>
							<?php 
								$no=1;
								foreach($customer as $cs) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $cs->nama ?></td>
										<td><?php echo $cs->username ?></td>
										<td><?php echo $cs->gender ?></td>
										<td>
											<a href="<?php echo base_url('admin/Data_customer/update_customer/').$cs->id_customer?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
											<a href="<?php echo base_url('admin/Data_customer/detail_customer/').$cs->id_customer?>" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i> Detail</a>
											<a href="<?php echo base_url('admin/Data_customer/delete_customer/').$cs->id_customer?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
										</td>
									</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- Content Row -->

	</div>
	<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->
	