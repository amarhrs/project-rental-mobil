<div class="container">
    <div class="card mx-auto" style="margin-top: 180px; width: 80%">
        <div class="card-header">
            Data Transaksi Anda
        </div>
        <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan'); ?></span>
        <div class="card-body">
            <table class="table table-borderedk table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Merk Mobil</th>
                    <th>No Plat</th>
                    <th>Harga Sewa</th>
                    <th>Action</th>
                    <th>Batal</th>
                </tr>

                <?php $no = 1;
                foreach ($transaksi as $tr) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tr->nama ?></td>
                        <td><?php echo $tr->merk ?></td>
                        <td><?php echo $tr->no_plat ?></td>
                        <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.')  ?></td>
                        <td>
                            <?php if ($tr->status_rental == "Selesai") { ?>
                                <button class="btn btn-sm btn-danger">Rental Selesai</button>
                            <?php } else { ?>
                                <a href="<?php echo base_url('customer/Transaksi/pembayaran/' . $tr->id_rental) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                            <?php } ?>

                        </td>

                        <td>
                            <?php
                            if ($tr->status_rental == 'Belum Selesai') { ?>
                                <a onclick="return confirm('Yakin Batal?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/Transaksi/batal_transaksi/' . $tr->id_rental) ?>">Batal</a>
                            <?php } else { ?>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Batal
                                </button>
                            <?php } ?>

                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


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