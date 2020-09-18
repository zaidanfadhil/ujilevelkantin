<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-10">
                <i class="fas fa-user-shield"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        

        <!-- Nav Item - Dashboard -->



        <!-- Heading -->
        


        <!-- Nav Item - User -->
        


        <!-- Divider -->
        

        <!-- Nav Item - Validasi -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('canteen/dataTampil') ?>">
                <i class="fas fa-table"></i>
                <span>Data</span></a>
        </li>




        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Logout -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('canteen') ?>">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                <span>Logout</span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">



        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                    <h1>KANTINKU</h1>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">




                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <? echo $user['name']; ?>
                            </span>
                            <img class="img-profile rounded-circle"
                                src="<?php echo base_url('assets/img/account(1).png'); ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">


                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo site_url('canteen') ?>" data-toggle="modal"
                                data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>


            </nav>


            <div class="container-fluid">
                <h1 class="h2 mb-4 text-gray-800 ">Input Data Penjualan</h1>

                <?php echo form_open_multipart('canteen/simpan_datalaporan'); ?>
                <div class="container">
                    <!-- header -->
                    <header class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <form action="">


                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Nama Makanan</span>
                                        </div>

                                        <input type="text" name="nama" class="form-control" placeholder=" makanan"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>



                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">harga</span>
                                        </div>

                                        <input type="text" name="harga" class="form-control" placeholder="harga makanan"
                                            aria-label="harga" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-4">
                                        <span class="input-group-text" id="basic-addon1">foto</span>

                                        <input type="file" name="Foto" class="form-control" placeholder=""
                                            aria-label="foto">
                                    </div>


                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">status makanan</span>
                                        </div>

                                        <input type="text" name="status" class="form-control"
                                            placeholder="status makanan" aria-label="status"
                                            aria-describedby="basic-addon1">
                                    </div>


                            </div>

                            <div class="input-group mb-4 ">
                                <button type="submit" class="btn btn-success">Kirim Data</button>

                            </div>




                        </div>
                        <?php echo form_close() ?>


                        <!-- </form> -->
                </div>



            </div>



        </div>

        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>


                <button class="close" type="button" data-dismiss="modal" aria-label="Close">





                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your
                current session.
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo site_url('canteen') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
