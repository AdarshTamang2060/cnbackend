<?php
 
$base_url="http://localhost/cnbackend/";

$url = explode('/', $_SERVER['REQUEST_URI']);
// print_r($url);
 

 
 

 
    
    if ($url[2] == '') {
        $title="Dashboard";
        include('templates/allpages/loginpage/login.php');
        
    }  
    elseif($url[2]== 'dashboard'){
        $title="Dashboard";
        include('templates/allpages/dashboard/dashboard.php');
        
    }
    elseif($url[2]== 'consultancydashboard'){
        $title="consultancydashboard";
        include('templates/consultancydashboard/dashboard.php');
        
    }
    elseif($url[2]== 'createadmin'){
        $title="Create Admin";
        include('templates/allpages/superadmin/createadmin.php');
    }
    elseif($url[2]== 'showadmin'){
        $title="Show Admin";
        include('templates/allpages/superadmin/showadmin.php');
    }
    elseif($url[2]== 'addcountry'){
        $title="Add Country";
        include('templates/allpages/country/addcountry.php');
    }
    elseif($url[2]== 'showcountry'){
        $title="Show Country";
        include('templates/allpages/country/showcountry.php');
    }
    elseif($url[2]== 'mail'){
        $title="Show Mail";
        include('templates/allpages/mail/mail.php');
    }
    elseif($url[2]== 'addconsultancy'){
        $title="Add Consultancy";
        include('templates/allpages/consultancy/addconsultancy.php');
    }
    elseif($url[2]== 'showconsultancy'){
        $title="Show Consultancy";
        include('templates/allpages/consultancy/showconsultancy.php');
    }
    elseif($url[2]== 'addcontent'){
        $title="Add content";
        include('templates/allpages/content/addcontent.php');
    }
    elseif($url[2]== 'showcontent'){
        $title="Show Content";
        include('templates/allpages/content/showcontent.php');
    }
    elseif($url[2]== 'addaboutus'){
        $title="Add Aboutus";
        include('templates/allpages/aboutus/addaboutus.php');
    }
    elseif($url[2]== 'showaboutus'){
        $title="Show Aboutus";
        include('templates/allpages/aboutus/showaboutus.php');
    }
    elseif($url[2]== 'addnews'){
        $title="Add News";
        include('templates/allpages/news/addnews.php');
    }
    elseif($url[2]== 'shownews'){
        $title="Show News";
        include('templates/allpages/news/shownews.php');
    }
    elseif($url[2]== 'addfaq'){
        $title="Add Faq";
        include('templates/allpages/faq/addfaq.php');
    }
    elseif($url[2]== 'showfaq'){
        $title="Show Faq";
        include('templates/allpages/faq/showfaq.php');
    }
    elseif($url[2]== 'showcfaq'){
        $title="Show Faq";
        include('templates/allpages/faq/showcountryfaq.php');
    }
    elseif($url[2]== 'addtestimonial'){
        $title="Add Testimonial";
        include('templates/allpages/testimonial/addtestimonial.php');
    }
    elseif($url[2]== 'showtestimonial'){
        $title="Show Testimonial";
        include('templates/allpages/testimonial/showtestimonial.php');
    }
    elseif($url[2]== 'addbanner'){
        $title="Add Banner";
        include('templates/allpages/banner/addbanner.php');
    }
    elseif($url[2]== 'showbanner'){
        $title="Show Banner";
        include('templates/allpages/banner/showbanner.php');
    }
    elseif($url[2]== 'addpagetype'){
        $title="Add pagetype";
        include('templates/allpages/pagetype/addpagetype.php');
    }
    elseif($url[2]== 'showpagetype'){
        $title="Show pagetype";
        include('templates/allpages/pagetype/showpagetype.php');
    }
    elseif($url[2]== 'addpages'){
        $title="Add pages";
        include('templates/allpages/pages/addpages.php');
    }
    elseif($url[2]== 'showpages'){
        $title="Show Pages";
        include('templates/allpages/pages/showpages.php');
    }
    elseif($url[2]== 'addtestprepration'){
        $title="Add Testprepration";
        include('templates/allpages/testprepration/addtestprepration.php');
    }
    elseif($url[2]== 'showtestprepration'){
        $title="Show testPrepration";
        include('templates/allpages/testprepration/showtestprepration.php');
    }
    elseif($url[2]== 'addevents'){
        $title="Add Events";
        include('templates/allpages/events/addevents.php');
    }
    elseif($url[2]== 'showevents'){
        $title="Show Events";
        include('templates/allpages/events/showevents.php');
    }
 
    ?>