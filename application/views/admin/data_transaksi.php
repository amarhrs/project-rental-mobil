<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Customer</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                </div>

                <div class="card-body">
                    <?php echo $this->session->flashdata('pesan') ?>

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
                                    <th>Cek Pembayaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($transaksi as $tr) : ?>
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

                                        <td>
                                            <center>
                                                <?php
                                                if (empty($tr->bukti_pembayaran)) { ?>
                                                    <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                                                <?php } else { ?>
                                                    <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/Data_transaksi/pembayaran/' . $tr->id_rental) ?>"><i class="fas fa-check-circle"></i></a>
                                                <?php } ?>
                                            </center>
                                        </td>



                                        <td>
                                            <?php
                                            if ($tr->status == "1") {
                                                echo "-";
                                            } else { ?>
                                                <div class="row justify-content-around">
                                                    <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/Data_transaksi/transaksi_selesai/' . $tr->id_rental) ?>"><i class="fas fa-check"></i></a>
                                                    <?php
                                                    if ($tr->status_rental == 'Belum Selesai') { ?>
                                                        <a onclick="return confirm('Yakin Batal?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/Data_transaksi/batal_transaksi/' . $tr->id_rental) ?>"><i class="fas fa-times"></i></a>
                                                    <?php } else { ?>
                                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-times"></i>
                                                        </button>
                                                    <?php } ?>
                                                </div>
                                            <?php } ?>

                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Batal transaksi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Maaf, Transaksi ini sudah selesai, dan tidak bisa dibatalkan!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-success" data-bs-dismiss="modal">Oke</button>

            </div>
        </div>
    </div>
</div>