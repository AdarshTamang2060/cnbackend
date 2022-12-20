<?php
// session_start();
if(isset($_SESSION['message'])){
   echo  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>👍👍success</strong> {$_SESSION['message']}.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  </div>";

  session_unset();
}
if(isset($_SESSION['messages'])){
  echo  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>🥴Error🥴</strong> {$_SESSION['messages']}.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span>
</button>
  </div>";

  session_unset();
}




?>