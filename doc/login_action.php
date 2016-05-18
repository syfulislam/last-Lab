<html>
<head>
<title>DOCTORS POINT</title>
		<link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div class="container">
 <?php
    

$name=$_POST['name'];

$password=$_POST['password'];

//echo $name,$f_name."</br>";

$dbc = @mysqli_connect('localhost', 'root', '', 'dpk') or die 
('Could not
      connect to MySQL: ' . mysqli_connect_error() . '</body></html>');
	  
	 	   $SQL="Select * from login_info";
        $result=mysqli_query($dbc,$SQL);
		 $i=0;
 while ($db_field = mysqli_fetch_assoc($result)) 
 
{
if(  $db_field['password']== $password && $db_field['name']== $name)   
     
	$i=1;
        
}
if($i==1)
        
{
        $name=$_POST['name'];
		echo '<font size="4pt" color="Red">'.$name.'</font>
		 <left><h4><a href="index.html">Back</a></h4></left>';
	include("main.html");
 }

 else
{
    echo '<center><h1>Invalide User name or Password</h1></center>
	<center><h3><a href="index.html">Try Again</a> <a href="index.html">Home Page</a></h3></center>';
	
	
	
}
	  ?>
  </div>
  </body>
  </html>  