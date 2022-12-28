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
require_once "../../../database/tables.php";
$id=$_GET["id"];
$db = Database::Instance();
$pagesdata=$db->CustomQuery("SELECT * FROM pages WHERE id='$id'");

foreach($pagesdata as $pages):

 

 ?>
 
 
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
                  <h4 class="card-title">Add New Pages</h4>  
                  <form class="cmxform" name="addmember" id="signupForm" method="post" action="<?=$base_url;?>database/actions/pages/edit.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <fieldset>
                        <input hidden type="number" name="id" value="<?=$id?>">
                        
                    <div class="row">
                        <div class="form-group col-6">
                                <label for="firstname">Title</label>
                                <input id="firstname" class="form-control" name="title" value="<?=$pages->title;?>" type="text" Required>
                        </div>
                        <div class="form-group col-6">
                            <label for="firstname">Slug</label>
                            <input id="firstname" class="form-control" name="slug" value="<?=$pages->slug;?>" type="text" Required>
                        </div>
                           
                        </div>
                  
                      <div class="row">
                        
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Pages Type</label>
                            <select class="form-control" name="page_type" id="exampleSelectGender" Required>
                              <option>----------------------------------Select Option-----------------------------------</option>
                              <?php 
                              
                              $page_type=$db->SelectAll("{$page_type_table}");
                              foreach($page_type as $data){
                             
                              ?>
                            <option value="<?=$data->id;?>" <?=($data->id==$pages->page_type_id)?"selected":""?>><?=$data->title;?></option>
                            
                            <?php } ?>
                            </select>
                        </div> 
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Status</label>
                            <select class="form-control" name="status" id="exampleSelectGender" Required>
                            <?php if($pages->status=="1"){
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
                        <textarea name="meta_title" id="meta_description1"  class="form-control" rows="8" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"><?=$pages->meta_title;?></textarea>
                        </div>
                        <div class="form-group col-6">
                        <label for="firstname">Meta Discription</label>
                        <textarea name="meta_description" id="meta_description1"  class="form-control" rows="8" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"><?=$pages->meta_description;?></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4  grid-margin stretch-card mt-3">
                        <div class="card">
                        <div class="card-body">
                          <h4 class="card-title d-flex">Image
                            <small class="ml-auto align-self-end">
                            </small>
                          </h4>
                          <input hidden type="text" name="img_url" value="<?=$pages->image;?>">
                          <input type="file" name="pageimage" class="dropify" />
                        </div>
                      </div>
                    </div>
 
                 
                    <div class="form-group col-12">
                        <label for="firstname">Intro Text</label>
                        <textarea  name="introtextckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"><?=$pages->intro_text;?></textarea>
                        </div>
                   
                
                        
                    <div class="form-group col-12">
                        <label for="firstname">Detail</label>
                        <textarea  name="detailckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"><?=$pages->description;?></textarea>
                        </div>
                    </div>
                      

                      
                       
                      
                    
                    
                      <input class="btn btn-primary" type="submit" name="addmember" value="+Update Pages">
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