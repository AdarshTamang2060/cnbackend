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
$eventsdata=$db->CustomQuery("SELECT * FROM events WHERE id='$id'");

foreach($eventsdata as $data):

 

 ?>
<div class="main-panel">
        <div class="content-wrapper">
        
          <div class="page-header">
             
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>showevents" class="link">Display Events</a></li>
                </ol>
            </nav>
          </div>
        
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Events</h4>  
                  <form class="cmxform" name="addmember" id="signupForm" method="post" action="<?=$base_url;?>database/actions/events/edit.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <fieldset>
                        <input hidden type="number" name="id" value="<?=$id?>">
                    <div class="row">
                        <div class="form-group col-6">
                                <label for="firstname">Title</label>
                                <input id="firstname" class="form-control" value="<?=$data->title;?>" name="title" type="text" Required>
                        </div>
                           <div class="form-group col-6 mt-3">
                              
                                    <input type="date" class="form-control" name="date"  value="<?=$data->date;?>">
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
                            <input id="firstname" class="form-control" name="slug" value=" <?=$data->slug;?>" type="text" Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Status</label>
                            <select class="form-control" name="status" id="exampleSelectGender" Required>
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
                            <input id="firstname" class="form-control" name="meta_title" value="<?=$data->meta_title;?>" type="text" Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="firstname">Meta Discription</label>
                        <textarea name="meta_description" id="meta_description"  class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"><?=$data->meta_description;?></textarea>
                        </div>
                        <div class="form-group col-6">
                            <label for="firstname">Video</label>
                            <input id="firstname" class="form-control" name="video"  value="<?=$data->video;?>" type="text" Required>
                        </div>
                         <div class="col-lg-4 grid-margin stretch-card mt-3">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title d-flex">Image
                            <small class="ml-auto align-self-end">
                            </small>
                          </h4>
                          <input hidden type="text" name="img_url"  value="<?=$data->image;?>">
                          <input type="file" name="eventimage" class="dropify" Required />
                        </div>
                      </div>
                  </div>
                  <div class="form-group col-12">
                        <label for="firstname">Intro Text</label>
                        <textarea  name="introtextckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"> <?=$data->intro_text;?></textarea>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="firstname">Details</label>
                        <textarea  name="detailckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"><?=$data->description;?></textarea>
                     
                    </div>
                      <input class="btn btn-primary" type="submit" name="addmember" value="Submit">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
 <?php endforeach; ?>
 
<!-- main end -->


<!--footer start-->
<?php include "../pathforeditview/footer.php";?>
<!--footer end-->

