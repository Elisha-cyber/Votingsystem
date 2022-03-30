<?php

    session_start();
    include_once 'dbh.inc.php';

    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "SELECT * FROM users WHERE mobile ='$mobile' AND password ='$password' AND role = '$role;";
    
    $check = mysqli_query($conn,$sql);

if ( mysqli_num_rows($check) > 0) {
    # code...

    $userdata = mysqli_fetch_array($check);
    $sqli = "SELECT * FROM users WHERE role =2;";
    $groups= mysqli_query($conn,$sqli);
    $groupsdata = mysqli_fetch_all($groups,MYSQLI_ASSOC);

    $_SESSION['userdata'] = $userdata;
    $_SESSION['groupsdata'] = $groupsdata;

    echo '
    <script>
             Window.location = "../routes/dashboard.php"; 
    </script>';
}
else {
    # code...

    echo '
              <script>
              alert("Invalid Credentials or user not found!");
              Window.location = "../";
                  </script>';
}
?>


