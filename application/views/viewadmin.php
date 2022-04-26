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
      
    

             <ul style="float: right;margin-right: 4%; margin-top: 2%">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url('login_Admin/logout');?>">
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
  <ul style="float: right;margin-right: 2%; margin-top: 2%">    <div style="float: right; margin-left: 2%;">
                    <form action="<?= base_url('admin/pdf');?>">
                      <input type="image" src="assets/img/print.png"  width="40px" style="border-radius: 50%"></form>
                        </div><h6 style="text-align: center;">print </h6>
       </ul>

            <!-- Button trigger modal -->


  </header>

<body style="background-image:url('<?php echo base_url()?>assets/img/bg-blue.jpg'); background-size: cover;">
    <?= $this->session->flashdata('message'); ?>
                 <?= $this->session->flashdata('emailberhasil'); ?>
                 <?= $this->session->flashdata('emailgagal'); ?>
   <section id="contact">
    <div class="container">
           <div class="row">
       <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `adminmenu`.id,`menu`
                      FROM `adminmenu` JOIN `admin_access_menu`
                      ON `adminmenu`.id = `admin_access_menu`.`menu_id`
                      WHERE `admin_access_menu`.`role_id` = $role_id
                      ORDER BY `admin_access_menu`.`menu_id` ASC
        ";
          $menu = $this->db->query($queryMenu)->result_array();
        ?> 
      <div class="row">
                <!-- Page Header -->
      <div class="col-lg-10">
        <h1 class="page-header" style="color: #ffffff ; margin-top: -1%">Tabel Laporan</h1>
          </div>
            </div>
      <div class="row">
        <div class="col-lg-12">
                    <!-- Advanced Tables -->
          <div class="panel panel-default">
        
 <div class="col-lg-10">
                    <h1 class="page-header"></h1>
                </div>   
            <div class="panel-body">
              <div class="table-responsive">
                  
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                   <thead>
                     <tr>
                        <th>No</th> 
                          <th>ID User</th>
                              <th>Email</th>
                              <th>No Telepon</th>
                              <th>Nama Instansi</th>
                              <th>Laporan dari Instansi</th>
                              <th>Status Laporan</th>
                              <th>Aksi</th>
                    </tr>
                   </thead>
                <tbody>
                    <?php if($semua_pengguna->num_rows() > 0): ?>
                      <?php $index = 1; ?>
                        <?php foreach($semua_pengguna->result() as $pelaporan): ?>
                <tr>
                
                 <td style="text-align: center;"><?php echo $index++; ?></td>
                  <td> 
                    <a href = "admin/lihatdetailadm/<?php echo $pelaporan->textView; ?>">
                    <?php echo  $pelaporan->textView; ?></td>
                  <td><?php echo  $pelaporan->email;?></td>
                   <td><?php echo  $pelaporan->no_telepon;?></td>
                  <td><?php echo  $pelaporan->nama_instansi;?></td>
                      <td><?php echo  $pelaporan->laporan_instansi;?></td>
                         <td><?php echo  $pelaporan->status_laporan;?></td>
         <td>   
          &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="image" src="assets/img/instansi.png" style="width: 30px; border-radius: 20%" data-toggle="modal" data-target="#modal_instansi<?php echo $pelaporan->textView;?>">&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="image" src="assets/img/ceklist.png" style="width: 20%; border-radius: 20%" data-toggle="modal" data-target="#modal_edit<?php echo $pelaporan->textView;?>">&nbsp;&nbsp;
            <input type="image" src="assets/img/email.png" style="width: 1px;  border-radius: 20%" data-toggle="modal" data-target="#modal_email">
         </td>
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
                     </div>
                        </div>
                          </div>
                            </form>
                            
                  
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
        </div>
    <?php
        foreach($semua_pengguna->result_array() as $i):
         $textView=$i['textView'];
          $inisial_instansi=$i['inisial_instansi'];?>   
           
        <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/editinstansi'?>">
         <div class="row">
          <div class="modal fade" id="modal_instansi<?= $textView;?>">
           <div class="modal-dialog">
            <div class="modal-content">
             <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                 <h3 class="modal-title" id="myModalLabel">Edit Status</h3>
             </div>     

                <div class="modal-body">
                  <div class="form-group">
                    <label class="control-label col-xs-3" >Id Laporan </label>
                      <div class="col-xs-8">
                        <input name="textView" value="<?php echo $textView;?>" class="form-control" type="text" placeholder="Kode Barang..." readonly>
                      </div>
                        </div>

                   
                <div class="modal-body">
                  <div class="form-group">
                    <label class="control-label col-xs-3" >Id Instansi </label>
                      <div class="col-xs-8">
                        <input name="inisial_instansi" value="<?php echo $inisial_instansi;?>" class="form-control" type="text" placeholder="inisial instansi..." required="inisial_instansi">
                      </div>
                        </div>
                    <div class="modal-footer">
                      <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>

        <?php endforeach;?>

           <?php
        foreach($semua_pengguna->result_array() as $i):
    
            $textView=$i['textView'];
              $status_laporan=$i['status_laporan'];
            ?>   
            
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/teruskan'?>">
            <div class="row">
              <div class="modal fade" id="modal_edit<?= $textView;?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
       
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3 class="modal-title" id="myModalLabel">Edit Status</h3>
                    </div>
        
                <div class="modal-body">       
                  <div class="form-group">
                    <label class="control-label col-xs-3" >Id Laporan</label>
                      <div class="col-xs-8">
                        <input name="textView" value="<?php echo $textView;?>" class="form-control" type="text" placeholder="Id Laporan" required="textView" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-xs-3" >Status Laporan </label>
                        <div class="col-xs-8">   
                           <input name="status_laporan" value="<?php echo $status_laporan;?>" class="form-control" type="text" placeholder="Status Laporan" >
                        </div>
                    </div>

                
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Update</button>
                </div>
                  </div>
                    </div>



                      </div>
                        </div>
                          </div>
                            </form>
                              <?php endforeach;?>

        <form class="form-horizontal" method="post" enctype='multipart/form-data' action="<?php echo base_url().'admin/sendEmail'?> ">
            <div class="row">
              <div class="modal fade" id="modal_email">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
       
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3 class="modal-title" id="myModalLabel">Edit Status</h3>
                    </div>

                 <div class="form-group ">
                      <label class="control-label col-xs-3" for="to" style="padding-left:1px;color:black">Email Tujuan Anda</label>
                       <div class="col-xs-8">
                      <input type="email" class="form-control" id="email" placeholder=" Email Tujuan..." name="email" style="margin-top: 4%"  required="email"></div></div>

                       <div class="form-group">
                      <label class="control-label col-xs-3" for="subject" style="color:black">Subject Anda :</label>
                       <div class="col-xs-8">
                       <input type="text" class="form-control" id="subject" placeholder=" Masukkan Subject" name="subject" style="margin-top: 4%"  required="subject"></div></div>


                    <div class="form-group">
                      <label class="control-label col-xs-3" for="isi" style="color:black">Pesan Anda :</label>
                       <div class="col-xs-8">
                      <textarea class="form-control" name="isi" rows="6" style="width:100% ; margin-top: 4%"  required="isi"></textarea></div></div>

                       <div class="form-group">
                      <label class="control-label col-xs-3" for="lampiran" style="color:black">Masukkan Berkas</label>
                      <div class="col-xs-8">
                      <input type="file" style="height:45px" class="form-control form-control-user" id="lampiran" name="lampiran" required="lampiran">
                    </div>
                  </div>
            
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button type="submit" name="submit" class="btn btn-info">Update</button>
                </div></div></div></div></div>  </form>

                <div style="float: right;">
                    <form action="<?= base_url('admin/pdf');?>">
                      <button class="btn btn-xs btn-info" >cetak laporan</button></form>
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
    <!-- end wrapper -->
 <footer id="footer" style="position: center">
    <div class="footer-bottom" >
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
</a></td></tr></tbody></table></div></div></div>
</body>

</html>