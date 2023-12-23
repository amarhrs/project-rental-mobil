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
                                        <h1 class="h4 text-gray-900 mb-4">Register Page</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo base_url('Register') ?>">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                                                <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                                                <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
                                            <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <select class="form-control" name="gender">
                                                    <option value="">--Pilih Gender--</option>
                                                    <option>Laki-laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                                <?php echo form_error('gender', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="no_telepon" name="no_telepon" class="form-control" placeholder="No. Telepon">
                                                <?php echo form_error('no_telepon', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" id="no_ktp" name="no_ktp" class="form-control" placeholder="No. KTP">
                                                <?php echo form_error('no_ktp', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                                <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                        </div>
                                        <div class="from-group">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('Auth/login') ?>">Already have an account? Login!</a>
                                    </div>
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

</html>