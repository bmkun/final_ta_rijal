<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <a target="blank" href="<?= site_url("main/register") ?>" class="btn btn-info">Tambah siswa</a>
            <h3 class="page-title"> Data Santri </h3>
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
                                <th> Nama</th>
                                <th> Tanggal Lahir </th>
                                <th> Jenis Kelamin </th>
                                <th> Nama Ayah</th>
                                <th> Nama Ibu</th>
                                <th>Nomor Hp</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($data_santri as $all_santri) { ?>
                                <tr>

                                    <td> <?= $all_santri['Nama'] ?></td>
                                    <td> <?= $all_santri['Umur'] ?></td>

                                    <td> <?php $gender = $all_santri['Jenis_kelamin'] == "L" ? "Laki - laki " : "Perempuan";
                                            echo $gender; ?></td>
                                    <td> <?= $all_santri['Nama_ayah'] ?></td>
                                    <td> <?= $all_santri['Nama_ibu'] ?></td>
                                    <td> <?= $all_santri['No_HP_ortu'] ?></td>


                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->