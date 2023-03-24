<!DOCTYPE html>
<html>
<head>
	<title>home</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >
<?php include 'header.php'; ?>
<div class="main">
<div class="header-text2">
  <h1><center>Contact Me</center></h1>
  <form action="index.php" method="POST" > 
    <table><tr><td class="td">Name:</td><td><input type="text" name="name" id="name" placeholder="Name" pattern="^[a-zA-Z0-9\:]*$" title="enter a valid name"required/></td></tr>
    <tr><td class="td"> Email id:</td><td><input type="email" name="email" id="email" placeholder="Email id" pattern="[a-zA-Z0-9_\-\.]+[@][a-z]+[\.][a-z]{2,3}" title="enter a valid email id" required /></td></tr>
    <tr><td class="td">Message</td><td><textarea  name="message" id="message" placeholder="Enter a text here" pattern="" required></textarea></td></tr>
    <tr><td colspan="2" class="button"><input type="submit" value="submit" name="upload" class="btn btn-success"></td></tr></table>    
</form>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
<?php
   /*include 'dbconnect.php'; 
   if(isset($_POST['upload'])){
  		        $name=$_POST['name'];
  		        $email=$_POST['email'];
              $message=$_POST['message'];
                       
  $sql="INSERT INTO `profile`( `name`, `email`, `message`) VALUES ('$name','$email','$message')";
 
  $sql_run=mysqli_query($conn,$sql);  
   
  if($sql_run){

     echo '<script type="text/javascript"> alert("Data Inserted")</script>';

  }
  else{
  echo '<script type="text/javascript"> alert("Data not Inserted")</script>';
}
   
}*/

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

?>
