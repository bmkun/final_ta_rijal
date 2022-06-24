<div class="main-panel">
    <div class="content-wrapper">



        <div class="page-header">

            <!-- menu kelas -->
            <!-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Kelas Diniah
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Sugro</a>
                    <a class="dropdown-item" href="#">Wusto A</a>
                    <a class="dropdown-item" href="#">Wusto B</a>
                    <a class="dropdown-item" href="#">Kubro</a>
                </div>
            </div> -->
            <!-- menu kelas -->

            <!-- pilih kelas -->
            <!-- <div class="btn-group">

                <?php
                if ($tittle == "Data Santri Kelas Diniah") { ?>
                    <a href="<?= site_url("administrators/kelas_santri_baru") ?>" class="btn btn-success">Santri Baru</a>
                    <a href="<?= site_url("administrators/kelas_diniah/1") ?>" class="btn btn-success active">Kelas Diniah</a>
                    <a href="<?= site_url("administrators/kelas_ummi") ?>" class="btn btn-success">Kelas Ummi</a>
                <?php } elseif ($tittle == "Data Santri Kelas Ummi") { ?>
                    <a href="<?= site_url("administrators/kelas_santri_baru") ?>" class="btn btn-success">Santri Baru</a>
                    <a href="<?= site_url("administrators/kelas_diniah/1") ?>" class="btn btn-success">Kelas Diniah</a>
                    <a href="<?= site_url("administrators/kelas_ummi") ?>" class="btn btn-success active">Kelas Ummi</a>
                <?php } else { ?>
                    <a href="<?= site_url("administrators/kelas_santri_baru") ?>" class="btn btn-success active">Santri Baru</a>
                    <a href="<?= site_url("administrators/kelas_diniah/1") ?>" class="btn btn-success">Kelas Diniah</a>
                    <a href="<?= site_url("administrators/kelas_ummi") ?>" class="btn btn-success">Kelas Ummi</a>
                <?php } ?>
            </div> -->
            <!-- pilih kelas -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Santri Baru</li>
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
                                <th class="text-left"> Kelas Ummi </th>
                                <th class="text-left"> Kelas Dinniyah </th>
                                <th class="text-center"> Aksi </th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($list_guru as $guru) { ?>
                                <tr>
                                    <td class="text-left"><?= $guru['Nama'] ?> </td>
                                    <td class="text-left"><?= $guru['kls_ummi'] ?> </td>
                                    <td class="text-left"><?= $guru['kls_diniah'] ?> </td>

                                    <td class="text-center">
                                        <!-- <a href="<?= $guru['Nama'] ?>" class="btn btn-success">Pilih kelas</a> -->
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#update<?= $guru['id_guru'] ?>">
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


    <!-- modal pilih kelas -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <?php foreach ($list_guru as $guru) { ?>
        <div class="modal fade" id="update<?= $guru['id_guru'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Atur Kelas Santri Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= site_url("administrators/action_kelas_guru") ?>">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kelas Diniyah</label>
                                <!-- <input type="text" class="form-control" id="recipient-name"> -->
                                <input type="hidden" value="<?= $guru['id_guru'] ?>" name="id_guru">
                                <input type="text" class="form-control" id="recipient-name" name="Nama_guru" value="<?= $guru['Nama'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kelas Diniyah</label>
                                <!-- <input type="text" class="form-control" id="recipient-name"> -->

                                <select class="form-control" id="recipient-name" name="Kelas_diniah">
                                    <?php foreach ($list_kelas_diniyah as $kelas) { ?>
                                        <option value="<?= $kelas['id_kelas_dinniyah'] ?>"><?= $kelas['Kelas'] ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kelas Ummi</label>
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