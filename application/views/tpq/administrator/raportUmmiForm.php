<div class="main-panel">
    <div class="content-wrapper">



        <div class="page-header">



            <!-- pilih kelas -->
            <h3 class="page-title"> Data Santri </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Cetak Raport</a></li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">Santri Baru</li> -->
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="col-lg-12">
                            <form class="mt-4" target="_blank" action="<?= site_url('administrators/printRaportUmmi') ?>" method="post" accept-charset="utf-8">

                                <div class="row">


                                    <div class="col-lg-12">
                                        <h2 class="page-title">Cetak Raport Semester Ini</h2>
                                        <br>
                                        <div class="form-group">
                                            <label class="text-dark" for="eml">Pilih Raport Kelas</label>

                                            <select name="id_kelas" class="form-control" id="eml">
                                                <?php foreach ($kelas as $showKelas) { ?>
                                                    <option value="<?= $showKelas['id_kelas'] ?>"><?= $showKelas['Kelas'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" onclick="" class="btn btn-block btn-dark" value="Login"><i class="mdi mdi-printer menu-icon"></i> Print Raport</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="col-lg-12">
                            <form class="mt-4" target="_blank" action="<?= site_url('administrators/') ?>" method="post" accept-charset="utf-8">

                                <div class="row">

                                    <div class="col-lg-12">

                                        <h2 class="page-title">Cetak Raport Kustom</h2>
                                        <br>
                                        <div class="form-group">
                                            <label class="text-dark" for="eml">Tahun</label>

                                            <select name="" class="form-control" id="eml">
                                                <?php for($i=$tahun; $i<=$tahun+3; $i++){ ?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">


                                        <div class="form-group">
                                            <label class="text-dark" for="eml">Pilih Semester</label>

                                            <select name="" class="form-control" id="eml">
                                                <option value="Genab">Genab</option>
                                                <option value="Ganjil">Ganjil</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">

                                        <div class="form-group">
                                            <label class="text-dark" for="eml">Pilih Raport Kelas</label>

                                            <select name="" class="form-control" id="eml">
                                                <?php foreach ($kelas as $showKelas) { ?>
                                                    <option value="<?= $showKelas['id_kelas'] ?>"><?= $showKelas['Kelas'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" onclick="" class="btn btn-block btn-dark" value="Login"><i class="mdi mdi-printer menu-icon"></i> Print Raport</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
            </div>
        </div>
        <!-- content-wrapper ends -->