<?php
 include "../../../index.php";
?>
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
           
          <li class="nav-item">
            <a class="nav-link" href="<?=$base_url;?>">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Admin" aria-expanded="false" aria-controls="Admin">
            <i class="fa-solid fa-users-line"></i>&nbsp;&nbsp;&nbsp; 
              <span class="menu-title">Admin</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Admin">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>createadmin">Add Admin</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>showadmin">Show Admin</a></li>
                 </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$base_url;?>mail">
            <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Mail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="fa-sharp fa-solid fa-flag"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Country</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>Addcountry">Add country</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>showcountry">Show country</a></li>
                 </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#consultancy" aria-expanded="false" aria-controls="consultancy">
            <i class="fa-solid fa-folder"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Consultancy</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="consultancy">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>addconsultancy">Add consultancy</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>showconsultancy">Show consultancy</a></li>
 
                
                 </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
            <i class="fa-solid fa-folder"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">content</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>addcontent">add content</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>showcontent">show content</a></li>
 
                 
 
               </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#testpreparation" aria-expanded="false" aria-controls="testpreparation">
            <i class="fa-sharp fa-solid fa-globe"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Test Preparation&nbsp;</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="testpreparation">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>addtestprepration">Add</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>showtestprepration">Show</a></li>
                 </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Events" aria-expanded="false" aria-controls="Events">
            <i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Events</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="Events">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>addevents">Add events</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>showevents">Show events</a></li>
                 </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="fa-sharp fa-solid fa-address-card"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">About us</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?=$base_url;?>addaboutus">Add aboutus</a></li>                
                <li class="nav-item"><a class="nav-link" href="<?=$base_url;?>showaboutus">Show aboutus</a></li>
                 </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
            <i class="fa-solid fa-newspaper"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">News</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?=$base_url;?>addnews">Add news</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=$base_url;?>shownews">Show news</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="fa-solid fa-circle-question"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Faq</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>addfaq">Add Faq</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>showfaq">Show Faq</a></li>
                </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="fa-solid fa-text-width"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Testimonial</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>addtestimonial">Add testimonail</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>showtestimonial">Show testimonail</a></li>
                 </ul>
            </div>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
            <i class="fa-solid fa-image"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Banner</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>addbanner">Add banner</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url?>showbanner">show banner</a></li>
                 </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
            <i class="fa-solid fa-file"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Page Type</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>addpagetype">Add pagetype</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>showpagetype">Show pagetype</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pages" aria-expanded="false" aria-controls="pages">
            <i class="fa-solid fa-file"></i>&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>addpages">Add pages</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=$base_url;?>showpages">Show pages</a></li>
              </ul>
            </div>
          </li>
          
         
       
        </ul>
      </nav>
      <!-- partial -->