<!--header start-->
<?php  session_start();
include "templates/layout/header.php";?>
<!--header close-->

<!--aside start-->
<?php include "templates/layout/aside.php";?>
<!--aside End-->

<!-- main start-->
<?php

require_once "database/database.php";
require_once "database/tables.php";
$db = Database::Instance();
$faqs_data=$db->SelectAll("{$country_faq_table}");

 ?>
 <div class="main-panel">
        <div class="content-wrapper">
        <?php
        
        //messaage include
        // include("message.php");
        include("infos/message.php")
    ?>
          <div class="page-header">
            <h3 class="page-title">
              Show news
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=$base_url;?>" class="link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>addnews" class="link">Add News</a></li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Show News</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>SN</th>
                            <th>Faq Of</th>
                            <th>Question</th>
                            <th>Answer</th>
                           
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        foreach($faqs_data as $data):
                        ?>

                        <tr>
                            <td><?=$data->id;?></td>
                            <td>
                                <?php
                                $cname=$db->SelectByCriteria($country_table,'country_name','id',[$data->faq_of]);
                                echo $cname[0]->country_name;
                                ?>
                               
                        
                        </td>
                            <td><?=$data->question;?></td>
                            <td><?=$data->answer;?></td>
                            
                             
                            <td>
                              <a href="" class="link"><button class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                              <a href="<?=$base_url;?>templates/allpages/faq/editcountryfaq.php?id=<?=$data->id;?>" class="link"><button class="btn btn-outline-primary"> <i class="fa-sharp fa-solid fa-pen-to-square"></i></button></a>
                              <a href="#" data-did="<?=$data->id;?>" class="link btn btn-outline-primary del-cfaq"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        
                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
 
       
 
  
 
<!-- main end -->


<!--footer start-->
<?php include "templates/layout/footer.php";?>
<!--footer end-->

