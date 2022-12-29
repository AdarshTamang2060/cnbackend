<!--header start-->
<?php
 
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
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>showcountry" class="link">Display Country</a></li>
                </ol>
            </nav>
          </div>
        
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New Country</h4>  
                  <form class="cmxform" name="addmember" id="signupForm" method="post" action="database/actions/country/insert-country.php" enctype="multipart/form-data">
                    <fieldset>
                        
                    <div class="row">
                        <div class="form-group col-6">
                                <label for="firstname">Title</label>
                                <input id="firstname" class="form-control" name="country_name" type="text" Required>
                        </div>
                           <div class="form-group col-6 mt-3">
                               
                                    <input type="date" class="form-control" name="date">
                                    <span class="input-group-addon input-group-append border-left">
                                    
                                    </span>
                                
                            </div>
                        </div>
                        
                        <!-- <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" name="email" type="email" Required>
                        </div> -->
                      <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">Slug</label>
                            <input id="firstname" class="form-control" name="country_slug" type="text" Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Status</label>
                            <select class="form-control" name="status" id="exampleSelectGender" Required>
                            <option value="1">Public</option>
                            <option value="0">Draft</option>
                            </select>
                        </div> 
                    </div>
                    <div class="row">
                    <div class="form-group col-6">
                            <label for="firstname">Meta Title</label>
                            <input id="firstname" class="form-control" name="meta_title" type="text" Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="firstname">Meta Discription</label>
                        <textarea name="meta_description" id="meta_description"  class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                        </div>
                        <div class="form-group col-6">
                            <label for="firstname">Vedio</label>
                            <input id="firstname" class="form-control" name="video" type="text">
                        </div>
                         <div class="col-lg-4 grid-margin stretch-card mt-3">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title d-flex">Image
                            <small class="ml-auto align-self-end">
                            </small>
                          </h4>
                          <input type="file" name="countryimage" class="dropify" Required />
                        </div>
                      </div>
                  </div>
                  <div class="form-group col-12">
                        <label for="firstname">Intro Text</label>
                        <textarea  name="introtextckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="firstname">Details</label>
                        <textarea  name="detailckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                        </div>
                    </div>
                        

                      
                       
                      
                    
                    
                      <input class="btn btn-primary" type="submit" name="add_country" value="Submit">
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

