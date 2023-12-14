<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Data Customer</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-6">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Ubah Data</h6>
				</div>
                
				<div class="card-body">
                    <?php foreach ($customer as $cs) : ?>
					<form method="POST" action="<?php echo base_url('admin/Data_customer/update_customer_aksi') ?>">

                        <div class="row">
							<div class="form-group col-6">
								<label for="nama">Nama</label>
                                <input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
								<input type="text" value="<?php echo $cs->nama ?>" name="nama" id="nama" placeholder="ketik" autocomplete="off" class="form-control">
                                <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group col-6">
								<label for="username">Username</label>
								<input type="text" value="<?php echo $cs->username ?>" name="username" id="username" placeholder="ketik" autocomplete="off" class="form-control">
                                <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
							</div>
						</div>

                        
                        <div class="row">
							<div class="form-group col-6">
								<label for="gender">Gender</label>
								<select class="form-control" name="gender">
                                    <option value="<?php echo $cs->gender ?>"><?php echo $cs->gender ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?php echo form_error('gender','<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group col-6">
								<label for="no_telepon">No. Telepon</label>
								<input type="text" value="<?php echo $cs->no_telepon ?>" name="no_telepon" id="no_telepon" placeholder="ketik" autocomplete="off" class="form-control">
                                <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>
							</div>
						</div>

                        <div class="row">
							<div class="form-group col-6">
								<label for="no_ktp">No. KTP</label>
								<input type="text" value="<?php echo $cs->no_ktp ?>" name="no_ktp" id="no_ktp" placeholder="ketik" autocomplete="off" class="form-control">
                                <?php echo form_error('no_ktp','<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group col-6">
								<label for="password">Password</label>
								<input type="password" value="<?php echo $cs->password ?>" name="password" id="password" placeholder="ketik" autocomplete="off" class="form-control">
                                <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
							</div>
						</div>

                        <div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="text" value="<?php echo $cs->alamat ?>" name="alamat" id="password" placeholder="ketik" autocomplete="off" class="form-control">
							<?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-success" name="ubah"><i class="fa fa-pen"></i> Ubah</button>
                            <a href="<?php echo base_url('admin/Data_customer') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
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