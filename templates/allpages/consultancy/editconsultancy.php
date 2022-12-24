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
                  <form class="cmxform" name="addmember" id="signupForm" method="post" action="action.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <fieldset>
                        
                    <div class="row">
                           <div class="form-group col-6">
                           <label for="firstname">Date</label>
                                
                                    <input type="date" class="form-control" value=<?=$data->date;?>>
                                    <span class="input-group-addon input-group-append border-left">
                                     
                                    </span>
                               
                            </div>
                           <div class="form-group col-6 mt-2">
                            <label for="exampleSelectGender">Status</label>
                                <select class="form-control" name="status" value=<?=$data->status;?> id="exampleSelectGender" Required>
                                <option>Public</option>
                                <option>Draft</option>
                                </select>
                            </div> 
                           
                    </div>
                      
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="firstname">Consultancy Name</label>
                            <input id="firstname" class="form-control" name="firstname"value=<?=$data->consultancy_name;?> type="text" Required>
                        </div>
                        <div class="form-group col-4">
                        <label for="exampleSelectGender">Consultancy Slug</label>
                        <input id="firstname" class="form-control" name="firstname" value=<?=$data->consultancy_slug;?> type="text" Required>
                        </div>
                        <div class="form-group col-4">
                        <label for="exampleSelectGender">Nick Name</label>
                        <input id="firstname" class="form-control" name="nickname" type="text" Required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">Consultancy Email</label>
                            <input id="firstname" class="form-control" name="firstname" value=<?=$data->consultancy_email;?> type="text" Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Consultancy Address</label>
                        <input id="firstname" class="form-control" name="firstname" value=<?=$data->consultancy_address;?> type="text" Required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">Consultancy Phone</label>
                            <input id="firstname" class="form-control" name="firstname" value=<?=$data->consultancy_phone;?> type="text" Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Consultancy Mobail</label>
                        <input id="firstname" class="form-control" name="firstname" value=<?=$data->consultancy_mobile;?> type="text" Required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">Consultancy Fax</label>
                            <input id="firstname" class="form-control" name="firstname" value=<?=$data->consultancy_fax;?> type="text" Required>
                        </div>
                        <div class="form-group col-6">
                        <label for="exampleSelectGender">Consultancy postbox</label>
                        <input id="firstname" class="form-control" name="firstname" value=<?=$data->consultancy_post_box;?> type="text" Required>
                        </div>
                    </div>
                     
                     
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstname">consultany Website</label>
                            <input id="firstname" class="form-control" name="firstname" value=<?=$data->consultancy_website;?> type="text" Required>
                        </div>
                         <div class="col-lg-4 grid-margin stretch-card mt-3">
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
              </div>
                  <div class="form-group col-12">
                        <label for="firstname">Meta Title</label>
                        <textarea  name="intro_text" id="summary" style="resize: none;" value=<?=$data->consultancy_meta_title;?> class="form-control" rows="5" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                        </div>
                   
                    <div class="form-group col-12">
                        <label for="firstname">Meta Description</label>
                        <textarea  name="intro_text" id="summary" style="resize: none;" value=<?=$data->consultancy_meta_description;?> class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                    </div>
                    <div class="form-group col-12">
                        <label for="firstname">Intro Text</label>
                        <textarea  name="introtextckediter" id="summary" style="resize: none;" value=<?=$data->consultancy_intro_text;?> class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="firstname">Details</label>
                        <textarea  name="detailckediter" id="summary" style="resize: none;" value=<?=$data->consultancy_description;?> class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                     
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
