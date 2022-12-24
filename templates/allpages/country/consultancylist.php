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
$db = Database::Instance();
$consultancy_list=$db->CustomQuery("SELECT * FROM consultancies");
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
                  <h4 class="card-title">Consultancy list</h4>
                  <?php
                  foreach($consultancy_list as $list){

                  ?>

                        <label class="container"><?=$list->consultancy_name;?>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        </label>
                        <?php 
                  }
                        ?>

                
                </div>
              </div>
            </div>
          </div>
        </div>
 
<!-- main end -->


 

<!--footer start-->
<?php include "../pathforeditview/footer.php";?>
<!--footer end-->


