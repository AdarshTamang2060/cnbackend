<!--header start-->
<?php include "templates/layout/header.php";?>
<!--header close-->

<!--aside start-->
<?php include "templates/layout/aside.php";?>
<!--aside End-->

<!-- main start-->
 
<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
             
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=$base_url;?>" class="link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?=$base_url;?>showfaq" class="link">Display Faq</a></li>
                </ol>
            </nav>
          </div>
        
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Faq</h4>  
                  <form class="cmxform" name="addmember" id="signupForm" method="post" action="action.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <fieldset>
                        
                    <div>
                     <div class="form-group col-12">
                            <label for="firstname">Question</label>
                            <input id="firstname" class="form-control" name="firstname" type="text" Required>
                    </div>
                    </div>
                   
               
                    <div class="form-group col-12">
                        <label for="firstname">Answer</label>
                        <textarea  name="detailckediter" id="summary" style="resize: none;" class="form-control" rows="6" data-gramm="false" wt-ignore-input="true" data-quillbot-element="IMpuXxEePO7giRtfkYfZ2"></textarea>
                       
                    </div>
                      <input class="btn btn-primary" type="submit" name="addmember" value="+AddFaq">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
 
 
<!-- main end -->


<!--footer start-->
<?php include "templates/layout/footer.php";?>
<!--footer end-->

