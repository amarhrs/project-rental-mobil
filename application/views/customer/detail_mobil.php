    <div class="container">
        <div class="card h-100">
            <?php foreach ($detail as $dt) : ?>
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo base_url('assets/upload/' . $dt->gambar) ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="table">
                                <tr>
                                    <th>Merk</th>
                                    <td><?php echo $dt->merk ?></td>
                                </tr>
                                <tr>
                                    <th>Nomor Plat</th>
                                    <td><?php echo $dt->no_plat ?></td>
                                </tr>
                                <tr>
                                    <th>Warna</th>
                                    <td><?php echo $dt->warna ?></td>
                                </tr>
                                <tr>
                                    <th>Tahun Produksi</th>
                                    <td><?php echo $dt->tahun ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <?php if ($dt->status == '1') {
                                            echo "Tersedia";
                                        } else {
                                            echo "Sedang Dirental";
                                        } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <?php
                                        if ($dt->status == "0") {
                                            echo "<span class='btn btn-danger' disable>Telah di Rental</span>";
                                        } else {
                                            echo anchor('customer/rental/tambah_rental' . $dt->id_mobil, '<button class="btn btn-success">Rental</button>');
                                        }
                                        ?>
                                    </td>
                                </tr>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
        </div>