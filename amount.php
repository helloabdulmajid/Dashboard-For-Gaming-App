
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
<?php
include 'db.php';

    if(isset($_POST['submit']))
    {
         $username = mysqli_real_escape_string($con,$_POST['name']);
         $amount= mysqli_real_escape_string($con,$_POST['amount'] );     
      

      
   
         
            $insertquery = "insert into tbl_cat_amount (caname,amount) values('$username','$amount') ";

            $iquery = mysqli_query($con, $insertquery);
        
          
          
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

  
    <div class="row">
        <div class="col-md-12">
          <form action="#" method="POST">
            <h1> Amount Cat_Table</h1>
            
            <fieldset>
              
              <label for="name">Cat_Name:</label>
              <input type="text" id="name" name="name">
            
              <label for="amount">Cat_Amount:</label>
              <input type="number" id="amount" name="amount">

            </fieldset>
            
           
            <button type="submit" name="submit">Submit</button>
            
           </form>
            </div>
          </div>
           
</body>
</html>
