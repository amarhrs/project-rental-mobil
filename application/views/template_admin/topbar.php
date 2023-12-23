 <div id="content-wrapper" class="d-flex flex-column">

     <div id="content">

         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

             <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                 <i class="fa fa-bars"></i>
             </button>

             <ul class="navbar-nav ml-auto">

                 <div class="topbar-divider d-none d-sm-block"></div>

                 <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome <?php echo $this->session->userdata('nama') ?></span>
                     </a>

                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                         <a class="dropdown-item" href="<?php echo base_url('Auth/ganti_password') ?>">
                             <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                             Ganti Password
                         </a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="<?php echo base_url('Auth/logout') ?>">
                             <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                             Logout
                         </a>
                         </a>
                     </div>
                 </li>
             </ul>
         </nav>