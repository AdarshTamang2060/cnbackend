<!--header start-->
<?php session_start();
include "templates/layout/header.php";?>
<!--header close-->

<!--aside start-->
<?php include "templates/layout/aside.php";
require_once "database/database.php";
require_once "database/tables.php";
$db = Database::Instance();
$testi=$db->SelectAll("{$testimonial_table}");
?>
<!--aside End-->

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
              Show testimonial
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=$base_url;?>" class="link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>addtestimonial" class="link">Add testimonail</a></li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Show testimonial</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Message</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($testi as $data){?>
                        <tr>
                            <td><?=$data->id?></td>
                            <td><?=$data->name?></td>
                            <td><?=$data->title?></td>
                            <td><?=$data->status?></td>
                            <td><?=$data->message?></td>
                            <td> </td>
                            <td>
                              
                              <a href="<?=$base_url;?>templates/allpages/testimonial/edittestimonail.php?id=<?=$data->id;?>" class="link"><button class="btn btn-outline-primary"> <i class="fa-sharp fa-solid fa-pen-to-square"></i></button></a>
                              <a href="#" data-did="<?=$data->id?>"  class="link btn btn-outline-primary delete_te"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                        
                 
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

