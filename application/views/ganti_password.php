<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Ganti Password Page</h1>
                                        <span class="mx-2"><?php echo $this->session->flashdata('pesan') ?></span>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo base_url('Auth/ganti_password_aksi') ?>">
                                        <div class="form-group">
                                            <input type="password" id="pass_baru" name="pass_baru" class="form-control form-control-user" placeholder="Password Baru">
                                            <?php echo form_error('pass_baru', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="ulang_pass" name="ulang_pass" class="form-control form-control-user" placeholder="Ulangi Password">
                                            <?php echo form_error('ulang_pass', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>

                                        <div class="from-group">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Ganti Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/assets_sbadmin') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/assets_sbadmin') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/assets_sbadmin') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url('assets/assets_sbadmin') ?>/js/sb-admin-2.min.js"></script>

</body>