<!--header start-->
<?php include "templates/layout/header.php";?>
<!--header close-->

<!--aside start-->
<?php include "templates/layout/aside.php";?>
<!--aside End-->

 <?php

require_once "database/database.php";
$db = Database::Instance();
$admindata=$db->SelectAll("admins");
 ?>

<!-- main start-->
 
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Show Admin
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=$base_url;?>" class="link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>createadmin" class="link">Add Admin</a></li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Previlage</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                           foreach($admindata as $data):
                        ?>
                        <tr>
                            <td><?=$data->id;?></td>
                            <td><?=$data->name;?></td>
                            <td><?=$data->username;?></td>
                            <td><?=$data->email;?></td>
                            <td><?=$data->gender;?></td>
                            <td><?=$data->user_type;?></td>
                            <td><?=$data->status;?></td>
                            <td><img src="<?=$base_url;?>images\admin\<?=$data->image;?>" alt="null"></td>
                            <td>
                              <a href="" class="link" ><button class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                              <a href="#" class="link edit-admin" data-eid="<?=$data->id;?>"><button class="btn btn-outline-primary"> <i class="fa-sharp fa-solid fa-pen-to-square"></i></button></a>
                              <a href="#" class="link delete-admin btn btn-outline-primary" data-did="<?=$data->id;?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        // include "./database/actions/superadmin/delete-admin.php";
                        ?>
                        
                 
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

