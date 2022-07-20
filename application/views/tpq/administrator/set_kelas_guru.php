<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <button title="tambah kelas guru" class="btn btn-success" data-toggle="modal" data-target="#set_kelas_guru"><i class="mdi mdi-24px mdi-account-multiple-plus"> </i></button>

            <!-- pilih kelas -->
            <div class="btn-group">

                <?php
                if ($tittle == "Data Kelas Guru Diniah") { ?>
                    <a href="<?= site_url("administrators/kelas_guru_diniah") ?>" class="btn btn-success active">Kelas Diniah</a>
                    <a href="<?= site_url("administrators/kelas_guru_ummi") ?>" class="btn btn-success">Kelas Ummi</a>

                <?php } elseif ($tittle == "Data Kelas Guru Ummi") { ?>
                    <a href="<?= site_url("administrators/kelas_guru_diniah") ?>" class="btn btn-success">Kelas Diniah</a>
                    <a href="<?= site_url("administrators/kelas_guru_ummi") ?>" class="btn btn-success active">Kelas Ummi</a>

                <?php }  ?>
            </div>
            <!-- pilih kelas -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $tittle ?></li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">



                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID Guru</th>
                                <th> Nama</th>
                                <th> Kelas </th>
                                <th> Pelajaran </th>
                                <th> Walikelas </th>
                                <th class="text-center"> Aksi </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_guru as $guru) { ?>

                                <tr>
                                    <td><?= $guru['id_guru'] ?></td>
                                    <td><?= $guru['Nama'] ?></td>
                                    <td><?= $guru['Kelas'] ?></td>
                                    <td><?= $guru['nama_mapel'] ?></td>
                                    <td><?= $guru['walikelas'] ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#edit<?= $guru['id_kelas_guru'] ?>">Edit</button>
                                        <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit<?= $guru['id_kelas_guru'] ?>">
                                            Delete
                                        </button> -->
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


    <!-- Modal1 tambah kelas guru-->
    <div class="modal fade" id="set_kelas_guru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="<?= site_url("administrators/action_kelas_guru/") . $kd_direct ?>">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama Guru</label>
                            <!-- <input type="text" class="form-control" id="recipient-name"> -->
                            <input type="hidden" name="url-param" value="1">
                            <select class="form-control" id="recipient-name" name="id_guru">

                                <?php foreach ($data_guru as $list_guru) { ?>
                                    <option value="<?= $list_guru['id_guru'] ?>"><?= $list_guru['Nama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Matapelajaran</label>
                            <select class="form-control" id="recipient-name" name="mapel">

                                <?php foreach ($mapel as $mata_pelajaran) { ?>
                                    <option value="<?= $mata_pelajaran['id_mapel'] ?>"><?= $mata_pelajaran['nama_mapel'] . '->' . $mata_pelajaran['mapel_kelas'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Kelas</label>
                            <select class="form-control" id="recipient-name" name="id_kelas">
                                <?php foreach ($all_kelas as $kelas) { ?>
                                    <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['Kelas'] . '->' . $kelas['kd_kelas'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Status</label>
                            <select class="form-control" id="recipient-name" name="status">

                                <option value="Walikelas">Walikelas</option>
                                <option value="-">Guru pengajar</option>

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


    <!-- modal2 edit kelas guru  -->

    <?php foreach ($list_kelas_guru as $guru) { ?>
        <div class="modal fade" id="edit<?= $guru['id_kelas_guru'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas Guru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form method="POST" action="<?= site_url("administrators/update_kelas_guru/") . $guru['kd_kelas'] ?>">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Guru</label>
                                <!-- <input type="text" class="form-control" id="recipient-name"> -->
                                <input type="hidden" name="id_kelas_guru" value="<?= $guru['id_kelas_guru'] ?>">


                                <input class="form-control" type="text" value="<?= $guru['Nama'] ?>" disabled>

                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Matapelajaran</label>
                                <select class="form-control" id="recipient-name" name="mapel">

                                    <?php foreach ($mapel as $mata_pelajaran) { ?>
                                        <option value="<?= $mata_pelajaran['id_mapel'] ?>"><?= $mata_pelajaran['nama_mapel'] . '->' . $mata_pelajaran['mapel_kelas'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kelas</label>
                                <select class="form-control" id="recipient-name" name="id_kelas">
                                    <?php foreach ($all_kelas as $kelas) { ?>
                                        <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['Kelas'] . '->' . $kelas['kd_kelas'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Status</label>
                                <select class="form-control" id="recipient-name" name="walikelas">

                                    <option value="Walikelas">Walikelas</option>
                                    <option value="-">Guru pengajar</option>

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
    <?php  } ?>