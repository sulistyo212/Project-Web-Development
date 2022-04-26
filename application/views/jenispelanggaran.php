<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PUSRI - WHISTLE BLOWING SYSTEM</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url()?>/images/logopusri.png"/>
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?php echo base_url()?>/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url()?>/css/theme-color/default.css" rel="stylesheet">
    
    <link href="preloader.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="<?php echo base_url()?>/css/style.css" rel="stylesheet">


    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='<?php echo base_url()?>/https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='<?php echo base_url()?>/https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='<?php echo base_url()?>https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

  </head>
<body style="background-image: url('<?php echo base_url ();?>/images/header-bg.jpg') ;";>

  <section id="contact">
    <div class="container">
      <div class="row">

      <!-- logo pusri -->

                 <div class="col-md-30">
          <div class="wow fadeInLeft">
           <div class="form-group"> 
             <img src="<?php echo base_url()?>/images/logopusri.png" width="90px" style="margin-top: -0px">
               PUSRI WHISTLE BLOWER SYSTEM
             </img>
            </div>          
            </div>
        </div>
      </div>
        <!-- start -->
    <div class="col-md-10 col-sm-9 col-xs-16">
      <div class="contact-right wow fadeInRight">
          
         <div class="form-group"> 
               <h1 style="color: #ffffff">Kepada : Pengelola Whistle Blower</h1>
            </div>
          <div>
            <h5 style="color: #ffffff"><i>
                       Dari form berikut, pilihlah satu kategori yang sekiranya lebih tepat untuk dilaporkan. Bila laporan anda tidak ada dalam kategori ini, maka tim kami tidak dapat memprosesnya.</i></h5>
          </div>
            
        <br>

             <div class="form-group"> 
               <h1 style="color: #ffffff">JENIS PELAPORAN</h1>
            </div>
<form action="<?php echo base_url('user/tambahjenis'); ?>" method="POST" id="tambah-pengguna">
            <div>
              
              <form>
  <input type="radio" name="jenis_pelaporaan" value="pelanggaran">Pelanggaran<br><br>
  <input type="radio" name="jenis_pelaporaan" value="kecurangan">Kecurangan<br><br>
  <input type="radio" name="jenis_pelaporaan" value="penyusupan">Penyusupan<br><br>
   <input type="radio" name="jenis_pelaporaan" value="korupsi">Korupsi<br>
 </form>

            </div>

              </div>              
              <button type="submit" data-text="SELANJUTNYA" class="button button-default" form="tambah-pengguna"><span>SELANJUTNYA</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Footer -->    
  <
       <footer id="footer">
        <div class="footer-bottom">
   
               <p>
                  <img src="<?php echo base_url()?>images/logopusri.png" width="20px"/>
                     <a rel="nofollow" href="<?php echo base_url('www.pusri.co.id')?>">
                      © Desember 2019 PT Pupuk Sriwidjaja, Palembang
                     </a>
               </p>
        </div>
  <!-- End Footer -->

  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="<?php echo base_url()?>/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="<?php echo base_url()?>/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="<?php echo base_url()?>/js/waypoints.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="<?php echo base_url()?>/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="<?php echo base_url()?>/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="<?php echo base_url()?>/js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="<?php echo base_url()?>/js/custom.js"></script>
    
  </body>
</html>