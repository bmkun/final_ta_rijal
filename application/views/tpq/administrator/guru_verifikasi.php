<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <!-- <a target="blank" href="<?= site_url("main/register") ?>" class="btn btn-info">Tambah siswa</a> -->
            <h3 class="page-title"> Verifikasi Data Guru </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Verifikasi Biodata</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Guru</li>
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
                                <th> No Hp </th>
                                <th> Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($data_guru as $all_guru) { ?>
                                <tr>

                                    <td> <?= $all_guru['Nama'] ?></td>
                                    <td> <?= $all_guru['tanggal_lahir'] ?></td>
                                    <td> <?php $gender = $all_guru['Jenis_kelamin'] == "L" ? "Laki - laki " : "Perempuan";
                                            echo $gender; ?></td>
                                    <td> <?= $all_guru['no_hp'] ?></td>
                                    <td><a href="<?= site_url("administrators/action_ver_guru/" . $all_guru['id_guru']) ?>" class="btn btn-info">Verfikasi</a></td>



                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->