<!--header start-->
<?php
session_start();
include "templates/layout/header.php";?>
<!--header close-->

<!--aside start-->
<?php include "templates/layout/aside.php";?>
<!--aside End-->
<?php

require_once "database/database.php";
require_once "database/tables.php";
$db = Database::Instance();
$consultancy_data=$db->SelectAll("{$consultancy_table}");

 ?>
<!-- main start-->
 
 <div class="main-panel">
        <div class="content-wrapper">
        <?php
                  //messaage include
                  // include("message.php");
                  include("infos/message.php")
              ?>
          <div class="page-header">
            <h3 class="page-title">
              Show Country
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=$base_url;?>" class="link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>addconsultancy" class="link">Add Consultancy</a></li>
              </ol>
            </nav>
          </div>
          <div class="card">
          <?php

require_once "database/database.php";
require_once "database/tables.php";
$db = Database::Instance();

$consultancy_data=$db->SelectAll("{$consultancy_table}");

 ?>
            <div class="card-body">
              <h4 class="card-title">Show Consultancy</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>nickname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
<<<<<<< HEAD
                        <?php foreach($consultancy_data as $data){

                      ?>
                        <tr>
                            <td><?=$data->id?></td>
                            <td><?=$data->consultancy_name?></td>
                            <td><?=$data->nickname?></td>
                            <td><?=$data->consultancy_email?></td>
                            <td><?=$data->consultancy_phone?></td>
                            <td><?=$data->consultancy_address?></td>
                            <td><?=$data->status?></td>
                         
                             
                            <td>
                              <a href="<?=$base_url;?>templates/allpages/consultancy/editconsultancy.php?id=<?=$data->id?>" class="link"><button class="btn btn-outline-primary"> <i class="fa-sharp fa-solid fa-pen-to-square"></i></button></a>
                              <a href="#" data-did="<?=$data->id?>" class="link btn btn-outline-primary delete-cons"><i class="fa-solid fa-trash"></i></a>
=======
                      <?php foreach($consultancy_data as $data){?>
                        <tr>
                            <td><?=$data->id;?></td>
                            <td><?=$data->consultancy_name;?></td>
                            <td>no</td>
                            <td><?=$data->consultancy_email;?></td>
                            <td><?=$data->consultancy_phone;?></td>
                            <td><?=$data->consultancy_address;?></td>
                            <td><?=$data->status;?></td>
                            <td>
                              <a href="" class="link"><button class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                              <a href="<?=$base_url;?>templates/allpages/consultancy/editconsultancy.php?id=<?=$data->id;?>" class="link"><button class="btn btn-outline-primary"> <i class="fa-sharp fa-solid fa-pen-to-square"></i></button></a>
                              <a href="#" class="link"><button class="btn btn-outline-primary"><i class="fa-solid fa-trash"></i></button></a>
>>>>>>> 813fd16e55f4e3beea5fddfb34ee9217e8f680d3
                              <a href="#" class="link"><button class="btn btn-outline-primary">+country</button></a>
                              <a href="#" class="link"><button class="btn btn-outline-primary">+testpreparation</button></a>
                              
                            </td>
                        </tr>
<<<<<<< HEAD
                        <?php } ?>
                        
=======
                        <?php
                      }
                        ?>
>>>>>>> 813fd16e55f4e3beea5fddfb34ee9217e8f680d3
                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
 
       
 
  
 
<!-- main end -->


<!--footer start-->
<?php include "templates/layout/footer.php";?>
<!--footer end-->

