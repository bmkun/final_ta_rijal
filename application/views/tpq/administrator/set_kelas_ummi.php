<div class="main-panel">
    <div class="content-wrapper">



        <div class="page-header">

            <!-- menu kelas -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Kelas Ummi
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Pra Ummi</a>
                    <a class="dropdown-item" href="#">Ummi 1</a>
                    <a class="dropdown-item" href="#">Ummi 2</a>
                    <a class="dropdown-item" href="#">Ummi 3</a>
                    <a class="dropdown-item" href="#">Ummi 4</a>
                    <a class="dropdown-item" href="#">Ummi 5</a>
                    <a class="dropdown-item" href="#">Ummi 6</a>
                    <a class="dropdown-item" href="#">Qur'an</a>
                </div>
            </div>
            <!-- menu kelas -->

            <!-- pilih kelas -->
            <div class="btn-group">

                <?php
                if ($tittle == "Data Santri Kelas Diniah") { ?>
                    <a href="<?= site_url("administrators/kelas_santri_baru") ?>" class="btn btn-success">Santri Baru</a>
                    <a href="<?= site_url("administrators/kelas_diniah") ?>" class="btn btn-success active">Kelas Diniah</a>
                    <a href="<?= site_url("administrators/kelas_ummi") ?>" class="btn btn-success">Kelas Ummi</a>
                <?php } elseif ($tittle == "Data Santri Kelas Ummi") { ?>
                    <a href="<?= site_url("administrators/kelas_santri_baru") ?>" class="btn btn-success">Santri Baru</a>
                    <a href="<?= site_url("administrators/kelas_diniah") ?>" class="btn btn-success">Kelas Diniah</a>
                    <a href="<?= site_url("administrators/kelas_ummi") ?>" class="btn btn-success active">Kelas Ummi</a>
                <?php } else { ?>
                    <a href="<?= site_url("administrators/kelas_santri_baru") ?>" class="btn btn-success active">Santri Baru</a>
                    <a href="<?= site_url("administrators/kelas_diniah") ?>" class="btn btn-success">Kelas Diniah</a>
                    <a href="<?= site_url("administrators/kelas_ummi") ?>" class="btn btn-success">Kelas Ummi</a>
                <?php } ?>
            </div>
            <!-- pilih kelas -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kelas Diniah</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">



                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Nama</th>
                                <th> Kelas </th>
                                <th class="text-center"> Aksi </th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>gopar </td>
                                <td>Wusto a </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-success">Pilih kelas</a>
                                </td>
                            </tr>
                            <tr>
                                <td>gopar </td>
                                <td>Wusto a </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-success">Pilih kelas</a>
                                </td>
                            </tr>
                            <tr>
                                <td>gopar </td>
                                <td>Wusto a </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-success">Pilih kelas</a>
                                </td>
                            </tr>
                            <tr>
                                <td>gopar </td>
                                <td>Wusto a </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-success">Pilih kelas</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->