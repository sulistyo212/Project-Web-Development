<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSRI - WHISTLE BLOWING SYSTEM</title>
    <!-- Core CSS - Include with every page -->
        <link rel="shortcut icon" type="image/icon" href="<?php echo base_url()?>/images/logopusri.png"/>
    <link href="<?php echo base_url()?>/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>/assets/css/main-style.css" rel="stylesheet" />
        <link href="<?php echo base_url()?>/css/style.css" rel="stylesheet">
    <!-- Page-Level CSS -->
     <link href="<?php echo base_url()?>/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   </head>
<body style="background-image:url('<?php echo base_url()?>/images/bg-blue.jpg');">
   <section id="contact">
    <div class="container">
      <div class="row">
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="btn btn-danger">KEMBALI</i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?= base_url('admin');?>"><i class="fa fa-sign-out fa-fw"></i>Kembali</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        
        <!-- query menu -->



                <!-- Page Header -->
                
                <div class="col-lg-10">
                    <h1 class="page-header" style="color: #ffffff">Tables Pelaporan</h1>
                </div>
                <!--End Page Header -->

    
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                           <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Uniq Code</th>
                             				<th>Status Pelaporan</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                 <?php if($semua_pengguna->num_rows() > 0): ?>
                                 <?php $index = 1; ?>
                                 <?php foreach($semua_pengguna->result() as $data_laporan): ?>
                                <tr>
                 <td style="text-align: center;"><?php echo $index++; ?></td>
                 <td><a href = "<?php echo $data_laporan->kode_unik; ?>">
                            <?php echo $data_laporan->kode_unik?>
                  </a></td>
                 <td><form action="<?= base_url('admin/tambahstatus');?>">   
                                            <input type="radio" name="statuspelaporan" value="Sudah di proses"> Sudah di proses<br>
                                            <input type="radio" name="statuspelaporan" value="Belum di proses"> Belum di proses<br>
                                            <input type="submit" value="Submit">
                                            </form></td> </a>
                </td>

             </tr>
                    
               <?php endforeach; ?>
               <?php else: ?>
               <tr>
                    
               <td colspan="6" style="text-align: center;">Data tidak tersedia</td>
               
               </tr>
               <?php endif; ?>

                    

                                    </tbody>
                                </table>
                                <br>
                                <br>
                                    <div style="float: right;">
                                       <form action="<?= base_url('detaillaporanpdf');?>">
                                            <button class="btn-success">cetak laporan</button></form>
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
        </div>
        </section> 
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
 <footer id="footer">
    <div class="footer-bottom">
      <p>
        <img src="<?php echo base_url()?>/images/logopusri.png" width="20px" />
      ©Desember 2019 PT Pupuk Sriwidjaja, Palembang</a></p>
    </div>
  </footer>
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

</body>

</html>