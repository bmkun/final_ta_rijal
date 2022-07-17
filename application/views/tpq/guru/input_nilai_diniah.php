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



                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Acation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($santri as $list_santri) { ?>
                                <tr>
                                    <td><?= $list_santri['Nama'] ?></td>
                                    <td><?= $list_santri['Kelas'] ?></td>

                                    <!-- <td><input type="text" class="form-control width" value="90" name="nilai"></td> -->
                                    <td>
                                        <button type="button" class="btn btn-success">Input Nilai</button>
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