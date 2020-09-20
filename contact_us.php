<?php 

echo '<script type="text/JavaScript">  
     alert("Please enter Your informatin"); 
     </script>' 
;

      $db = new mysqli("localhost","root","","contact_us");


 

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {
       $name =   $_POST['name'];
      $email = $_POST['email'];
      $msg   =   $_POST['msg'];



   $is_insert    =   $db->query("INSERT INTO `data`(`name`, `email`, `msg`) VALUES ( '$name','$email','$msg')");
   if ($is_insert==TRUE) {
      echo "<h2> Thanks, Your requet submitted.</h2> " ; 
      exit()     ; 
   }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
 
<body style="background-color: black">
      <style type="text/css">
            
div{
      background-color: green;
}





      </style>
      <script type="text/javascript">
            
      </script>
      <div class="container" style="padding: 50px" style="margin: 100px" >
      <div class="div">
         <div><form method="post" action=""  style="text-align: center;">
      	<input type="text" name="name" placeholder="Enter your name"><br><br>
      	<input type="email" name="email" placeholder="Enter your email"><br><br>
      	<textarea name="msg" placeholder="Type your request"></textarea><br>
      	<input type="submit" value="Submit request" rows="4" column="50">
      	
            </form>
      </div>
      </div>
      </div>
</body>
</html>