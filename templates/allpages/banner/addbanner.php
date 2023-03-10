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
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>showbanner" class="link">Display Banner</a></li>
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
                        <div class="form-group col-6 mt-3">
                                <label for="firstname">Title</label>
                                <input id="firstname" class="form-control" name="firstname" type="text" Required>
                        </div>
                           <div class="form-group col-6 mt-3">
                           <label for="firstname">Date</label>
                                <div id="datepicker-popup" class="input-group date datepicker">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon input-group-append border-left">
                                    <span class="far fa-calendar input-group-text"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                  
                      <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">Slug</label>
                            <input id="firstname" class="form-control" name="firstname" type="text" Required>
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
                        <div class="row">
                        <div class="form-group col-12">
                            <label for="firstname">Image Width:default</label>
                            <input id="firstname" class="form-control" name="firstname" type="number" value="1263" Required>
                        </div>
                        <div class="form-group col-12">
                            <label for="firstname">Image Height:default</label>
                            <input id="firstname" class="form-control" name="firstname" type="number"value="400" Required>
                        </div>
                    </div>
                    </div>

                              
                <div class="row">                     
                <div class="form-group col-8">
                        <label for="firstname">Meta Discription</label>
                        <textarea  name="Details" class="form-control" rows="20"></textarea>
                      
                    </div>
                    <div class="col-lg-4  grid-margin stretch-card mt-3">
                        <div class="card">
                        <div class="card-body">
                          <h4 class="card-title d-flex">Consultancy Logo
                            <small class="ml-auto align-self-end">
                            </small>
                          </h4>
                          <input type="file" name="memberimage" class="dropify" Required />
                        </div>
                      </div>
                    </div>
                </div>
                   
                
                    <div class="form-group col-12">
                        <label for="firstname">Details</label>
                        <textarea  name="detailckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                        </div>
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

