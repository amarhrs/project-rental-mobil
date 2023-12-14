<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Type Mobil</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-6">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Ubah Data</h6>
				</div>
                
				<div class="card-body">
                    <?php foreach ($type as $tp) : ?>
					<form method="POST" action="<?php echo base_url('admin/Data_type/update_type_aksi') ?>">
						<div class="form-group">
							<label for="kode_type">Kode Type</label>
                            <input type="hidden" name="id_type" value="<?php echo $tp->id_type ?>">
                            <input type="text" name="kode_type" class="form-control" value="<?php echo $tp->kode_type ?>">
                            <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
						</div>
								              
                        <div class="form-group">
							<label for="nama_type">Nama Type</label>
                            <input type="text" value="<?php echo $tp->nama_type ?>" name="nama_type" id="nama_type" placeholder="ketik" autocomplete="off" class="form-control">
                            <?php echo form_error('nama_type','<div class="text-small text-danger">','</div>') ?>
						</div>

						
						<div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success" name="ubah"><i class="fa fa-pen"></i> Ubah</button>
                            <a href="<?php echo base_url('admin/Data_type') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
						</div>
					</form>
                    <?php endforeach; ?>
				</div>
			</div>
		</div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->