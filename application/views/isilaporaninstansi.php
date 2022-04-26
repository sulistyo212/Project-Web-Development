<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMBUDSMAN - WHISTLE BLOWING SYSTEM</title>
    <!-- Core CSS - Include with every page -->
       <link rel="shortcut icon" type="image/icon" href="<?php echo base_url()?>assets/img/ombudsman.png"/>
    <link href="<?php echo base_url()?>/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>/assets/css/main-style.css" rel="stylesheet" />
        <link href="<?php echo base_url()?>/css/style.css" rel="stylesheet">
    <!-- Page-Level CSS -->
     <link href="<?php echo base_url()?>/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   <header id="footer" style="color: #ffffff; font-size: 160%" >
  <div class="col-md-20 col-sm-9 col-xs-16">
          <div class="wow fadeInLeft">
                <div class="row" style="margin-top: 2% ; margin-bottom: 1% ; margin-left: 3%"  >
             <img src="<?php echo base_url()?>assets/img/ombudsman.png" width="70px" height="100%"> Ombudsman Whistle Blower Sistem
           </div></div>
      </div>
      <ul>
    <style type="text/css">
        .badan{
            width: 800px;           
            margin: auto;
        }
    
        .warna{
            height: 10%;
            color: white;
            text-align: center;
          position: absolute;
          bottom:0;
          left: 0;
          width: 100%;          
          background: black;      
    </style>
        <li>
           <ul style="float: right;margin-right: 4%; margin-top: 2%">
                    <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="btn btn-danger">KEMBALI</i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?= base_url('isiuser');?>"><i class="fa fa-sign-out fa-fw"></i>Kembali</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
         
  </header>
<body style="background-image:url('<?php echo base_url()?>assets/img/bg-blue.jpg');">
    <div class="container";>
      <div class>   
        <!-- query menu -->
<br>
                <div class="col-lg-10">
                    <h1  class="page-header" style="color: #ffffff">ISI LAPORAN</h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                  <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                             
 <div class="row">
        <div class="col-xs-4 col-xs-offset-4 text-center">
            <?php if(!empty($keyword)){ ?>
            <p style="color:gray"><b> KODE AKSES ANDA "<?= $keyword; ?>"</b></p>
            <?php } ?>
            <table class="table">
              <thead>

                <tr>
                   <th scope="col">NO</th>
                    <th scope="col">ID LAPORAN</th>
                  <th scope="col">KATEGORI PELAPOR</th>
                  <th scope="col">KLASIFIKASI INSTANSI</th>
                  <th scope="col">NAMA INSTANSI</th>
                  <th scope="col">TANGGAPAN DARI INSTANSI</th>

                  
                  
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>

                      <?php $index = 1; ?>
                <?php foreach ($data as $row):  ?> 

                  <tr> 
                     <td style="text-align: center;"><?= $index++; ?></td>
                    <th scope="row"><?=$row['textView'] ?></th>

                    <td><?= $row['kategori_pelapor'] ?></td>
                     <td> <?= $row['klasifikasi_instansi'] ?></td>
                      <td><?= $row['nama_instansi'] ?></td>
                        <td><?= $row['laporan_instansi'] ?></td>
                    <td>
                      <a class="btn btn-xs btn-info" data-toggle="modal"data-target="#modal_edit" > Kirim Tanggapan</a>
                    </td>
                    </tr> 
                  <?php endforeach; ?>       
     

              
              </tbody>
            </table>
        </div>
    </div>

                                  
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                 <?php
        foreach($data as $row):
         $textView=$row['textView'];
          $laporan_instansi=$row['laporan_instansi'];?>   
           
        <form class="form-horizontal" method="post" action="<?php echo base_url().'isiuser/edit'?>">
         <div class="row">
          <div class="modal fade" id="modal_edit" >
           <div class="modal-dialog">
            <div class="modal-content">
             <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                 <h3 class="modal-title" id="myModalLabel">KIRIM TANGGAPAN</h3>
             </div>     

                <div class="modal-body">
                  <div class="form-group">
                    <label class="control-label col-xs-3" >Id Laporan </label>
                      <div class="col-xs-8">
                        <input name="textView" class="form-control" type="text" placeholder="ID LAPORAN" >
                      </div>
                        </div>

                   
                <div class="modal-body">
                  <div class="form-group">
                    <label class="control-label col-xs-3" >KIRIM TANGGAPAN</label>
                      <div class="col-xs-8">
                        <input name="laporan_instansi" class="form-control" type="text" placeholder="KIRIM TANGGAPAN" required="laporan">
                      </div>
                        </div>
                    <div class="modal-footer">
                      <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Kirim</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>


        <?php endforeach;?>


        



        <!-- end page-wrapper -->

    </div>
  <script type="text/javascript">
   $(document).ready(function() {
    $('table.display').DataTable();
   } );
  </script>
    <!-- end wrapper -->
    <br>
    <br>
    <br>
    <br>
    <br>
  <div class="warna">
        <div class="badan">
            <br>
      <p>
        <img src="<?php echo base_url()?>assets/img/ombudsman.png" width="30px" />
      ©2021 Ombudsman Republik Indonesia</a></p>
    </div>
  </div>
    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url()?>/assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url()?>/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>/assets/plugins/pace/pace.js"></script>
    <script src="<?php echo base_url()?>/assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url()?>/assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url()?>/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()?>/assets/plugins/dataTables/jquery.dataTables.js"></script>


<script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

     <script type="text/javascript">
    function copy_text() {
        document.getElementById("pilih").select();
        document.execCommand("copy");
        alert("Teks Berhasil DIsalin Ke Clipboard.");
    }

</body>

</html>





