<div class="container ">
    <div class="card col-6 mx-auto" style="margin-top: 200px">
        <div class="card-header">
            Form Rental Mobil
        </div>

        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
                <form action="<?php echo base_url('customer/Rental/tambah_rental_aksi') ?>" method="POST">
                    <div class="form-group mb-3">
                        <label for="harga">Harga Sewa/Hari</label>
                        <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                        <input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label for="denda">Denda/Hari</label>
                        <input type="text" name="denda" class="form-control" value="<?php echo $dt->denda ?>" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label for="tanggal_rental">Tanggal Rental</label>
                        <input type="date" name="tanggal_rental" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-warning">Rental</button>


                </form>
            <?php endforeach; ?>
        </div>
    </div>

</div>