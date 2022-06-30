<div class="main-panel">
    <div class="content-wrapper">



        <div class="page-header">

            <!-- menu kelas -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Kelas Diniyah
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                    <?php foreach ($list_kelas_diniyah as $diniah) { ?>
                        <a class="dropdown-item" href="<?= site_url("administrators/kelas_diniah/") ?><?= $diniah['id_kelas'] ?>"><?= $diniah['Kelas'] ?></a>
                        <!-- <a class="dropdown-item" href="<?= site_url("administrators/kelas_diniah/2") ?>">WustHo A</a>
                        <a class="dropdown-item" href="<?= site_url("administrators/kelas_diniah/3") ?>">Wustho B</a>
                        <a class="dropdown-item" href="<?= site_url("administrators/kelas_diniah/4") ?>">Kubro</a> -->
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
                    <a href="<?= site_url("administrators/kelas_ummi/6") ?>" class="btn btn-success">Kelas Ummi</a>
                <?php } elseif ($tittle == "Data Santri Kelas Ummi") { ?>
                    <a href="<?= site_url("administrators/kelas_santri_baru") ?>" class="btn btn-success">Santri Baru</a>
                    <a href="<?= site_url("administrators/kelas_diniah") ?>" class="btn btn-success">Kelas Diniah</a>
                    <a href="<?= site_url("administrators/kelas_ummi/6") ?>" class="btn btn-success active">Kelas Ummi</a>
                <?php } else { ?>
                    <a href="<?= site_url("administrators/kelas_santri_baru") ?>" class="btn btn-success active">Santri Baru</a>
                    <a href="<?= site_url("administrators/kelas_diniah") ?>" class="btn btn-success">Kelas Diniah</a>
                    <a href="<?= site_url("administrators/kelas_ummi/6") ?>" class="btn btn-success">Kelas Ummi</a>
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

                            <?php foreach ($data_santri as $santri) { ?>
                                <tr>
                                    <td><?= $santri['Nama'] ?> </td>
                                    <td><?= $santri['Kelas'] ?> </td>
                                    <td class="text-center">
                                        <!-- <a href="" class="btn btn-success">Pilih kelas</a> -->
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit<?= $santri['id_santri'] ?>">
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

    <!-- modal bootstrap tambah kelas -->



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
                        <form method="POST" action="<?= site_url("administrators/action_kelas_santri_diniah/") ?>">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kelas Diniyah</label>
                                <!-- <input type="text" class="form-control" id="recipient-name"> -->
                                <input type="hidden" name="url-param" value="1">
                                <input type="hidden" value="<?= $santri['id_santri'] ?>" name="id_santri">
                                <input type="text" class="form-control" id="recipient-name" name="Nama_santri" value="<?= $santri['Nama'] ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kelas Diniah</label>
                                <select class="form-control" id="recipient-name" name="Kelas_diniah">
                                    <?php foreach ($list_kelas_diniyah as $kelas2) { ?>
                                        <option value="<?= $kelas2['id_kelas'] ?>"><?= $kelas2['Kelas'] ?></option>

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