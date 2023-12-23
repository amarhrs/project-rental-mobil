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
                                        <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                        <span class="mx-2"><?php echo $this->session->flashdata('pesan') ?></span>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo base_url('Auth/login') ?>">
                                        <div class="form-group">
                                            <input type="text" id="username" name="username" class="form-control form-control-user" placeholder="Username">
                                            <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" class="form-control form-control-user" placeholder="Password">
                                            <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>

                                        <div class="from-group">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('Register') ?>">Create an Account!</a>
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