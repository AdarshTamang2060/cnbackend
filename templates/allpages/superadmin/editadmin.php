 <!--header start-->
<?php    
 include "../pathforeditview/header.php";?>
<!--header close-->

<!--aside start-->
<?php include "../pathforeditview/aside.php";?>
<!--aside End-->

<!-- main start-->

<?php

require_once "../../../database/database.php";
$id=$_GET["id"];
$db = Database::Instance();
$admindata=$db->CustomQuery("SELECT * FROM admins WHERE id='$id'");

foreach($admindata as $data):

 

 ?>

<div class="main-panel">
        <div class="content-wrapper">
                 
          <div class="page-header">
             
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=$base_url;?>createadmin" class="link">Add Admin</a></li>
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
                  <h4 class="card-title">Edit Admin</h4>  
                  <form class="cmxform" method="post" action="<?=$base_url;?>database/actions/superadmin/edit.php" enctype="multipart/form-data">
                    <fieldset>
                      <input hidden type="number" value=<?=$id;?> name="id">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">Name</label>
                            <input id="firstname" class="form-control" name="name" type="text" value=<?=$data->name;?> required>
                        </div>
                        <div class="form-group col-6">
                            <label for="lastname">Username</label>
                            <input id="lastname" class="form-control" name="username" type="text" value=<?=$data->username;?>  required>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input  class="form-control" name="email" type="email" value=<?=$data->email;?> required>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleSelectGender">Status</label>
                            <select class="form-control" name="status" id="exampleSelectGender"  required>
                              <?php if($data->status=="1"){
                                ?>

                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>

                                <?php
                              }
                              else{?>
                                <option value="0" selected>Inctive</option>
                                <option value="1">Active</option>
                              <?php
                              }
                              ?>

                           
                            

                           
                        </select>
                        </div> 
                    </div>
                      
                     
                      <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">New password</label>
                            <input id="firstname" class="form-control" name="password"   type="password"  required>
                        </div>
                        <div class="form-group col-6">
                            <label for="lastname">New Conform password</label>
                            <input id="lastname" class="form-control" name="conformpassword"  type="password"   required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" name="gender" id="exampleSelectGender" required >
                            <?php if($data->gender=="male"){
                                ?>

                                <option value="male" selected>male</option>
                                <option value="female">female</option>
                                <option value="other">other</option>

                                <?php
                              }
                              elseif($data->gender=="female"){?>
                                <option value="female" selected>female</option>
                                <option value="male">male</option>
                                <option value="other">other</option>

                                
                              <?php
                              }
                              else{
                              ?> 
                                <option value="female" selected>other</option>
                                <option value="male">male</option>
                                <option value="other">female</option>
                                 

                            <?php
                              }
                              ?>
                             
                            </select>
                        </div> 
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">User Type</label>
                            <select class="form-control" name="usertype" id="exampleSelectGender"  required>
                            <?php if($data->user_type=="admin"){
                                ?>

                                <option value="1" selected>Admin</option>
                                <option value="0">User</option>

                                <?php
                              }
                              else{?>
                                <option value="0" selected>user</option>
                                <option value="1">Admin</option>
                              <?php
                              }
                              ?>

                           
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
                          <input type="text" name="img_url" value="<?=$data->image;?>">
                          <input type="file" name="adminimage" class="dropify"  required />
                        </div>
                      </div>
                   
            
                  </div>
                    
                      <input class="btn btn-primary" type="submit" name="edit_super_admin" value="Edit SuperAdmin">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
       
 <?php
 endforeach;
 ?>
  
 
<!-- main end -->


<!--footer start-->
<?php include "../pathforeditview/footer.php";?>
<!--footer end-->

