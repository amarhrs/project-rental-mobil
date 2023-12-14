<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Type Mobil</h1>
	</div>

	<!-- Content Row -->
	<div class="row">
		<div class="col-sm-4">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
				</div>

				<div class="card-body">
					<form  method="POST" action="<?php echo base_url('admin/Data_type/tambah_type') ?>">
						<div class="row">
							<div class="form-group col-4">
								<label for="kode_type">Kode Type</label>
								<input type="text" name="kode_type" id="kode_type" placeholder="ketik" autocomplete="off" class="form-control">
								<?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group col-8">
								<label for="nama_type">Nama Type</label>
								<input type="text" name="nama_type" id="nama_type" placeholder="ketik" autocomplete="off" class="form-control">
								<?php echo form_error('nama_type','<div class="text-small text-danger">','</div>') ?>
							</div>
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
					<h6 class="m-0 font-weight-bold text-primary">Daftar Type</h6>
				</div>

				<div class="card-body">
					<?php echo $this->session->flashdata('pesan') ?>
					<table class="table table-bordered" id="dataTable" cellspacing="0">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Type</th>
								<th>Nama Type</th>
								<th>Aksi</th>
							</tr>
						</thead>

						<tbody>
							<?php 
								$no=1;
								foreach($type as $tp) : ?>
									<tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $tp->kode_type ?></td>
                                        <td><?php echo $tp->nama_type ?></td>
										<td>
											<a href="<?php echo base_url('admin/Data_type/update_type/').$tp->id_type ?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
											<a href="<?php echo base_url('admin/Data_type/delete_type/').$tp->id_type ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
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
	