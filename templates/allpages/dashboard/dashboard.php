 <!--header start-->
<?php
 
 include "templates/layout/header.php";?>
 <!--header close-->
 <style>.container-fluid{
  display:flex;
  justify-content:space-between;
 
 
  
  
  
 
}
.container-fluid .dashboard-box{
  background-color:white;
  height:130px;
  width:350px;
  border-radius:3px;
  display:flex;
   
}
.container-fluid .dashboard-box .box{
  display:flex;
  flex-direction:column;
}
.container-fluid .dashboard-box .box li{
  list-style:none;
  padding:10px;
  font-size:30px;
  font-family:Helvetica;
  color:#1C2833;

}
 
.fa-user{
  margin-top:30px;
  font-size:70px;
  margin-right:20px;
  color:#1C2833;
}
.flag-d{
  margin-top:30px;
  font-size:70px;
  margin-right:20px;
  color:#1C2833;

}
.blog{
  margin-top:30px;
  font-size:70px;
  margin-right:20px;
  color:#1C2833;

}</style>
 
 <!--aside start-->
 <?php include "templates/layout/aside.php";?>
 <!--aside End-->
 <?php

require_once "database/database.php";
$db = Database::Instance();
$country=$db->CustomQuery("SELECT COUNT(*) as countrycount FROM countries");
$admin=$db->CustomQuery("SELECT COUNT(*) as admincount FROM admins");
$consultancy=$db->CustomQuery("SELECT COUNT(*) as  consultancycount FROM consultancies");
$blog=$db->CustomQuery("SELECT COUNT(*) as  blogcount FROM contents");
$news=$db->CustomQuery("SELECT COUNT(*) as  newscount FROM news");
$countrycontent=$db->CustomQuery("SELECT COUNT(*) as  countrycontentcount FROM country_contents");




?>
 <!-- main start-->
  
 <div class="main-panel">
         <div class="content-wrapper">
         
            <div class="page-header">


            <div class="container-fluid">
                <div class="dashboard-box">
                   <div class="box">
                    <li><?=$admin[0]->admincount;?></li>
                    <li>Admin</li>
                    </diV>
                    <div class="box1">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    </diV>
                    

                </div>
                <div class="dashboard-box">
                   <div class="box">
                    <li><?=$country[0]->countrycount;?></li>
                    <li>Country</li>
                    </diV>
                    <div class="box1">
                    <span class="icon"><i class="fa-solid fa-flag  flag-d"></i></span>
                    </diV>
                    

                </div>
               
                <div class="dashboard-box">
                   <div class="box">
                    <li><?=$consultancy[0]->consultancycount;?></li>
                    <li>Consultancy</li>
                    </diV>
                    <div class="box1">
                    <span class="icon"><i class="fa-solid fa-flag flag-d"></i></span>
                    </diV>
                    

                </div>
                

                </div>
                
             </div>
             <div class="container-fluid">
                <div class="dashboard-box">
                   <div class="box">
                    <li><?=$blog[0]->blogcount;?></li>
                    <li>Blog</li>
                    </diV>
                    <div class="box1">
                    <span class="icon"><i class="fa-regular fa-newspaper blog"></i></span>
                    </diV>
                    

                </div>
                <div class="dashboard-box">
                   <div class="box">
                    <li><?=$news[0]->newscount;?></li>
                    <li>News</li>
                    </diV>
                    <div class="box1">
                    <span class="icon"><i class="fa-regular fa-newspaper blog"></i></span>
                    </diV>
                    

                </div>
                <div class="dashboard-box">
                   <div class="box">
                    <li><?=$countrycontent[0]->countrycontentcount;?></li>
                    <li>Contents</li>
                    </diV>
                    <div class="box1">
                    <span class="icon"><i class="fa-solid fa-flag flag-d"></i></span>
                    </diV>
                    

                </div>
                
                 
                

                </div>
                
             </div>
             
              
            
             
             </div>
           </div>
         </div>
  
  
 <!-- main end -->
 
 
 <!--footer start-->
 <?php include "templates/layout/footer.php";?>
 <!--footer end-->
 
 