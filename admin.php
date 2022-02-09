<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
  
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="am.css">
</head>
<body>
    

    <div class="row">
        <div class="col-md-12">
          <form action="#" method="POST">
          
          <h1> Admin Page </h1>
            
            <fieldset>
              
              
            
              <label for="name">Name:</label>
              <input type="text" id="name" name="name">

              
              <label for="uname">User Name:</label>
              <input type="text" id="uname" name="uname">
           
              <label for="password">Password:</label>
              <input type="password" id="password"       name="password">

             
             
            </fieldset>
            
           
            <button type="submit" name="submit">Sign Up</button>
            
           </form>


           <?php


    if(isset($_POST['submit']))
    {
         $username = mysqli_real_escape_string($con,$_POST['name']);
         $uname= mysqli_real_escape_string($con,$_POST['uname'] );     
        $password= mysqli_real_escape_string($con,$_POST['password']); 
   
      
        $unamequery =" select * from tbl_admin where username='$uname'";
       $query= mysqli_query($con,$unamequery);
       $unamecount = mysqli_num_rows($query);

       if($unamecount>0){
        ?>
           <script>
               alert("User Name Already Exists");
           </script>
          <?php 
       }
       else{
        $insertquery = "insert into tbl_admin (aname,username,password) values('$username','$uname','$password') ";

        $iquery = mysqli_query($con, $insertquery);
    
       }
      
        if($iquery)
        {
          ?>
           <script>
               alert("Insert Successfully");
           </script>
          <?php
        }
      
      else{
          ?>
          <script>
              alert("Insert Fail");
          </script>
         <?php
          }
 
    }
    ?>
            </div>
          </div>
           
</body>
</html>
