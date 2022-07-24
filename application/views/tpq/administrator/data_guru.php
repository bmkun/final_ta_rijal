<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <a target="blank" href="<?= site_url("main/register_guru") ?>" class="btn btn-info">Tambah Guru</a>
            <h3 class="page-title"> Data Guru </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Data</a></li>
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

                                <th> Nama Guru </th>
                                <th> Jenis Kelamin </th>
                                <th> Nomor Hp </th>
                                <th> Tanggal Lahir</th>
                                <th>Aksi</th>
                                <!-- <th> Diniah </th> -->
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($data_guru as $show_data) {
                            ?>
                                <tr>

                                    <td> <?= $show_data['Nama'] ?> </td>
                                    <td><?php $gender = $show_data['Jenis_kelamin'] == "L" ? "Laki - laki " : "Perempuan";
                                        echo $gender; ?></td>
                                    <td> <?= $show_data['no_hp'] ?> </td>
                                    <td> <?= $show_data['tanggal_lahir'] ?> </td>
                                    <td>
                                        <?php if ($show_data['Status_guru'] != 'aktif') { ?>
                                            <a href="<?= site_url('administrators/status_guru/') . $show_data['id_guru'] . '/' . 'nonaktif' ?>" class="btn btn-success">
                                                Aktifkan
                                            </a>
                                        <?php } elseif ($show_data['Status_guru'] == 'aktif') { ?>
                                            <a href="<?= site_url('administrators/status_guru/') . $show_data['id_guru'] . '/' . $show_data['Status_guru'] ?>" class="btn btn-danger">
                                                Non Aktifkan
                                            </a>
                                        <?php } ?>

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