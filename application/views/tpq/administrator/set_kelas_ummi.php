<div class="main-panel">
    <div class="content-wrapper">



        <div class="page-header">

            <!-- menu kelas -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Kelas Ummi
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                    <?php foreach ($list_kelas_ummi as $kelas_ummi) { ?>
                        <a class="dropdown-item" href="<?= site_url("administrators/kelas_ummi/") ?><?= $kelas_ummi['id_kelas_ummi'] ?>"><?= $kelas_ummi['Kelas'] ?></a>
                        <!-- <a class="dropdown-item" href="#">Ummi 1</a>
                    <a class="dropdown-item" href="#">Ummi 2</a>
                    <a class="dropdown-item" href="#">Ummi 3</a>
                    <a class="dropdown-item" href="#">Ummi 4</a>
                    <a class="dropdown-item" href="#">Ummi 5</a>
                    <a class="dropdown-item" href="#">Ummi 6</a>
                    <a class="dropdown-item" href="#">Qur'an</a> -->
                    <?php } ?>
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
                    <li class="breadcrumb-item active" aria-current="page">Kelas Ummi</li>
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
                            <?php foreach ($data_santri as $santri_ummi) { ?>

                                <tr>
                                    <td><?= $santri_ummi['Nama'] ?></td>
                                    <td><?= $santri_ummi['Kelas'] ?></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit<?= $santri_ummi['id_santri'] ?>">
                                            Pilih Kelas
                                        </button>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->


    <!-- Modal ubah kelas diniah-->
    <?php foreach ($data_santri as $santri) { ?>
        <div class="modal fade" id="edit<?= $santri['id_santri'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Atur Kelas Santri Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form method="POST" action="<?= site_url("administrators/action_kelas_santri_ummi/") ?>">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kelas Diniyah</label>
                                <!-- <input type="text" class="form-control" id="recipient-name"> -->
                                <input type="hidden" name="url-param" value="1">
                                <input type="hidden" value="<?= $santri['id_santri'] ?>" name="id_santri">
                                <input type="text" class="form-control" id="recipient-name" name="Nama_santri" value="<?= $santri['Nama'] ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kelas Diniah</label>
                                <select class="form-control" id="recipient-name" name="Kelas_ummi">
                                    <?php foreach ($list_kelas_ummi as $kelas2) { ?>
                                        <option value="<?= $kelas2['id_kelas_ummi'] ?>"><?= $kelas2['Kelas'] ?></option>

                                    <?php } ?>
                                </select>
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>