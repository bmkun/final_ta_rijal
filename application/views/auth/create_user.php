<!-- <h1><?php echo lang('create_user_heading'); ?></h1>
<p><?php echo lang('create_user_subheading'); ?></p>

<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open("auth/create_user"); ?>

<p>
      <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
      <?php echo form_input($first_name); ?>
</p>

<p>
      <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
      <?php echo form_input($last_name); ?>
</p>

<?php
if ($identity_column !== 'email') {
      echo '<p>';
      echo lang('create_user_identity_label', 'identity');
      echo '<br />';
      echo form_error('identity');
      echo form_input($identity);
      echo '</p>';
}
?>

<p>
      <?php echo lang('create_user_company_label', 'company'); ?> <br />
      <?php echo form_input($company); ?>
</p>

<p>
      <?php echo lang('create_user_email_label', 'email'); ?> <br />
      <?php echo form_input($email); ?>
</p>

<p>
      <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
      <?php echo form_input($phone); ?>
</p>

<p>
      <?php echo lang('create_user_password_label', 'password'); ?> <br />
      <?php echo form_input($password); ?>
</p>

<p>
      <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
      <?php echo form_input($password_confirm); ?>
</p>


<p><?php echo form_submit('submit', lang('create_user_submit_btn')); ?></p>

<?php echo form_close(); ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Favicon icon -->
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
      <title>Ela - Bootstrap Admin Dashboard Template</title>
      <!-- Bootstrap Core CSS -->
      <link href="<?= base_url('assets/admin-assets/') ?>css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="<?= base_url('assets/admin-assets/') ?>css/helper.css" rel="stylesheet">
      <link href="<?= base_url('assets/admin-assets/') ?>css/style.css" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
      <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar" style="background-color: orange;">
      <!-- Preloader - style you can find in spinners.css -->
      <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
      </div>
      <!-- Main wrapper  -->
      <div id="main-wrapper">
            <div id="infoMessage"></div>
            <div class="unix-login">
                  <div class="container-fluid">
                        <div class="row justify-content-center">
                              <div class="col-lg-4">
                                    <div class="login-content card">
                                          <div class="login-form">
                                                <h4>Register</h4>
                                                <form action="<?= site_url('auth/create_user') ?>" method="post" accept-charset="utf-8">
                                                      <div class="form-group">
                                                            <label>Nama Depan</label>
                                                            <input type="text" class="form-control" name="first_name" required>
                                                      </div>
                                                      <div class=" form-group">
                                                            <label>Nama Belakang</label>
                                                            <input type="text" class="form-control" name="last_name" required>
                                                      </div>

                                                      <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" name="email" required>
                                                      </div>
                                                      <div class=" form-group">
                                                            <label>Phone</label>
                                                            <input type="text" class="form-control" name="phone" required>
                                                      </div>
                                                      <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password" required>
                                                      </div>
                                                      <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password_confirm" required>
                                                      </div>
                                                      <!-- <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Agree the terms and policy
                                        </label>
                                    </div> -->
                                                      <button type="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                                      <!-- <div class="register-link m-t-15 text-center">
                                                            <p>Already have account ? <a href="#"> Sign in</a></p>
                                                      </div> -->
                                                </form>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

      </div>
      <!-- End Wrapper -->
      <!-- All Jquery -->
      <script src="<?= base_url('assets/admin-assets/') ?>js/lib/jquery/jquery.min.js"></script>
      <!-- Bootstrap tether Core JavaScript -->
      <script src="<?= base_url('assets/admin-assets/') ?>js/lib/bootstrap/js/popper.min.js"></script>
      <script src="<?= base_url('assets/admin-assets/') ?>js/lib/bootstrap/js/bootstrap.min.js"></script>
      <!-- slimscrollbar scrollbar JavaScript -->
      <script src="<?= base_url('assets/admin-assets/') ?>js/jquery.slimscroll.js"></script>
      <!--Menu sidebar -->
      <script src="<?= base_url('assets/admin-assets/') ?>js/sidebarmenu.js"></script>
      <!--stickey kit -->
      <script src="<?= base_url('assets/admin-assets/') ?>js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
      <!--Custom JavaScript -->
      <script src="<?= base_url('assets/admin-assets/') ?>js/custom.min.js"></script>

</body>

</html>