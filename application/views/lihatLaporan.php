<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PUSRI - WHISTLE BLOWING SYSTEM</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url()?>images/logopusri.png"/>
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>css/ont-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?php echo base_url()?>css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url()?>css/theme-color/default.css" rel="stylesheet">
    
    <link href="<?php echo base_url()?>css/preloader.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
    <!-- Open Sans for body font -->
    <link href='<?php echo base_url()?>https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='<?php echo base_url()?>https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='<?php echo base_url()?>https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<style>
 
  .box{
    width: 408px;
    height: 220px;
    display: inline-block;
    border-color: #000000;
  }
  .box2{
    width: 408px;
    height: 220px;
    display: inline-block;
    border-color: #000000;
    float: right;
  }


</style>
 <header id="footer" style="color: #ffffff; font-size: 160%" >
   <div class="col-md-20 col-sm-9 col-xs-16">
          <div class="wow fadeInLeft">
                <div class="row" style="margin-top: 2% ; margin-bottom: 1% ; margin-left: 3%"  >
             <img src="<?php echo base_url()?>/images/logopusri.png" width="70px" height="100%"> Pusri Whistle Blower Sistem
           </div></div>
      </div>
             <ul style="float: right;margin-right: 4%; margin-top: 3%">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url('auth/logout');?>">
                        <i class="btn btn-danger">LOGOUT</i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?= base_url('login_Admin/logout');?>">Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
         
  </header>
<body style="background-color: #1c6eff">              
  <section id="contact">
    <div class="container">
      <div class="row">
                               <!-- start -->
        <form >
        <div class="col-md-10 col-sm-9 col-xs-20">
        <div class="contact-right wow fadeInRight">
        <div class="form-group" style="border: 2px solid gray; ">
            <h5 style="color: #ffffff; margin-left: 12px">
            </h5>
            <h3 style="color: #ffffff; margin-left: 12px" > Kepada Tim Whistle Blowing PT Pupuk Sriwidjaja</h3>
                       <br>
                          

                <table class="table">
                     <tbody>
                     
                        <tr>
                          <td>
                          <h4 style="color: #ffffff; margin-left: 12px" id="Judul" > Nomor Pelaporan Anda : 

                              <?= $data_laporan['no_pelaporan'];?>
                            </h4>
                            </td>
                        </tr>
                         <tr>
                          <td>
                              <h4 style="color: #ffffff; margin-left: 12px" id="Judul" > Aduanku :  
                              <?= $data_laporan['aduan_pelapor'];?>
                               </h4>
                          </td>        
                        </tr>
                          <tr>
                           <td>
                            <h4 style="color: #ffffff; margin-left: 12px" id="date_created" >Tanggal pelaporan: 
                              <?= $data_laporan['date_created'];?></h4>
                          </td>
                        </tr>
                         <tr><td><h4 style="color: #ffffff; margin-left: 12px" id="uraian" >Uraian: 
                              <?= $data_laporan['uraian_pelapor'];?></h4></td></tr>
                            <tr><td><h4 style="color: #ffffff; margin-left: 12px" id="status" >Status Laporan: 
                              <?= $data_laporan['statuspelaporan'];?></h4></td></tr>   
            </tbody>                    
          </table>
          </div>
        </div>
          </div>
      </form>
   </div>
    </div>
  </section>

  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-bottom">
      <p><img src="<?php echo base_url()?>images/logopusri.png" width="20px" />
        <a rel="nofollow" href="http://www.pusri.co.id/">© Desember 2019 PT Pupuk Sriwidjaja, Palembang</a></p>
    </div>
  </footer>

  <!-- End Footer -->

  <!-- initialize jQuery Library --> 
  <script src="<?php echo base_url()?>https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="<?php echo base_url()?>js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="<?php echo base_url()?>js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="<?php echo base_url()?>js/waypoints.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="<?php echo base_url()?>js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="<?php echo base_url()?>js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="<?php echo base_url()?>js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="<?php echo base_url()?>js/custom.js"></script>
    
  </body>
</html>