 <?php
    if ($sidebar_role == "administrator") {
    ?>

     <!-- administrator sidebar -->
     <div class="container-fluid page-body-wrapper">
         <!-- partial:partials/_sidebar.html -->
         <nav class="sidebar sidebar-offcanvas" id="sidebar">
             <ul class="nav">
                 <li class="nav-item nav-category">Administrator</li>
                 <li class="nav-item">
                     <a class="nav-link" href="<?= site_url("administrators/data_santri") ?>">
                         <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                         <span class="menu-title">Santri</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <!-- <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                         <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                         <span class="menu-title">Guru</span>
                         <i class="menu-arrow"></i>
                     </a>
                     <div class="collapse" id="ui-basic">
                         <ul class="nav flex-column sub-menu">
                             <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                             <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                             <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                         </ul>
                     </div> -->
                     <a class="nav-link" href="<?= site_url("administrators/data_guru") ?>">
                         <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                         <span class="menu-title">Guru</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                         <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
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
                     <li class="nav-item nav-category">Main</li>
                     <li class="nav-item">
                         <a class="nav-link" href="index.html">
                             <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                             <span class="menu-title">Input nilai ummi</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="index.html">
                             <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                             <span class="menu-title">Input nilai diniah</span>
                         </a>
                     </li>

                 </ul>
             </nav>
         <?php } ?>