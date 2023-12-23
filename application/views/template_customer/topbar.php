    <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Rental<b>Ly</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('customer/Dashboard') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#cars">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('customer/transaksi') ?>">Transaksi</a>
                    </li>
                </ul>

                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <?php if ($this->session->userdata('nama')) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">Welcome <?php echo $this->session->userdata('nama') ?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('Auth/ganti_password') ?>">Ganti Password</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('Auth/logout') ?>">Logout</a></li>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('Auth/login') ?>">Login</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('Register') ?>">Register</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                    <ul>
            </div>
        </div>
    </nav>