<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMBUDSMAN - WHISTLE BLOWING SYSTEM</title>
    <!-- Core CSS - Include with every page -->
       <link rel="shortcut icon" type="image/icon" href="<?php echo base_url()?>assets/img/ombudsman.png"/>
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

    <!-- Page-Level CSS -->
     <link href="<?php echo base_url()?>/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
  
  <header id="footer" style="color: #ffffff; font-size: 160%" >
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
                   <i style="color: white"><?= $userlogin['inisial_instansi'];?></i>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url('login_User/logout');?>">
                        <i class="btn btn-danger">LOGOUT</i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?= base_url('login_User/logout');?>">Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
            <!-- end main dropdown -->
            </ul>

            <!-- Button trigger modal -->
  </header>


<body style="background-image:url('<?php echo base_url()?>assets/img/bg-blue.jpg');">

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
      
      <div class="col-lg-20">
        <h1 class="page-header" style="color: #ffffff ; margin-top: -1%">MASUKKAN KODE AKSES ANDA</h1>
          </div>
            </div>
      <div class="row">
        <div class="col-lg-12">
                    <!-- Advanced Tables -->
          <div class="panel panel-default">
        
      <div class="col-lg-10">
                   
                </div>   
            <div class="panel-body">
              <div class="table-responsive">
           
            <hr>
            <form action="<?php echo base_url('isiuser/get_data')?>" action="GET">
                <div class="form-group">
            
                    <input type="text" class="form-control" id="inisial_instansi" name="keyword" placeholder="Input Kode Akses">
                </div>

         
            </form>
                  
         
        </div> 
               
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

</body>

</html>