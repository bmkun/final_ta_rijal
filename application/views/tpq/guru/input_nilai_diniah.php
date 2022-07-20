<style>
    .width {
        width: 80px !important;
        text-align: center;
    }
</style>

<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <!-- <a target="blank" href="<?= site_url("main/register") ?>" class="btn btn-info">Tambah siswa</a> -->
            <h3 class="page-title"> Input Nilai Ummi </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>

                    <form class="forms-sample" method="POST" action="<?= site_url("guru_access/act_nilai_diniah") ?>">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Username</label>
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

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </form>
                </div>
                <div class="card-body">


                </div>

                <div class="card-body">
                    <h4 class="card-title">Daftar Nilai Santri</h4>


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>mata_pelajaran</th>
                                <th>Nilai</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($nilai_santri as $list_nilai) { ?>
                                <tr>
                                    <td><?= $list_nilai['Nama'] ?></td>
                                    <td><?= $list_nilai['detail_mapel'] ?></td>
                                    <td><?= $list_nilai['nilai'] ?></td>

                                    <!-- <td><input type="text" class="form-control width" value="90" name="nilai"></td> -->
                                    <td>
                                        <button type="button" class="btn btn-warning">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
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