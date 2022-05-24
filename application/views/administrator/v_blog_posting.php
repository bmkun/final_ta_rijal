<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"><?= $title ?></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Content Manager</a></li>
                <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-title">


                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <h4><?= $this->session->flashdata('notif') ?></h4>
                            <form method="POST" action="<?= site_url('administrators/post_artikel') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Judul Posting</p>
                                    <input type="text" class="form-control input-default" name="judul" placeholder="Judul Paket">
                                    <!-- <input type="hidden" class="form-control input-default" name="id_agen_trip" value=""> -->
                                </div>

                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Thumnail Posting</p>
                                    <input type="file" class="form-control input-default" name="gambar" placeholder="Judul Paket">
                                </div>

                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Artikel </p>
                                    <textarea class="ckeditor" id="ckedtor" name="artikel" style="height: 800px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Meta Description</p>
                                    <!-- <input type="text" class="form-control input-default" name="meta" placeholder="Meta Description">   -->
                                    <!-- <input type="hidden" class="form-control input-default" name="id_agen_trip" value=""> -->

                                    <textarea name="meta" class="form-control input-default" id="textbox" onkeyup="charcountupdate(this.value)" placeholder="masukkan Meta deskripsi tidak lebih dari 160 karakter"></textarea>
                                    <span id=charcount></span>
                                </div>



                                <div class="container ">
                                    <div class="row">
                                        <div class="col-md-8"></div>
                                        <div class="col-md-4 text-right">
                                            <div class="form-group">

                                                <button class="btn btn-success" type="submit" style="margin-right:-15px;"> Publis Artikel </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>

        </div>
        <!-- /# column -->
    </div>
    <!-- /# row -->

    <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->

<!-- js count caracter -->
<script>
    function charcountupdate(str) {
        var lng = str.length;
        document.getElementById("charcount").innerHTML = lng + ' Dari 160 Karakter';
    }
</script>
<!-- js count caracter -->