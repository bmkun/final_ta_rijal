<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">

            <h3 class="page-title"> Formulir Data Santri </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
            </nav>
        </div>
        <?php if ($status_biodata == "nothing") { ?>
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="<?= site_url("walimurid_access/submit_biodata") ?>">
                        <div class="form-group">
                            <!-- <label for="exampleInputName1">Nama</label> -->
                            <input type="hidden" name="user_id" class="form-control" id="exampleInputName1" value="<?= $this->ion_auth->user()->row()->id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Santri</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="exampleInputEmail3" name="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Jenis Kelamin</label>
                            <select class="form-control" id="exampleSelectGender" name="jenis_kelamin">
                                <option value="L">Laki - laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword4">Nama Ayah</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="ayah">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Nama Ibu</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="ibu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Kelas Sekolah Formal</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="sekolah_formal" placeholder="contoh 1 SD">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Nomor HP Orangtua</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="no_hp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="alamat">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        <?php } else if ($status_biodata == "done") { ?>
            <!-- sudah diisi -->
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="<?= site_url("walimurid_access/submit_biodata") ?>">

                        <div class="form-group">
                            <label for="exampleInputName1">Nama Santri</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="nama" value="<?= $show_biodata['Nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tanggal lahir</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="nama" value="<?= $show_biodata['Umur']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="nama" value="<?php $gender = $show_biodata['Jenis_kelamin'] == "P" ? "Perempuan " : "Laki - laki";
                                                                                                                echo $gender; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Nama Ayah</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="ayah" value="<?= $show_biodata['Nama_ayah']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Nama Ibu</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="ibu" value="<?= $show_biodata['Nama_ibu']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Kelas Sekolah Formal</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="sekolah_formal" value="<?= $show_biodata['Sekolah_formal']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Nomor HP Orangtua</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="no_hp" value="<?= $show_biodata['No_HP_ortu']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="alamat" value="<?= $show_biodata['Alamat']; ?>">
                        </div>

                    </form>
                </div>
            </div>
        <?php } ?>

    </div>
    <!-- content-wrapper ends -->