<!--header start-->
<?php 
 
include "templates/layout/header.php";?>
<!--header close-->

<!--aside start-->
<?php include "templates/layout/aside.php";?>
<!--aside End-->
<?php

require_once "database/database.php";
require_once "database/tables.php";
$db = Database::Instance();
 
$country_data=$db->SelectAll("{$country_table}");

 ?>

<!-- main start-->
 
 <div class="main-panel">
        <div class="content-wrapper">
        <?php
                  //messaage include
                  // include("message.php");
                  include("infos/message.php")
              ?>
          <div class="page-header">
            <h3 class="page-title">
              Show Country
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
              <h4 class="card-title">show mail</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>SN</th>
                            <th>CountryName</th>
                            <th>Order</th>
                            <th>Feature</th>
                            <th>IsHome</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($country_data as $data){?>
                        <tr>
                            <td><?=$data->id;?></td>
                            <td><?=$data->country_name;?>
                          <hr>
<<<<<<< HEAD
                         <a href="<?=$base_url;?>templates/allpages/country/country-content-list.php?id=<?=$data->id?>" class="link">
                         <?php
                       
                         $counts=$db->CustomQuery("SELECT COUNT(*) as count FROM country_contents WHERE country_id={$data->id}");
                              
                         ?>
                         showcontent &nbsp;<?=$counts[0]->count;?></a>
=======
                         <a href="<?=$base_url;?>templates/allpages/country/country-content-list.php?id=<?=$data->id?>" class="link"> showcontent</a>
>>>>>>> 2e4f6df8c62d2a805d6e5dee2fb39447d3f7f7a9
                          </td>
                            <td><?=$data->order_number;?></td>
                            <td><?=$data->featured;?></td>
                            <td><?=$data->is_home;?></td>
                             
                            <td>
                               
                              <a href="<?=$base_url;?>templates/allpages/country/editcountry.php?id=<?=$data->id?>"  class="link"><button class="btn btn-outline-primary"> <i class="fa-sharp fa-solid fa-pen-to-square"></i></button></a>
                              <a href="#" data-did="<?=$data->id?>" class="link btn btn-outline-primary delete-country"><i class="fa-solid fa-trash"></i></a>
<<<<<<< HEAD
                              <a href="<?=$base_url;?>templates/allpages/country/consultancylist.php" class="link"><button class="btn btn-outline-primary">+add consultancy</button></a>
=======
                              <a href="<?=$base_url;?>templates/allpages/country/consultancylist.php?id=<?=$data->id;?>" class="link"><button class="btn btn-outline-primary">+add consultancy</button></a>
>>>>>>> 2e4f6df8c62d2a805d6e5dee2fb39447d3f7f7a9
                              <a href="<?=$base_url;?>templates/allpages/country/add_content.php?id=<?=$data->id?>" class="link"><button class="btn btn-outline-primary">+add contents</button></a>
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
         
      </div>
      <!-- main-panel ends -->
 
       
 
  
 
<!-- main end -->


<!--footer start-->
<?php include "templates/layout/footer.php";?>
<!--footer end-->

