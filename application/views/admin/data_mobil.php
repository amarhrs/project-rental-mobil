<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Mobil</h1>
	</div>

	<!-- Content Row -->
	<div class="row">
		<div class="col-sm-4">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
				</div>

				<div class="card-body">
					<form method="POST" action="<?php echo base_url('admin/Data_mobil/tambah_mobil') ?>" enctype="multipart/form-data">
						<div class="form-group">
							<label for="kode_type">Type Mobil</label>
							<select name="kode_type" class="form-control">
							<option value="">--Pilih Type Mobil--</option>
								<?php foreach($type as $tp) : ?>
								<option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type?>
								</option>
								<?php endforeach; ?>
							</select>
							<?php echo form_error('kode_type','<div class="text-small text-danger">','</div>')?>
						</div>

						<div class="form-group">
							<label for="merk">Merk</label>
							<input type="text" name="merk" placeholder="ketik" autocomplete="off" class="form-control">
							<?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
						</div>

						<div class="row">
							<div class="form-group col-6">
								<label for="no_plat">No. Plat</label>
								<input type="text" name="no_plat" id="no_plat" placeholder="ketik" autocomplete="off" class="form-control">
								<?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group col-6">
								<label for="warna">Warna</label>
								<input type="text" name="warna" id="warna" placeholder="ketik" autocomplete="off" class="form-control">
								<?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-6">
								<label for="tahun">Tahun</label>
								<input type="text" name="tahun" id="tahun" placeholder="ketik" autocomplete="off" class="form-control">
								<?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group col-6">
								<label for="status">Status</label>
								<select name="status" id="status" class="form-control">
									<option value="">--Pilih Status--</option>
									<option value="1">Tersedia</option>
									<option value="0">Tidak Tersedia</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="gambar">Gambar Mobil</label>
							<input type="file" name="gambar" id="gambar" placeholder="ketik" autocomplete="off" class="form-control-file">
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
					<h6 class="m-0 font-weight-bold text-primary">Daftar Mobil</h6>
				</div>

				<div class="card-body">
					<?php echo $this->session->flashdata('pesan') ?>
					<table class="table table-bordered" id="dataTable" cellspacing="0">
						<thead>
							<tr>
								<th>No</th>
								<th>Type</th>
								<th>Merk</th>
								<th>No. Plat</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>

						<tbody>
							<?php 
								$no=1;
								foreach($mobil as $mb) : ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $mb->kode_type ?></td>
										<td><?php echo $mb->merk ?></td>
										<td><?php echo $mb->no_plat ?></td>
										<td><?php 
										if ($mb->status == "0") {
											echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
										}else {
											echo "<span class='badge badge-primary'>Tersedia</span>";
										}
										?></td>
										<td>
											<a href="<?php echo base_url('admin/Data_mobil/update_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
											<a href="<?php echo base_url('admin/Data_mobil/detail_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i> Detail</a>
											<a href="<?php echo base_url('admin/Data_mobil/delete_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
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
	