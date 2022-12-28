 <!--header start-->
 <?php    
 include "../pathforeditview/header.php";?>
<!--header close-->

<!--aside start-->
<?php include "../pathforeditview/aside.php";?>
<!--aside End-->
 
<!-- main start-->
<?php 
$id=$_GET["id"];
?>
 
<div class="main-panel">
        <div class="content-wrapper">
        
          <div class="page-header">
             
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=$base_url;?>addcountry" class="link">AddCountry</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>showcountry" class="link">Display Country</a></li>
                </ol>
            </nav>
          </div>
        
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Country</h4>  
                  <form class="cmxform" name="addmember" id="signupForm" method="post" action="<?=$base_url;?>database/actions/country/country_content.php" enctype="multipart/form-data">
                    <fieldset>
                        <input hidden type="number" value="<?=$id;?>" name="country_id" >
                    <div class="row">
                        <div class="form-group col-6">
                                <label for="firstname">Title</label>
                                <input id="firstname" class="form-control" name="country_name" type="text" Required>
                        </div>
                           <div class="form-group col-6 mt-3">
                                 
                                    <input type="date" class="form-control" name="date" >
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
                            <input id="firstname" class="form-control" name="country_slug" type="text"   Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Status</label>
                            <select class="form-control" name="status"   id="exampleSelectGender" Required>

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
                            <label for="firstname">Meta Title</label>
                            <input id="firstname" class="form-control" name="meta_title"   type="text" Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="firstname">Meta Discription</label>
                        <textarea name="meta_description" id="meta_description"   class="form-control" rows="6"  >  </textarea>
                        </div>
                        <div class="form-group col-6">
                            <label for="firstname">Video</label>
                            <input  type="text" id="firstname"   class="form-control" name="video"  >
                        </div>
                         <div class="col-lg-4 grid-margin stretch-card mt-3">
                      <div class="card">
                        <div class="card-body">
                           
                          <h4 class="card-title d-flex">Image
                            <small class="ml-auto align-self-end">
                            </small>
                          </h4>
                       
                          <input type="file" name="country-content-image"   class="dropify" />
                        </div>
                      </div>
                  </div>
                  <div class="form-group col-12">
                        <label for="firstname">Intro Text</label>
                        <textarea  name="introtextckediter" id="summary" style="resize: none;"  class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2" > </textarea>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="firstname">Details</label>
                        <textarea  name="detailckediter" id="summary"   style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"> </textarea>
                        </div>
                    </div>
            </div>
                        

                      
                       
                      
                    
                    
                      <input class="btn btn-primary" type="submit" name="Add_content" >
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
 
 
<!-- main end -->


 

<!--footer start-->
<?php include "../pathforeditview/footer.php";?>
<!--footer end-->


