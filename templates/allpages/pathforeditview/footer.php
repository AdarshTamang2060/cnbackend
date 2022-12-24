 
        <!-- partial -->
        </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
 

  <!-- plugins:js -->
 
  <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>  
  <script>
          CKEDITOR.replace( 'introtextckediter' );
          CKEDITOR.replace( 'detailckediter' );
          CKEDITOR.replace( 'metadiscriptionckediter' );
 </script>   
  <script src="https://code.jquery.com/jquery-3.6.2.slim.min.js" integrity="sha256-E3P3OaTZH+HlEM7f1gdAT3lHAn4nWBZXuYe89DFg2d0=" crossorigin="anonymous"></script>  
 <script>
 $(document).ready(function () {
  $(document).on("click", ".delete-cc", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "../../../database/actions/country/delete_cc.php",
        type: "POST",
        data: {
          did: did,
        },
        
        success: function (data) {
          var n = data.trim();
          console.log(n
          )
          if (n==='1') {
            // console.log(data)
            $(elem).closest("tr").fadeOut();
          } else {
            $("#error-msg").html("cant delete records.").slideDown();
            $("#success-msg").slideUp();
          }
        },
      });
    }
  });
 });
 </script>             
  <script src="../../../assets/js/data-table.js"></script>
  <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="../../../assets/js/data-table.js"></script>
  <script src="../../../assets/js/off-canvas.js"></script>
  <script src="../../../assets/js/hoverable-collapse.js"></script>
  <script src="../../../assets/js/misc.js"></script>
  <script src="../../../assets/js/settings.js"></script>
  <script src="../../../assets/js/todolist.js"></script>
  <script src="../../../assets/js/dashboard.js"></script>
  <script src="../../../assets/js/formpickers.js"></script>
  <script src="../../../assets/js/form-addons.js"></script>
  <script src="../../../assets/js/x-editable.js"></script>
  <script src="../../../assets/js/dropify.js"></script>
  <script src="../../../assets/js/dropzone.js"></script>
  <script src="../../../assets/js/jquery-file-upload.js"></script>
  <script src="../../../assets/js/formpickers.js"></script>
  <script src="../../../assets/js/form-repeater.js"></script>
   
  <!-- End custom js for this page-->
   <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
</body>


</html>
