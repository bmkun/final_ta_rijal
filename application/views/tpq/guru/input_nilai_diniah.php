<!-- <style>
    .width {
        width: 80px !important;
        text-align: center;
    }
</style> -->

<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <!-- <a target="blank" href="<?= site_url("main/register") ?>" class="btn btn-info">Tambah siswa</a> -->
            <!-- <h3 class="page-title"> Input Nilai Diniah </h3> -->
            <!-- pilih kelas -->
            <div class="btn-group">


                <a href="<?= site_url("guru_access/nilai_diniah") ?>" class="btn btn-success active"><?= $daftar_kelas[0] ?></a>
                <a href="<?= site_url("guru_access/nilai_diniah2") ?>" class="btn btn-success"><?= $daftar_kelas[1] ?></a>

            </div>
            <!-- pilih kelas -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Input Nilai</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nilai Diniah</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Input Nilai Diniah</h4>

                    <form class="forms-sample" method="POST" action="<?= site_url("guru_access/act_nilai_diniah") ?>">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Santri</label>
                            <select class="form-control" name="id_santri">
                                <?php foreach ($santri as $row_santri) { ?>
                                    <option value="<?= $row_santri["id_santri"] ?>"><?= $row_santri["Nama"] ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1"><?= $mapel['detail_mapel'] ?></label>
                            <input type="hidden" value="<?= $kelas_santri['id_kelas'] ?>" name='id_kelas'>
                            <!-- <input type="hidden" value="<?= $tahun ?>" name='tahun'> -->
                            <input type="hidden" value="<?= $tahun ?>" name='tahun'>
                            <input type="hidden" value="<?= $id_guru ?>" name='id_guru'>
                            <input type="hidden" value="<?= $semester ?>" name='semester'>
                            <input type="hidden" value="<?= $mapel['kd_detail_mapel'] ?>" name='id_detail_mapel'>
                            <input type="text" class="form-control" name="nilai">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>

                    </form>
                </div>
                <div class="card-body">


                </div>

                <div class="card-body">
                    <h4 class="card-title">Daftar Nilai Santri</h4>

                    <?= $this->session->flashdata('notiv') ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>mata pelajaran</th>
                                <th>Nilai</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no_urut = 1;
                            foreach ($nilai_santri as $list_nilai) {
                            ?>
                                <tr>
                                    <td><?= $no_urut ?></td>
                                    <td><?= $list_nilai['Nama'] ?></td>
                                    <td><?= $list_nilai['detail_mapel'] ?></td>
                                    <td><?= $list_nilai['nilai'] ?></td>

                                    <!-- <td><input type="text" class="form-control width" value="90" name="nilai"></td> -->
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $list_nilai['id_santri'] ?>">Edit Nilai</button>
                                        <!-- <button type="button" class="btn btn-danger">Delete</button> -->
                                    </td>
                                </tr>
                            <?php $no_urut++;
                            } ?>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <!-- modal edit -->
    <?php foreach ($nilai_santri as $edit_nilai) { ?>
        <div class="modal fade" id="edit<?= $edit_nilai['id_santri'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Nilai</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form method="POST" action="<?= site_url("guru_access/update_nilai_diniah") ?>">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Santri</label>
                                <input class="form-control" type="hidden" value="<?= $edit_nilai['id_nilai_diniah'] ?>" name="id_nilai_diniah">
                                <input class="form-control" type="text" value="<?= $edit_nilai['Nama'] ?>" name="Nama" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nilai Santri</label>
                                <input class="form-control" type="text" value="<?= $edit_nilai['nilai'] ?>" name="nilai">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    <?php  } ?>