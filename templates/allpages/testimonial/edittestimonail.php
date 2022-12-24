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
$testimonaildata=$db->CustomQuery("SELECT * FROM consultancies WHERE id='$id'");

foreach($testimonaildata as $data):

 

 ?>
 
<div class="main-panel">
        <div class="content-wrapper">
        
          <div class="page-header">
             
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=$base_url;?>" class="link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>showtestimonial" class="link">Display testimonail</a></li>
                </ol>
            </nav>
          </div>
        
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New consultacy</h4>  
                  <form class="cmxform" name="addmember" id="signupForm" method="post" action="database/actions/testimonial/insert.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <fieldset>
                        
                    <div class="row">
                    <div class="form-group col-6">
                            <label for="firstname">Name</label>
                            <input id="firstname" class="form-control" name="name" type="text" Required>
                        </div>
                            <div class="form-group col-6 mt-2">
                            <label for="exampleSelectGender">Status</label>
                                <select class="form-control" name="status" id="exampleSelectGender" Required>
                                <option value="1">Public</option>
                                <option value="0">Draft</option>
                                </select>
                            </div> 
                           
                    </div>
                      
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">Title</label>
                            <input id="firstname" class="form-control" name="title" type="text" Required>
                        </div>
                        <div class="col-lg-4  grid-margin stretch-card mt-3">
                        <div class="card">
                        <div class="card-body">
                          <h4 class="card-title d-flex">Image
                            <small class="ml-auto align-self-end">
                            </small>
                          </h4>
                          <input type="file" name="img" class="dropify" Required />
                        </div>
                      </div>
                    </div>
                         
                       
                    </div>
                  
                 
                 
                    <div class="form-group col-12">
                        <label for="firstname">Message</label>
                        <textarea  name="introtextckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                       
                    </div>
                    
                        

                      
                       
                      
                    
                    
                      <input class="btn btn-primary" type="submit" name="addmember" value="+addtestimonial">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php endforeach;?>
 
 <!-- main end -->
 
 
  <!--footer start-->
 <?php include "../pathforeditview/footer.php";?>
 <!--footer end-->
