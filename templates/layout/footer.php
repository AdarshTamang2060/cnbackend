 
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

  ///admin delete ajax
  $(document).on("click", ".delete-admin", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/superadmin/delete-admin.php",
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
  ///Country delete ajax
  $(document).on("click", ".delete-country", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/country/delete-country.php",
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

  //content delete 
  $(document).on("click", ".delete-content", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/content/delete.php",
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
  //test-prep delete 
  $(document).on("click", ".delete-test", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/test-preparation/delete.php",
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


  //mail delete 
  $(document).on("click", ".delete-mail", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/mail/delete.php",
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

  //Page type delete 
  $(document).on("click", ".delete-pagetype", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/pagetype/delete.php",
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

  // Event  delete 
  $(document).on("click", ".delete-events", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/events/delete.php",
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

  //Page delete 
  $(document).on("click", ".delete-page", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/pages/delete.php",
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
  //Consultancy delete 
  $(document).on("click", ".delete-cons", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/consultancy/delete.php",
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
  //News delete 
  $(document).on("click", ".delete-news", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/news/delete.php",
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
  //testiminial delete 
  $(document).on("click", ".delete_te", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/testimonial/delete.php",
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
  //about delete 
  $(document).on("click", ".delete_about", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/aboutus/delete.php",
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
  //about delete 
  $(document).on("click", ".del-faq", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/faqs/delete.php",
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
  //Country Content delete 
  $(document).on("click", ".delete-cc", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/country/delete_cc.php",
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
  //faq c delete 
  $(document).on("click", ".del-cfaq", function () {
    console.log('hello');
    if (confirm("Do you really want to delete this record?")) {
      var did = $(this).data("did");
      var elem = this;
      // alert(did);
      $.ajax({
        url: "./database/actions/faqs/delete_cfaq.php",
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


  //dependent search province district
  $(document).on("change", "#province", function () {
    console.log('hello');
    // if (confirm("Do you really want to delete this record?")) {
      var value = $(this).val();
      // var elem = this;
      console.log(value)
      // alert(did);
      $.ajax({
        url: "./database/actions/loader/load_district.php",
        type: "POST",
        data: {
          pid: value,
        },
        success: function (data) {
            $("#district").html(data);
            $("#city").html("");
        },
      });
    // }
  });
  
  //dependent search city district
  $(document).on("change", "#district", function () {
    console.log('hello');
    // if (confirm("Do you really want to delete this record?")) {
      var value = $(this).val();
      // var elem = this;
      console.log(value)
      // alert(did);
      $.ajax({
        url: "./database/actions/loader/load_city.php",
        type: "POST",
        data: {
          did: value,
        },
        success: function (data) {
            $("#city").html(data)
        },
      });
    // }
  });

 });
 </script>

  <script src="assets/js/data-table.js"></script>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="assets/js/data-table.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/formpickers.js"></script>
  <script src="assets/js/form-addons.js"></script>
  <script src="assets/js/x-editable.js"></script>
  <script src="assets/js/dropify.js"></script>
  <script src="assets/js/dropzone.js"></script>
  <script src="assets/js/jquery-file-upload.js"></script>
  <script src="assets/js/formpickers.js"></script>
  <script src="assets/js/form-repeater.js"></script>
   
  <!-- End custom js for this page-->
   <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
</body>


</html>
