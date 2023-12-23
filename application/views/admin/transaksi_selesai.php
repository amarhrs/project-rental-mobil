<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi Selesai</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-4">
            <div class="card shadow">

                <div class="card-body">
                    <?php foreach ($transaksi as  $tr) : ?>
                        <form method="POST" action="<?php echo base_url('admin/Data_transaksi/transaksi_selesai_aksi') ?>">
                            <input type="hidden" name="id_rental" value="<?php echo $tr->id_rental ?>">
                            <input type="hidden" name="tanggal_kembali" value="<?php echo $tr->tanggal_kembali ?>">
                            <input type="hidden" name="denda" value="<?php echo $tr->denda ?>">

                            <div class="form-group">
                                <label>Tanggal Pengembalian</label>
                                <input type="date" name="tanggal_pengembalian" class="form-control" value="<?php echo $tr->tanggal_pengembalian ?>">
                            </div>

                            <div class="form-group">
                                <label>Status Pengembalian</label>
                                <select class="form-control" name="status_pengembalian">
                                    <option value="<?php echo $tr->status_pengembalian ?>"><?php echo $tr->status_pengembalian ?></option>
                                    <option value="Kembali">Kembali</option>
                                    <option value="Belum Kembali">Belum Kembali</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Status Rental</label>
                                <select class="form-control" name="status_rental">
                                    <option value="<?php echo $tr->status_rental ?>"><?php echo $tr->status_rental ?></option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Belum Selesai">Belum Selesai</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success">Save</button>
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