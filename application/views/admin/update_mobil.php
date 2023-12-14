<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Data Mobil</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-6">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Ubah Data</h6>
				</div>
                
				<div class="card-body">
                    <?php foreach ($mobil as $mb) : ?>
					<form method="POST" action="<?php echo base_url('admin/Data_mobil/update_mobil_aksi') ?>" enctype="multipart/form-data">
						<div class="form-group">
							<label for="kode_type">Type Mobil</label>
                            <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">
							<select name="kode_type"class="form-control">
                                <option value="<?php echo $mb->kode_type ?>"><?php echo $mb->kode_type ?></option>
                                <?php foreach($type as $tp) : ?>
                                    <option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
						</div>
								              
                        <div class="form-group">
							<label for="merk">Merk</label>
                            <input type="text" value="<?php echo $mb->merk ?>" name="merk" id="merk" placeholder="ketik" autocomplete="off" class="form-control">
                            <?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
						</div>

						<div class="row">
							<div class="form-group col-6">
								<label for="no_plat">No. Plat</label>
								<input type="text" value="<?php echo $mb->no_plat ?>" name="no_plat" id="no_plat" placeholder="ketik" autocomplete="off" class="form-control">
                                <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group col-6">
								<label for="warna">Warna</label>
								<input type="text" value="<?php echo $mb->warna ?>" name="warna" id="jumlah_kursi" placeholder="ketik" autocomplete="off" class="form-control">
                                <?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-6">
								<label for="tahun">Tahun Beli</label>
								<input type="text" value="<?php echo $mb->tahun ?>" name="tahun" id="tahun" placeholder="ketik" autocomplete="off" class="form-control">
                                <?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group col-6">
								<label for="status">Status</label>
                                <select name="status" class="form-control">
                                <option <?php if($mb->status == "1"){echo "selected='selected'";} echo $mb->status; ?> value="1">Tersedia</option>
                                <option <?php if($mb->status == "0"){echo "selected='selected'";} echo $mb->status; ?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="gambar">Gambar Mobil</label>
							<input type="file" name="gambar" id="gambar" placeholder="ketik" autocomplete="off" class="form-control-file">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-success" name="ubah"><i class="fa fa-pen"></i> Ubah</button>
                            <a href="<?php echo base_url('admin/Data_mobil') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
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