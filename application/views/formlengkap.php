<!DOCTYPE html>
<html lang="en">
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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <style>

  /* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}


/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>

<header id="footer" style="color: #ffffff; font-size: 160%" >
  <div class="col-md-20 col-sm-9 col-xs-16">
          <div class="wow fadeInLeft">
                <div class="row" style="margin-top: 2% ; margin-bottom: 1% ; margin-left: 3%"  >
             <img src="<?php echo base_url()?>/images/logopusri.png" width="70px" height="100%"> Pusri Whistle Blowing Sistem
           </div>
         </div>
      </div>
  </header>

<body style="background-color: #1c6eff">
    <?=  form_open_multipart('user/tambah_simpan');?>
  <section id="contact">
    <div class="container">
      <div class="row">


        <!-- query menu -->

    
 
           <div class="col-md-10 col-sm-9 col-xs-16">
           <div class="contact-right wow fadeInRight">
          
           <div class="form-group"> 
               <h1 style="color: #ffffff">
            Kepada : Pengelola Whistle Blower</h1>
           </div>

              <form action="" class="contact-form">
              <div>
              <h5 style="color: #ffffff"><i>
                       Dari form berikut, pilihlah satu kategori yang sekiranya lebih tepat untuk dilaporkan. Bila laporan anda tidak ada dalam kategori ini, maka tim kami tidak dapat memprosesnya.</i></h5>
              </div>
            
        <br>

             <div class="form-group"> 
               <h1 style="color: #ffffff">JENIS PELAPORAN</h1>
             </div>
             <div style="color: #ffffff">
              
              <form>
              <input type="radio" name="jenis_pelaporaan" value="pelanggaran" required="jenis_pelaporaan">Pelanggaran<br><br>
              <input type="radio" name="jenis_pelaporaan" value="kecurangan" required="jenis_pelaporaan">Kecurangan<br><br>
              <input type="radio" name="jenis_pelaporaan" value="penyusupan" required="jenis_pelaporaan">Penyusupan<br><br>
               <input type="radio" name="jenis_pelaporaan" value="korupsi" required="jenis_pelaporaan">Korupsi<br>
              </form>

            </div>  
            <br>
            <div class="form-group">
            </div>
            <div class="form-group"> 
            <h1 style="color: #ffffff">
                JUDUL ADUAN</h1>
          </div>

          <div class="form-group">                
                <input type="text" class="form-control" placeholder="Aduanku / Judul Pengaduan" name="aduan_pelapor" required="aduan">
          </div>
              <br>
                        <div>
            <h4 style="color: #ffffff">
                Mohon uraikan peristiwa yang ada sedetail mungkin</h4>
          </div>
             
          <div class="form-group">
            <textarea class="form-control" placeholder="Uraian" name="uraian_pelapor"></textarea></div>
           <div class="form-group"> 
            <h1 style="color: #ffffff">
                DATA TERLAPOR</h1>
         </div>

          <!-- personil terlapor -->  
         
         <div>
           <h4 style="color: #ffffff">
                Siapa personil yang anda adukan?
              </h4>
         </div>
         <div class="form-group">                
           <input type="text" class="form-control" name="nama_terlapor">
         </div>

         <div class="form-group">                
           <input type="Hidden" name="kode_unik" value="KD<?php echo $nounik;?>">
         </div>

          <div class="form-group">                
           <input type="Hidden" name="password"  value="psw<?php echo $nounik;?>">
         </div>

          <!-- perusahaan terlapor -->
         
         <div>
           <h4 style="color: #ffffff">
                Personil tersebut bekerja di perusahaan mana?          
           </h4>
            <div class="form-group">
                <input type="text" class="form-control" name="perusahaan_terlapor">
              </div>            
          </div>
        <!-- Jabatan terlapor -->
        <div >
           <h4 style="color: #ffffff">
               jabatan / Unit Kerja 
           </h4>
         <div style="color: #ffffff" class="form-group">
              <input type="text" name="jabatan_unitkerja" class="form-control">
            </div>            
          </div>
          <br>


        <!-- detail pelanggaran -->
        <div style="border: 3px solid gray; border-radius: 25px; padding: 10px ; border-color:#ffffff">
           <h4 style="color: #ffffff">
               Apa Detail Pelanggaran yang dimaksud?
           </h4>

        <!-- RadioButton -->
                    <div style="color: #ffffff">
       
                          <input type="radio" name="detail_pelanggaran" value="Uang Tunai Cash" required="detail_pelanggaran">
                          <?= form_error('detail_pelanggaran','<small class="text-danger pl-3">','</small>');?>Uang Tunai Cash<br><br>
                          <input type="radio" name="detail_pelanggaran" value="Hadiah" required="detail_pelanggaran">
                          <?= form_error('detail_pelanggaran','<small class="text-danger pl-3">','</small>');?>Hadiah<br><br>
                          <input type="radio" name="detail_pelanggaran" value="Pinjaman" required="detail_pelanggaran">
                          <?= form_error('detail_pelanggaran','<small class="text-danger pl-3">','</small>');?>Pinjaman<br><br>
                          <input type="radio" name="detail_pelanggaran" value="Janji" required="detail_pelanggaran">
                          <?= form_error('detail_pelanggaran','<small class="text-danger pl-3">','</small>');?>Janji<br><br>
                          <input type="radio" name="detail_pelanggaran" value="Biaya Tambahan" required="detail_pelanggaran">
                          <?= form_error('detail_pelanggaran','<small class="text-danger pl-3">','</small>');?>Biaya Tambahan<br><br>
                          <input type="radio" name="detail_pelanggaran" value="Syarat Tambahan" required="detail_pelanggaran">
                          <?= form_error('detail_pelanggaran','<small class="text-danger pl-3">','</small>');?>Syarat Tambahan<br><br>
                          <input type="radio" name="detail_pelanggaran" value="Pertemuan" required="detail_pelanggaran">
                          <?= form_error('detail_pelanggaran','<small class="text-danger pl-3">','</small>');?>Pertemuan<br><br>
                          <input type="radio" name="detail_pelanggaran" value="Kesalahan Bertindak" required="detail_pelanggaran">
                          <?= form_error('detail_pelanggaran','<small class="text-danger pl-3">','</small>');?>Kesalahan Bertindak<br><br>
                          <input type="radio" name="detail_pelanggaran" value="Lainnya yang Merugikan Perusahaan" required="detail_pelanggaran">
                          <?= form_error('detail_pelanggaran','<small class="text-danger pl-3">','</small>');?>Lainnya yang Merugikan Perusahaan<br><br>
                          
                   

            </div>            
           </div>
            <br>

      <!-- PERINGATAN ATTACHMENT -->
       
        <div style="border: 4px solid gray; border-radius: 25px; padding: 10px ;border-color: #ffffff">
           <h4 style="color: #e80000; size: 7px; "><b>Peringatan sebelum mengirimkan attachment : </b></h4>
              <p style="color: #ffffff">
                File yang anda kirim adalah berupa file-file dokumen berbentuk digital. Bila anda tidak bisa melakukan hal tersebut, kirimkan kopi dokumen anda melalui Pos atau Fax yang nomornya tertera di halaman utama. 
              </p>
        </div>


            <br>

        <!-- ATTACH FILE -->
            <div>
               <p style="color: #ffffff">Masukan dokumen jika ada
                <input type="file" name="foto">
           
              </p>
            </div>
          

              <button type="submit" data-text="SUBMIT" class="button button-default" ><span>SUBMIT
              </span>
          </button>
            </form>
     
      
            </section>
    <?= form_close();?>

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