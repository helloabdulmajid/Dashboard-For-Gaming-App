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
            <h1> GameRoom</h1>
            
            <fieldset>
              
              <label for="user">Cat_Name:</label>
             
              <select name="user"  >
              <?php
				   $get_cat = "select * from tbl_user";
				   $run_cat = mysqli_query($con, $get_cat);
				   while($row_cat = mysqli_fetch_array($run_cat))
				   {
				   $cid = $row_cat['uid'];
				   $cname = $row_cat['name'];
                                  
                                  
													
                                  echo '<option value="'.$cid.'">
                                      '.$cname.'
					</option>';
                                   }
                ?>
                </select>

                      
                 <label for="catamt">Cat_Amount _Id:</label>
                
                  <select name="catamt"  >
              <?php
				   $get_cat = "select * from tbl_cat_amount";
				   $run_cat = mysqli_query($con, $get_cat);
				   while($row_cat = mysqli_fetch_array($run_cat))
				   {
				   $cid = $row_cat['caid'];
				   $cname = $row_cat['caname'];
                                  
                                  
													
                                  echo '<option value="'.$cid.'">
                                      '.$cname.'
					</option>';
                                   }?>
                    </select>

             <label for="result">Result</label>
             <input list="result" name="result">
              <datalist id="result">
                <option value="Win">
                <option value="Fail">
                <option value="Pending">
                
             </datalist>
        
        
             

            </fieldset>
            
           
            <button type="submit" name="submit">Submit</button>
            
           </form>


           <?php


    if(isset($_POST['submit']))
    {
         $username = mysqli_real_escape_string($con,$_POST['user']);
         $amount= mysqli_real_escape_string($con,$_POST['catamt'] ); 
         $result= mysqli_real_escape_string($con,$_POST['result'] );        
      

      
   
         
            $insertquery = "insert into gameroom (uid,caid,result) values('$username','$amount','$result') ";

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
            </div>
          </div>
           
</body>
</html>
