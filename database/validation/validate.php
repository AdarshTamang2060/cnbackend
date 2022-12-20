<?php 
class validation{

    function checkempty($alldata){
     //   $c=1;

       foreach($alldata as $data):
<<<<<<< HEAD
      // $c=0;
=======
     // $c=0;
>>>>>>> 14ed452805e2fc310b97517c509d51a373e9317e
      if(empty($data)){

        $message="Required all field";
        return true;

      }
      //$c=$c+1;
    endforeach;

    }
    function checkcpass($password,$cpassword){
         if($password!=$cpassword){
            return true;
         }

    }
    function checkemail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             return true;
          }
    }

}

?>