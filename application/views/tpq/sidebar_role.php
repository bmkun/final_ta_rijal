 <?php
    if ($sidebar_role == "administrator") {
    ?>

     <!-- administrator sidebar -->
     <div class="container-fluid page-body-wrapper">
         <!-- partial:partials/_sidebar.html -->
         <nav class="sidebar sidebar-offcanvas" id="sidebar">
             <ul class="nav">
                 <li class="nav-item nav-category">Administrator</li>
                 <!-- <li class="nav-item">
                     <a class="nav-link" href="<?= site_url("administrators/data_santri") ?>">
                         <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
                         <span class="menu-title">Santri</span>
                     </a>
                 </li>
                 <li class="nav-item">

                     <a class="nav-link" href="<?= site_url("administrators/data_guru") ?>">
                         <span class="icon-bg"><i class="mdi mdi-account-card-details menu-icon"></i></span>
                         <span class="menu-title">Guru</span>
                     </a>
                 </li> -->

                 <li class="nav-item">
                     <a class="nav-link" data-toggle="collapse" href="#ui-ver1" aria-expanded="false" aria-controls="ui-basic">
                         <span class="icon-bg"><i class="mdi mdi-account-box menu-icon"></i></span>
                         <span class="menu-title">Data</span>
                         <i class="menu-arrow"></i>
                     </a>
                     <div class="collapse" id="ui-ver1">
                         <ul class="nav flex-column sub-menu">
                             <li class="nav-item"> <a class="nav-link" href="<?= site_url("administrators/data_santri") ?>">Santri</a></li>
                             <li class="nav-item"> <a class="nav-link" href="<?= site_url("administrators/data_guru") ?>">Guru</a></li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-toggle="collapse" href="#ui-ver2" aria-expanded="false" aria-controls="ui-basic">
                         <span class="icon-bg"><i class="mdi mdi-account-check menu-icon"></i></span>
                         <span class="menu-title">Verifikasi Biodata</span>
                         <i class="menu-arrow"></i>
                     </a>
                     <div class="collapse" id="ui-ver2">
                         <ul class="nav flex-column sub-menu">
                             <li class="nav-item"> <a class="nav-link" href="<?= site_url("administrators/verifikasi_santri") ?>">Santri</a></li>
                             <li class="nav-item"> <a class="nav-link" href="<?= site_url("administrators/verifikasi_guru") ?>">Guru</a></li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                         <span class="icon-bg"><i class="mdi mdi-printer menu-icon"></i></span>
                         <span class="menu-title">Cetak Raport</span>
                         <i class="menu-arrow"></i>
                     </a>
                     <div class="collapse" id="ui-basic">
                         <ul class="nav flex-column sub-menu">
                             <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Raport ummi</a></li>
                             <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Raport diniah</a></li>

                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-toggle="collapse" href="#ui-basic12" aria-expanded="false" aria-controls="ui-basic">
                         <span class="icon-bg"><i class="mdi mdi-home menu-icon"></i></span>
                         <span class="menu-title">Atur Kelas</span>
                         <i class="menu-arrow"></i>
                     </a>
                     <div class="collapse" id="ui-basic12">
                         <ul class="nav flex-column sub-menu">
                             <li class="nav-item"> <a class="nav-link" href="<?= site_url("administrators/kelas_guru_diniah") ?>">Kelas Guru</a></li>
                             <li class="nav-item"> <a class="nav-link" href="<?= site_url("administrators/kelas_santri_baru") ?>">Kelas Santri</a></li>

                         </ul>
                     </div>
                 </li>


                 <!-- <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic_elements.html">
                        <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                        <span class="menu-title">Forms</span>
                    </a>
                </li> -->

             </ul>
         </nav>
         <!-- administrator sidebar -->
     <?php } elseif ($sidebar_role == "guru") { ?>
         <!-- partial -->
         <div class="container-fluid page-body-wrapper">
             <!-- partial:partials/_sidebar.html -->
             <nav class="sidebar sidebar-offcanvas" id="sidebar">
                 <ul class="nav">
                     <li class="nav-item nav-category">Administrator</li>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= site_url("guru_access/biodata_guru") ?>">
                             <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                             <span class="menu-title">Biodata Guru</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
                             <span class="icon-bg"><i class="mdi mdi-printer menu-icon"></i></span>
                             <span class="menu-title">Input Nilai</span>
                             <i class="menu-arrow"></i>
                         </a>
                         <div class="collapse" id="ui-basic1">
                             <ul class="nav flex-column sub-menu">
                                 <li class="nav-item"> <a class="nav-link" href="<?= site_url("guru_access/nilai_ummi") ?>">Nilai Ummi</a></li>
                                 <li class="nav-item"> <a class="nav-link" href="<?= site_url("guru_access/nilai_diniah") ?>">Nilai Diniah</a></li>

                             </ul>
                         </div>
                     </li>

                 </ul>
             </nav>
         <?php } elseif ($sidebar_role == "wali") { ?>
             <!-- partial -->
             <div class="container-fluid page-body-wrapper">
                 <!-- partial:partials/_sidebar.html -->
                 <nav class="sidebar sidebar-offcanvas" id="sidebar">
                     <ul class="nav">
                         <li class="nav-item nav-category">Wali Santri</li>
                         <li class="nav-item">
                             <a class="nav-link" href="<?= site_url("walimurid_access/biodata_santri") ?>">
                                 <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                                 <span class="menu-title">Biodata Santri</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="index.html">
                                 <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                                 <span class="menu-title">Nilai Santri</span>
                             </a>
                         </li>

                     </ul>
                 </nav>
             <?php } ?>