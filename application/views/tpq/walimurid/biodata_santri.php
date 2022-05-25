<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">

            <h3 class="page-title"> Formulir Data Siswa </h3>
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
                            <label for="exampleInputName1">Nama</label>
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
                            <!-- <label for="exampleInputName1">Nama</label> -->
                            <input type="hidden" name="user_id" class="form-control" id="exampleInputName1" value="<?= $this->ion_auth->user()->row()->id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
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

                    </form>
                </div>
            </div>
        <?php } ?>

    </div>
    <!-- content-wrapper ends -->