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
                <li class="breadcrumb-item"><a href="<?=$base_url;?>" class="link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>shownews" class="link">Display News</a></li>
                </ol>
            </nav>
          </div>
        
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New consultacy</h4>  
                  <form class="cmxform" name="addmember" id="signupForm" method="post" action="database/actions/news/insert.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <fieldset>
                        
                    <div class="row">
                            <div class="form-group col-6 ">
                                <label for="firstname">Date</label>
                                
                                    <input type="date" class="form-control" name="date">
                                    <span class="input-group-addon input-group-append border-left">
                                     
                                    </span>
                                
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
                        <div class="form-group col-6">
                            <label for="firstname">Slug</label>
                            <input id="firstname" class="form-control" name="slug" type="text" Required>
                        </div>
                       
                    </div>
                  
                <div class="row">                     
                <div class="form-group col-6">
                        <label for="firstname">Meta Title</label>
                        <textarea  name="meta_title" class="form-control" rows="20"></textarea>
                      
                    </div>
                    <div class="col-lg-4  grid-margin stretch-card mt-3">
                        <div class="card">
                        <div class="card-body">
                          <h4 class="card-title d-flex">Image
                            <small class="ml-auto align-self-end">
                            </small>
                          </h4>
                          <input type="file" name="newsimage" class="dropify" Required />
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="firstname">Meta Discription</label>
                        <textarea  name="meta_discription" class="form-control" rows="7"></textarea>
                      
                    </div>
                    <div class="form-group col-6">
                            <label for="firstname">Vedio</label>
                            <input id="firstname" class="form-control" name="video" type="text" Required>
                    </div>
                     
                </div>
                <div>
                    <div class="form-group col-12">
                        <label for="firstname">Intro Text</label>
                        <textarea  name="introtextckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                       
                    </div>
                    <div class="form-group col-12">
                        <label for="firstname">Details</label>
                        <textarea  name="detailckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                       
                    </div>
                        

                      
                       
                      
                    
                    
                      <input class="btn btn-primary" type="submit" name="addmember" value="+AddNews">
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

