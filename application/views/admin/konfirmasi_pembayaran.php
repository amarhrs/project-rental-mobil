<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Konfirmasi Pembayaran</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Konfirmasi Pembayaran</h6>
                </div>

                <div class="card-body justify-content-center">
                    <?php foreach ($pembayaran as $pmb) : ?>
                        <form method="POST" action="<?php echo base_url('admin/Data_transaksi/cek_pembayaran') ?>">
                            <div class="row">
                                <div class="form-group col-6">
                                    <a class="btn btn-sm btn-success text-center" href="<?php echo base_url('admin/Data_transaksi/download_pembayaran/' . $pmb->id_rental) ?>"><i class="fas fa-download"></i>Download Bukti Pembayaran</a>

                                </div>
                                <div class="form-group col-6">
                                    <div class="custom-control custom-switch">
                                        <input type="hidden" class="custom-control-input" value="<?php echo $pmb->id_rental ?>" name="id_rental">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
                                        <label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>



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