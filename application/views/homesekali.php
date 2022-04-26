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

   
  <header id="footer" style="color: #ffffff; font-size: 160%">
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
                        <li><a href="<?= base_url('auth/logout');?>">Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
         
  </header>
  <body style="background-color:#1c6eff "> 
      <section id="contact">
    <div class="container">
           
      <div class="row">
        <br>
         <!-- logo pusri -->
        
        <!--LOG OUT-->
        <!-- start -->

<br>
<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-30">
          <!-- Start penjelasan -->
          <div class="welcome-area">
            <div class="welcome-content">
              <ul class="wc-table" style="margin-top: -100px">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <img src="<?php echo base_url()?>/images/warn.png" width="117px">
                    <h4 class="wc-tittle">Tidak Ada Toleransi </h4>
                    <p>Tidak ada toleransi atas penipuan dan kecurangan dalam Perusahaan! Anda dapat menolong kami melawan semua kegiatan yang merugikan perusahaan dengan melaporkan hal tersebut melalui form aduan dalam bidang-bidang tertentu.
                    </p>
                  </div>
                </li>



                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <img src="<?php echo base_url()?>/images/database.png" width="117px">
                    <h4 class="wc-tittle">Sistem Terstandardisasi</h4>
                    <p>Dengan menggunakan sistem whistle blower yang telah distandardisasi, laporan anda dan anda akan tetap terjaga kerahasiaannya. Bisa saja anda memiliki informasi akan pola tertentu yang sekiranya mengganggu kinerja perusahaan, namun anda takut untuk menyampaikannya langsung. </p>
                  </div>
                </li>



                <!-- kirim aduan -->
                <li style="margin-left: -40px; margin-top: 30px">
                       <div class="about-right wow fadeInRight">
                           <div class="title-area">
                    
                   <h3 class="wc-tittle">Jika Anda ingin mengirimkan aduan anda pertama kali, harap klik di sini :</h3>
                      <span class="tittle-line"></span>   
              <!--        <li> -->
                <form action="<?php echo base_url ();?>isi_data">
                      <button type="submit" data-text="KIRIM ADUAN" class="button button-default" style="margin-top: -10px; margin-left: -5px"><span>KIRIM ADUAN</span></button></form>
                      <!-- </li>  -->  
                         
                         </div> 
                   </div>
              </li>

                <br>

                 <li style="margin-left: -40px; margin-top: 10px;">
                       <div class="about-right wow fadeInRight">
                          
                    <br>
                   <h3>Jika Anda ingin melihat aduan anda, harap klik di sini :</h3>
                      <span class="tittle-line"></span>     
                    <!--   <li> -->
                      <form action="<?php echo base_url ();?>auth">
                      <button type="submit" data-text="LIHAT ADUAN" class="button button-default" style="margin-top: -10px; margin-left: -5px"><span>LIHAT ADUAN</span></button></form>
                <!--       </li>   -->
                           </li>
                 <!-- end kirim aduan -->

                   <li style="margin-left: -40px; margin-top: 30px">
                       <div class="about-right wow fadeInRight">
                           <div class="title-area">
                    
                   <h3>Jika Anda ingin menguji coba terlebih dahulu, harap klik di sini :</h3>
                      <span class="tittle-line"></span>     
                    <!--   <li> -->
                      <form action="<?php echo base_url ();?>ujicoba">
                      <button type="submit" data-text="UJI COBA" class="button button-default" style="margin-top: -10px; margin-left: -5px"><span>UJI COBA</span></button></form>
                <!--       </li>   -->
                           </li>


              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <img src="<?php echo base_url()?>/images/file.png" width="117px">
                    <h4 class="wc-tittle">Kerahasiaan Terjaga</h4>
                    <p>Kami akan menjaga kerahasiaan anda sebagai seorang whistle blower. Andapun dapat berpartisipasi untuk melakukan klarifikasi dengan membuat login tersendiri. </p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                   <img src="<?php echo base_url()?>/images/edit.png" width="117px">
                    <h4 class="wc-tittle">Bukti</h4>
                    <p>Kami tertarik atas kejelasan laporan informasi yang anda berikan, akan lebih baik bila disertai informasi pelapor dan terlapor yang jelas.</p>
                  </div>
                </li>
                </ul>

            </div>
          </div>
        </section> 


<section id="about">
    <div class="container">
          <center>
                <div class="single-wc-content wow fadeInUp">
                  <b style="color: #e80000; ">Setiap komponen perusahaan / stakeholder PT Pupuk Sriwidjaja memiliki tanggung jawab yang sama untuk mendukung tumbuh kembangnya perusahaan ini menjadi lebih baik lagi.</b>
                </div>
                </center>
                </div>
          </section>


</div>
        
  </section>


  <!-- Start Footer -->    
  <footer id="footer">
        <div class="footer-bottom">
               <p>
                  <img src="<?php echo base_url()?>images/logopusri.png" width="20px"/>
                     <a rel="nofollow" href="<?php echo base_url()?>http://www.pusri.co.id/">
                      © Desember 2019 PT Pupuk Sriwidjaja, Palembang
                     </a>
               </p>
        </div>
      </footer>


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