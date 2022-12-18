<!--header start-->
<?php include "templates/layout/header.php";?>
<!--header close-->

<!--aside start-->
<?php include "templates/layout/aside.php";?>
<!--aside End-->

<!-- main start-->
 
<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
             
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>showpages" class="link">Display Pages</a></li>
                </ol>
            </nav>
          </div>
        
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New Banner</h4>  
                  <form class="cmxform" name="addmember" id="signupForm" method="post" action="action.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <fieldset>
                        
                    <div class="row">
                        <div class="form-group col-6">
                                <label for="firstname">Title</label>
                                <input id="firstname" class="form-control" name="firstname" type="text" Required>
                        </div>
                        <div class="form-group col-6">
                            <label for="firstname">Slug</label>
                            <input id="firstname" class="form-control" name="firstname" type="text" Required>
                        </div>
                           
                        </div>
                  
                      <div class="row">
                        
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Pages Type</label>
                            <select class="form-control" name="gender" id="exampleSelectGender" Required>
                            <option>Service</option>
                            <option>Privacy Policy</option>
                            <option>Langauage Center</option>
                            </select>
                        </div> 
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Status</label>
                            <select class="form-control" name="gender" id="exampleSelectGender" Required>
                            <option>Public</option>
                            <option>Draft</option>
                             
                            </select>
                        </div> 
                         
                    </div>
                    <div class="row">
                    <div class="form-group col-6">
                        <label for="firstname">Meta Title</label>
                        <textarea name="meta_description1" id="meta_description1"  class="form-control" rows="8" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                        </div>
                        <div class="form-group col-6">
                        <label for="firstname">Meta Discription</label>
                        <textarea name="meta_description1" id="meta_description1"  class="form-control" rows="8" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4  grid-margin stretch-card mt-3">
                        <div class="card">
                        <div class="card-body">
                          <h4 class="card-title d-flex">Image
                            <small class="ml-auto align-self-end">
                            </small>
                          </h4>
                          <input type="file" name="memberimage" class="dropify" Required />
                        </div>
                      </div>
                    </div>
 
                 
                    <div class="form-group col-12">
                        <label for="firstname">Intro Text</label>
                        <textarea  name="introtextckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                        </div>
                   
                
                        
                    <div class="form-group col-12">
                        <label for="firstname">Detail</label>
                        <textarea  name="detailckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                        </div>
                    </div>
                      

                      
                       
                      
                    
                    
                      <input class="btn btn-primary" type="submit" name="addmember" value="+add banner">
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

