<!--header start-->
<?php    session_start();
 include "templates/layout/header.php";?>
<!--header close-->

<!--aside start-->
<?php include "templates/layout/aside.php";?>
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
             
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>showadmin" class="link">Display admin</a></li>
                </ol>
                <div>
                  
                </div>
            </nav>
          </div>
        
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New User</h4>  
                  <form class="cmxform" method="post" action="database/actions/superadmin/insert.php" enctype="multipart/form-data">
                    <fieldset>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">Name</label>
                            <input id="firstname" class="form-control" name="name" type="text"  required>
                        </div>
                        <div class="form-group col-6">
                            <label for="lastname">Username</label>
                            <input id="lastname" class="form-control" name="username" type="text"  required>
                        </div>
                    </div>
                      
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" name="email" type="email"  required>
                      </div>
                      <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">password</label>
                            <input id="firstname" class="form-control" name="password" type="password"  required>
                        </div>
                        <div class="form-group col-6">
                            <label for="lastname">Conform password</label>
                            <input id="lastname" class="form-control" name="conformpassword" type="password"   required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" name="gender" id="exampleSelectGender" required >
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">other</option>
                            </select>
                        </div> 
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">User Type</label>
                            <select class="form-control" name="usertype" id="exampleSelectGender"  required>
                            <option value="">Select</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                            </select>
                        </div> 
                    </div>
                      
                       
                      
                    <div class="col-lg-4 grid-margin stretch-card mt-3">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title d-flex">Image
                            <small class="ml-auto align-self-end">
                            </small>
                          </h4>
                          <input type="file" name="adminimage" class="dropify"  required />
                        </div>
                      </div>
                   
            
                  </div>
                    
                      <input class="btn btn-primary" type="submit" name="add_super_admin" value="Add SuperAdmin">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
       
 
  
 
<!-- main end -->


<!--footer start-->
<?php include "templates/layout/footer.php";?>
<!--footer end-->

