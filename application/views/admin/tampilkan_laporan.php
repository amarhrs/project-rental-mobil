<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Transaksi</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Filter Laporan Transaksi</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
                        <div class="form-group">
                            <label>Dari Tanggal</label>
                            <input type="date" name="dari" class="form-control">
                            <?php echo form_error('dari', '<span class="text-small text-danger">', '</span>') ?>
                        </div>

                        <div class="form-group">
                            <label>Sampai Tanggal</label>
                            <input type="date" name="sampai" class="form-control">
                            <?php echo form_error('sampai', '<span class="text-small text-danger">', '</span>') ?>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan Data</button>
                    </form>
                    <hr>

                    <div class="btn-group">
                        <a href="<?php echo base_url() . 'admin/laporan/print_laporan/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>" class="btn btn-sm btn-success" target="_blank"><i class="fas fa-print"></i>Print</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->

    <div class="row mt-5">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Laporan Transaksi</h6>
                </div>

                <div class="card-body">

                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Customer</th>
                                    <th>Mobil</th>
                                    <th>Tgl. Rental</th>
                                    <th>Tgl. Kembali</th>
                                    <th>Harga/Hari</th>
                                    <th>Denda/Hari</th>
                                    <th>Total Denda</th>
                                    <th>Tgl. Dikembalikan</th>
                                    <th>Status Pegembalian</th>
                                    <th>Status Rental</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($laporan as $tr) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $tr->nama ?></td>
                                        <td><?php echo $tr->merk ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental))  ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali))  ?></td>
                                        <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
                                        <td>Rp. <?php echo number_format($tr->denda, 0, ',', '.') ?></td>
                                        <td>Rp. <?php echo number_format($tr->total_denda, 0, ',', '.') ?></td>
                                        <td>
                                            <?php
                                            if ($tr->tanggal_pengembalian == "0000-00-00") {
                                                echo "-";
                                            } else {
                                                echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                                            }
                                            ?>
                                        </td>

                                        <td><?php echo $tr->status_pengembalian ?></td>
                                        <td><?php echo $tr->status_rental ?></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->