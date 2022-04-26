<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PUSRI - WHISTLE BLOWING SYSTEM</title>

  <!-- Custom fonts for this template-->
      <link rel="shortcut icon" type="image/icon" href="<?php echo base_url()?>/images/logopusri.png"/>
  <link href="<?php echo base_url()?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>/css/sb-admin-2.min.css" rel="stylesheet">
      <link href="<?php echo base_url()?>/css/style.css" rel="stylesheet">


</head>
<body class="bg-gradient-primary">
      <?php
        foreach($semua_pengguna->result_array() as $i):
            $kode_unik=$i['kode_unik'];
            $password=$i['password'];?>   

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 mx-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block" style="margin-top: 100px">
            <center>
             <img src="<?php echo base_url()?>/images/logopusri.png" style="width: 200px" />
             </center>
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Ini adalah Username dan Password Anda Silahkan Login</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth');?>">
                <!-- username -->
                <div class="form-group">
                  <div class="form-group"> Username
                     <input value="<?php echo $kode_unik;?>" class="form-control" type="text" placeholder="Kode Barang..." readonly>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="form-group">Password
                  <input value="<?php echo $password;?>" class="form-control" type="text" placeholder="Kode Barang..." readonly>
                  </div>
                
         </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
           Login
              </button>
                </form>
              <!-- already have account -->
              <div class="text-center">
                <a class="small" href="<?= base_url('auth');?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
<?php endforeach;?>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()?>/js/sb-admin-2.min.js"></script>

</body>

</html>
