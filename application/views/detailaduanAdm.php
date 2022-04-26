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
        <li>
           <ul style="float: right;margin-right: 4%; margin-top: 2%">
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
                </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
         
  </header>
<body style="background-image:url('<?php echo base_url()?>assets/img/bg-blue.jpg') ; background-size: cover;">
    <div class="container";>
      <div class>   
        <!-- query menu -->
<br>
                <div class="col-lg-10">
                    <h1  class="page-header" style="color: #ffffff">Detil Laporan</h1>
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
                          
                           <?php if($semua_penggunaa->num_rows() > 0): ?>
                           <?php $index = 1; ?>
                           <?php foreach($semua_penggunaa->result() as $file): ?>
                         <tr>
                            <th>Id User</th> 
                       <td><?= $file->textView;?></td>
                       </tr>
                       <tr>
                        <th>
                          Nama Pelapor
                      </th>
                      <td>
                      <?=$file->namapelapor;?>
                        </td>
                      </tr>
                       <tr>     
                        <th>Jenis Kelamin</th>
                       <td><?php echo $file->jeniskelamin; ?></td>
                    </tr>
                      <tr>
                      <th>Pelapor Adalah</th> 
                   <td><?php echo $file->pelaporadalah;?></td>
                    </tr>
                  <tr>
                   <th>No Identitas</th>
                   <td><?php echo $file->no_identitas; ?></td></tr>
                    <tr>
                    <th>Email</th>
                   <td><?php echo $file->email; ?></td>  </tr>
                    <tr>
                    <th>No Telepon</th>
                   <td><?php echo $file->no_telepon; ?></td>  </tr>
                    <tr>
                    <th>Alamat Pelapor</th>
                   <td><?php echo $file->alamat; ?></td>  </tr>
                    <tr>
                    <th>Status Perkawinan</th>
                   <td><?php echo $file->status_perkawinan; ?></td>  </tr>
                    <tr>
                    <th>Pekerjaan Pelapor</th>
                   <td><?php echo $file->pekerjaan; ?></td>  </tr>
                    <tr>
                    <th>Provinsi Pelapor</th>
                   <td><?php echo $file->provinsi_pelapor; ?></td>  </tr>
                    <tr>
                    <th>Kategori Pelapor</th>
                   <td><?php echo $file->kategori_pelapor; ?></td>  </tr>
                    <tr>
                    <th>Klasifikasi Instansi</th>
                   <td><?php echo $file->klasifikasi_instansi; ?></td>  </tr>
                    <tr>
                    <th>Nama Instansi</th>
                   <td><?php echo $file->nama_instansi; ?></td>  </tr>
                    <tr>
                    <th>Sudah Melapor Kepada Instansi Terlapor</th>
                   <td>
                    <?php 
                          {
                            if($file->sudahlaporan == 1)
                             {
                             echo $sudahlaporan= "Sudah Melapor";
                             }elseif($file->sudahlaporan == 0)
                             {
                             echo $sudahlaporan= "Belum Melapor";
                            }
                             };?> 
                           </td>      
                            </tr>
                    <tr>
                    <th>Waktu upaya terakhir yang disampaikan kepada Terlapor</th>
                   <td><?php echo $file->tanggallapor; ?></td>  </tr>
                    <tr>
                    <th>Melapor Melalui</th>
                   <td><?php echo $file->melapor_melalui; ?></td>  </tr>
                    <tr>
                    <th>Melapor Kepada Siapa</th>
                   <td><?php echo $file->melapor_kepada; ?></td>  </tr>
                    <tr>
                    <th>Alamat Terlapor</th>
                   <td><?php echo $file->alamat_terlapor; ?></td>  </tr>
                    <tr>
                    <th>Provinsi Terlapor</th>
                   <td><?php echo $file->provinsi_terlapor; ?></td>  </tr>
                    <tr>
                    <th>Rahasiakan Data Pelapor </th>
                   <td> <?php 
                          {
                            if($file->rahasiadata == 1)
                             {
                             echo $rahasiadata= "Ingin di Rahasiakan";
                             }elseif($file->rahasiadata == 0)
                             {
                             echo $rahasiadata= "Tidak ingin Dirahasiakan";
                            }
                             };?></td>  </tr>
                    <tr>
                    <th>Harapan Pelapor</th>
                   <td><?php echo $file->harapan_pelapor; ?></td>  </tr>
                   <tr>
                   <th>Laporan dari Instansi</th>
                   <td><?php echo $file->laporan_instansi; ?></td></tr>
                          <tr>   <th>Status Laporan</th>
                   <td><?php echo $file->status_laporan; ?></td>
                 </tr>
                
                    
                   <?php endforeach; ?>
          <?php else: ?>
           <tr>
                <td colspan="6" style="text-align: center;">Data tidak tersedia</td>
           </tr>
      <?php endif; ?>



                                    </tbody>
                                </table>
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
     <footer id="footer" style="position: center">
    <div class="footer-bottom">
      <p>
        <img src="<?php echo base_url()?>assets/img/ombudsman.png" width="30px" />
      ©2021 Ombudsman Republik Indonesia</a></p>
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
