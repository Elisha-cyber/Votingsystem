<?php
 
 session_start();
 if (!isset($_SESSION['userdata'])) {
     # code...

     header("location:../");
 }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System . Dashboard</title>
</head>
<body>


    <button>Back</button>
    <button>Logout</button>
    <h1>Online Voting System</h1>
    <hr> 

    <div id="Profile"></div>
    <div id="Group"></div>
</body>
</html>