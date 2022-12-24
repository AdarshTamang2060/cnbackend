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
$consultancydata=$db->CustomQuery("SELECT * FROM consultancies WHERE id='$id'");

foreach($consultancydata as $data):

 

 ?>
 
<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
             
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=$base_url;?>addconsultancy" class="link">Add Consultancy</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>showconsultancy" class="link">Display Consultancy</a></li>
                </ol>
            </nav>
          </div>
        
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New consultancy</h4>  
                  <form class="cmxform" name="addmember" id="signupForm" method="post" action="<?=$base_url;?>database/actions/consultancy/edit.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <fieldset>
                        <input hidden type="number" name="consultancy_id" value=<?=$id?>>
                    <div class="row">
                    <div class="col-4">
                    <label for="exampleFormControlSelect1">Select Province</label>
                    <select class="form-control" name="province" id="province">
                      <option value="">--------------Select Province-------------------------</option>
                      <?php

                   
                      require_once "../../../database/tables.php";
                     
                      // $db->Update('jbjg',)
                     
                      $pr_data = $db->SelectAll("{$province_table}");
                      foreach ($pr_data as $datas) {
                      ?>
                        <option value="<?=$datas->id?>" <?=
                      ($datas->id==$data->Province)?"selected":""?>><?= $datas->Province_name ?></option>

                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-4">
                    <label for="exampleFormControlSelect1">Select District</label>
                    <select class="form-control" name="district" id="district" >
                    <?php
                    $pr_data = $db->SelectAll("{$district_table}");
                    foreach ($pr_data as $datas) {
                    ?>
                      <option value="<?=$datas->id?>" <?=
                    ($datas->id==$data->District)?"selected":""?>><?= $datas->district_name ?></option>

                    <?php } ?>
                  
                    </select>
                  </div>
                  <div class="col-4 mb-2">
                    <label for="exampleFormControlSelect1">Select City</label>
                    <select class="form-control" name="city" id="city">
                    <?php
                    $pr_data = $db->SelectAll("{$city_table}");
                    foreach ($pr_data as $datas) {
                    ?>
                      <option value="<?=$datas->id?>" <?=
                    ($datas->id==$data->City)?"selected":""?>><?= $datas->city?></option>

                    <?php } ?>
                  

                   
                    </select>
                  </div>
                           <div class="form-group col-4">
                           <label for="firstname">Date</label>
                                
                                    <input type="date" class="form-control" name="date" value="<?=$data->date;?>">
                                    <span class="input-group-addon input-group-append border-left">
                                     
                                    </span>
                               
                            </div>
                           <div class="form-group col-4 mt-2">
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
                            <div class="form-group col-4">
                            <label for="firstname">Consultancy location</label>
                            <input id="firstname" class="form-control" name="consultancy_location" value="<?=$data->consultancy_location;?>" type="text" Required>
                        </div>
                           
                    </div>
                      
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="firstname">Consultancy Name</label>
                            <input id="firstname" class="form-control" name="consultancy_name" value="<?=$data->consultancy_name;?>" type="text" Required>
                        </div>
                        <div class="form-group col-4">
                        <label for="exampleSelectGender">Consultancy Slug</label>
                        <input id="firstname" class="form-control" name="consultancy_slug" value="<?=$data->consultancy_slug;?>" type="text" Required>
                        </div>
                        <div class="form-group col-4">
                        <label for="exampleSelectGender">Nick Name</label>
                        <input id="firstname" class="form-control" name="nickname" value="<?=$data->nickname;?>" type="text" Required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">Consultancy Email</label>
                            <input id="firstname" class="form-control" name="consultancy_email" value="<?=$data->consultancy_email;?>" type="email" Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Consultancy Address</label>
                        <input id="firstname" class="form-control" name="consultancy_address" value="<?=$data->consultancy_address;?>" type="text" Required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">Consultancy Phone</label>
                            <input id="firstname" class="form-control" name="consultancy_phone" value="<?=$data->consultancy_phone;?>" type="number" Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Consultancy Mobail</label>
                        <input id="firstname" class="form-control" name="consultancy_mobile" value="<?=$data->consultancy_mobile;?>" type="number" Required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">Consultancy Fax</label>
                            <input id="firstname" class="form-control" name="consultancy_fax" value="<?=$data->consultancy_fax;?>" type="text" Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Consultancy postbox</label>
                        <input id="firstname" class="form-control" name="consultancy_post_box" value="<?=$data->consultancy_post_box;?>" type="text" Required>
                        </div>
                    </div>
                     
                     
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">consultany Website</label>
                            <input id="firstname" class="form-control" name="consultancy_website"  type="text" value="<?=$data->consultancy_website;?>" Required>
                        </div>
                         <div class="col-lg-4 grid-margin stretch-card mt-3">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title d-flex">Image
                            <small class="ml-auto align-self-end">
                            </small>
                          </h4>
                          <input hidden type="text" name="img_url" value="<?=$data->consultancy_logo;?>">
                          <input type="file" name="consultancyimage" class="dropify"  />
                        </div>
                      </div>
                  </div>
              </div>
                  <div class="form-group col-12">
                        <label for="firstname">Meta Title</label>
                        <textarea  name="consultancy_meta_title" id="summary" style="resize: none;" class="form-control" rows="5" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"><?=$data->consultancy_meta_title;?></textarea>
                        </div>
                   
                    <div class="form-group col-12">
                        <label for="firstname">Meta Description</label>
                        <textarea  name="consultancy_meta_description" id="summary" style="resize: none;"  class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"><?=$data->consultancy_meta_description;?></textarea>
                    </div>
                    <div class="form-group col-12">
                        <label for="firstname">Intro Text</label>
                        <textarea  name="introtextckediter" id="summary" style="resize: none;"  class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2" ><?=$data->consultancy_intro_text;?></textarea>
                        </div>
                    </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="firstname">Details</label>
                        <textarea  name="detailckediter" id="summary" style="resize: none;"   class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"><?=$data->consultancy_description;?></textarea>
                     
                    </div>
                    </div>
                      <input class="btn btn-primary mt-3" type="submit" name="addmember" value="Submit">
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