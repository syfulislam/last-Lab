<html>
<head>
<title>DOCTORS POINT</title>
		<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
    <?php
    

$name=$_POST['name'];
$f_name=$_POST['f_name'];
$address=$_POST['address'];
$blood_group=$_POST['blood_group'];
$cottact_number=$_POST['cottact_number'];
$e_mail=$_POST['e_mail'];
$password=$_POST['password'];
$repassword=$_POST['re_password'];


//echo $name,$f_name."</br>";

$dbc = @mysqli_connect('localhost', 'root', '', 'dpk') or die 
('Could not
      connect to MySQL: ' . mysqli_connect_error() . '</body></html>');
	  
	 	   $SQL="Select * from login_info";
        $result=mysqli_query($dbc,$SQL);
		 $i=0;
 while ($db_field = mysqli_fetch_assoc($result)) 
{
if(  $db_field['password']== $password && $db_field['name']== $name  )   
     
	$i=1;
  
}
if($i==0)
{
  $sql="insert into login_info(name,f_name,address,blood_group,cottact_number,e_mail,password) values ('$name','$f_name','$address','$blood_group','$cottact_number','$e_mail','$password')";
	  $r = mysqli_query ($dbc, $sql);
	  if ($r)
	  {
		  echo "Welcome ". $name;
		  
		  include("main.html");
	  }
	

}
else
{
    echo '<center><h1>User name or Password exit</h1></center>
	<center><h3><a href="reg.html"> Try Again</a> <a href="index.html"> Home Page</a></h3></center>';

}
	  
	 
  ?>
 
  
  </div>
  </body>
  </html>