<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <a target="blank" href="<?= site_url("main/register_guru") ?>" class="btn btn-info">Tambah Guru</a>
            <h3 class="page-title"> Data Guru </h3>
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

                                <th> Nama Guru </th>
                                <th> Jenis Kelamin </th>
                                <th> Nomor Hp </th>
                                <th> Tanggal Lahir</th>
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

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->