  <!--header start-->
  <?php  session_start();  
 include "../pathforeditview/header.php";?>
<!--header close-->

<!--aside start-->
<?php include "../pathforeditview/aside.php";?>
<!--aside End-->
<?php

require_once "../../../database/database.php";
require_once "../../../database/tables.php";
$id=$_GET["id"];
$db = Database::Instance();
$countrycontent=$db->CustomQuery("SELECT * FROM country_contents where country_id={$_GET['id']}");

 ?>

<!-- main start-->
 
 <div class="main-panel">
        <div class="content-wrapper">
        <?php
                  //messaage include
                  // include("message.php");
                  include("../../../infos/message.php")
              ?>
          <div class="page-header">
            <h3 class="page-title">
              Show Content
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=$base_url;?>" class="link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>addcountry" class="link">Add Country</a></li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">show content</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($countrycontent as $data){?>
                        <tr>
                            <td><?=$data->id;?></td>
                            <td><?=$data->title;?></td>
                            <td><?=$data->date;?></td>
                            <td><?=$data->status;?></td>
                            <td> </td>
                             
                            <td>
                             
                              <a href="#"  class="link"><button class="btn btn-outline-primary"> <i class="fa-sharp fa-solid fa-pen-to-square"></i></button></a>
                              <a href="#" data-did="<?=$data->id?>" class="link btn btn-outline-primary delete-cc"><i class="fa-solid fa-trash"></i></a>
                                  </td>
                        </tr>
                        <?php }?>
                        
                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
 
<!-- main end -->

 
<!--footer start-->
<?php include "../pathforeditview/footer.php";?>
<!--footer end-->



