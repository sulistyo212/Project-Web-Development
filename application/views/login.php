<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PUSRI - WHISTLE BLOWING SYSTEM - Login</title>

  <!-- Custom fonts for this template-->
      <link href="<?php echo base_url()?>/css/style.css" rel="stylesheet">
      <link rel="shortcut icon" type="image/icon" href="<?php echo base_url()?>/images/logopusri.png"/>
  <link href="<?php echo base_url()?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container" style="margin-top: 7%">
   
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9 mx-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block" style="margin-top: 70px">
            <center>
             <img src="<?php echo base_url()?>/images/logopusri.png" style="width: 150px" />
             </center>
          </div>


          <!-- header -->
          <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                  </div>
          
          <!-- form login -->
            <?= $this->session->flashdata('message'); ?>
          <!-- input email -->
                  <form class="user" method="post" action="<?= base_url('auth');?>">
                                        <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="kode_unik" name="kode_unik" placeholder="Username...">
                    </div>

          <!-- input password -->
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                    </div>
          
          <!-- button send -->
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                      Login</button></form>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()?>/js/sb-admin-2.min.js"></script>

</body>

</html>
