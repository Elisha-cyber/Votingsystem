<?php

     include("dbh.inc.php");

     $name = $_POST['name'];
     $mobile = $_POST['mobile'];
     $password = $_POST['password'];
     $cpassword = $_POST['cpassword'];
     $address = $_POST['address'];
     $image = $_FILES['photo']['name'];
     $tmp_name = $_FILES['photo']['tmp_name'];
     $role = $_POST['role'];

     if ($password == $cpassword) {
         # code...

         $sql = "INSERT INTO users(name,mobile,address,password,photo,role,status,votes) VALUES('$name','$mobile','$address','$password','$image','$role',0,0);";

         move_uploaded_file($tmp_name, "../uploads/$image");
         $insert = mysqli_query($conn,$sql);

         if ($insert) {
             # code...
             echo '       
             <script>          
             alert("Registration Successfull!");
             Window.location = "../";
             </script>';
            }
         else {
             # code...
             echo '
             <script>  
                      alert("Some error Occured!");
                      Window.location = "../routes/register.html";
             </script>';
         }
     }
     else {
        echo '
              <script>
              alert("Password and confirm password dont match!");
              Window.location = "../routes/register.html"
              </script>';
     }



