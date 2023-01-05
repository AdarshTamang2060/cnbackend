 <!--header start-->
<?php
 
 include "templates/layout/header.php"; ?>
 <!--header close-->
 
 <!--aside start-->
 <?php include "templates/layout/aside.php"; ?>
 <!--aside End-->
 
 <!-- main start-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
 
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
           <li class="breadcrumb-item active" aria-current="page"><a href="<?= $base_url; ?>showconsultancy" class="link">Display Consultancy</a></li>
         </ol>
       </nav>
     </div>
 
     <div class="row">
       <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
             <h4 class="card-title">Add New consultancy</h4>
             <form class="cmxform" name="addmember" id="signupForm" method="post" action="database/actions/consultancy/insert.php" enctype="multipart/form-data" onsubmit="return validateForm()">
               <fieldset>
 
                 <div class="row">
                   <div class="col-4">
                     <label for="exampleFormControlSelect1">Select Province</label>
                     <select class="form-control" name="province" id="province">
                       <option value="">--------------Select Province-------------------------</option>
                       <?php
 
                       require_once "database/database.php";
                       require_once "database/tables.php";
                       $db = Database::Instance();
                       // $db->Update('jbjg',)
                      
                       $pr_data = $db->SelectAll("{$province_table}");
                       foreach ($pr_data as $data) {
                       ?>
                         <option value="<?= $data->id ?>"><?= $data->Province_name ?></option>
 
                       <?php } ?>
                     </select>
                   </div>
                   <div class="col-4">
                     <label for="exampleFormControlSelect1">Select District</label>
                     <select class="form-control" name="district" id="district" >
                     
                     </select>
                   </div>
                   <div class="col-4 mb-2">
                     <label for="exampleFormControlSelect1">Select City</label>
                     <select class="form-control" name="city" id="city">
                    
                     </select>
                   </div>
 
 
                   <div class="form-group col-6 ">
                     <label for="firstname" class="ml-1 mt-2">Date</label>
                     
                       <input type="date" name="date" class="form-control">
                        
                      
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
                   <div class="form-group col-4">
                     <label for="firstname">Consultancy Name</label>
                     <input id="firstname" class="form-control" name="consultancy_name" type="text" Required>
                   </div>
                   <div class="form-group col-4">
                     <label for="exampleSelectGender">Consultancy Slug</label>
                     <input id="firstname" class="form-control" name="consultancy_slug" type="text" Required>
                   </div>
                   <div class="form-group col-4">
                     <label for="exampleSelectGender">Nick Name</label>
                     <input id="firstname" class="form-control" name="nickname" type="text" Required>
                   </div>
                 </div>
                 <div class="row">
                   <div class="form-group col-6">
                     <label for="firstname">Consultancy Email</label>
                     <input id="firstname" class="form-control" name="consultancy_email" type="text" Required>
                   </div>
                   <div class="form-group col-6">
                     <label for="exampleSelectGender">Consultancy Address</label>
                     <input id="firstname" class="form-control" name="consultancy_address" type="text" Required>
                   </div>
                 </div>
                 <div class="row">
                   <div class="form-group col-6">
                     <label for="firstname">Consultancy Phone</label>
                     <input id="firstname" class="form-control" name="consultancy_phone" type="text" Required>
                   </div>
                   <div class="form-group col-6">
                     <label for="firstname">Consultancy Location</label>
                     <input id="firstname" class="form-control" name="consultancy_location" type="text" Required>
                   </div>
                   <div class="form-group col-6">
                     <label for="exampleSelectGender">Consultancy Mobile</label>
                     <input id="firstname" class="form-control" name="consultancy_mobile" type="text" Required>
                   </div>
                 </div>
                 <div class="row">
                   <div class="form-group col-6">
                     <label for="firstname">Consultancy Fax</label>
                     <input id="firstname" class="form-control" name="consultancy_fax" type="text" Required>
                   </div>
                   <div class="form-group col-6">
                     <label for="exampleSelectGender">Consultancy postbox</label>
                     <input id="firstname" class="form-control" name="consultancy_postbox" type="text" Required>
                   </div>
                 </div>
 
 
                 <div class="row">
                   <div class="form-group col-6">
                     <label for="firstname">consultany Website</label>
                     <input id="firstname" class="form-control" name="consultancy_website" type="text" Required>
                   </div>
                   <div class="col-lg-4 grid-margin stretch-card mt-3">
                     <div class="card">
                       <div class="card-body">
                         <h4 class="card-title d-flex">Image
                           <small class="ml-auto align-self-end">
                           </small>
                         </h4>
                         <input type="file" name="consultancyimage" class="dropify" Required />
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="form-group col-12">
                   <label for="firstname">Meta Title</label>
                   <textarea name="consultancy_meta_title" id="summary" style="resize: none;" class="form-control" rows="5" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                 </div>
 
                 <div class="form-group col-12">
                   <label for="firstname">Meta Description</label>
                   <textarea name="consultancy_meta_description" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                 </div>
                 <div class="form-group col-12">
                   <label for="firstname">Intro Text</label>
                   <textarea name="introtextckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                 </div>
           </div>
           <div class="form-group col-12">
             <label for="firstname">Details</label>
             <textarea name="detailckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
 
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
 
 
 <!-- main end -->
 
 
 <!--footer start-->
 <?php include "templates/layout/footer.php"; ?>
 <!--footer end-->