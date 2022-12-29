<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
           
          <li class="nav-item">
            <a class="nav-link" href="<?=$base_url;?>dashboard">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
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
              <span class="menu-title"> dsfs</span>
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
         
         
          
          
         
       
        </ul>
      </nav>
      <!-- partial -->