<?php
#creating connection
$s = "localhost";
$u = "root";
$p = "";
$db = "menteementorspace";
$con = mysqli_connect($s, $u, $p, $db);
//mysqli_select_db($db);

if (isset($_POST['signin']))
{
	$AdminID = $_POST['adminID'];
    $Email = $_POST['email'];
	$pwd = $_POST['password'];

	$sql = "select * from admins where email='".$Email."' AND password='".$pwd."' limit 1";

	$result = mysqli_query($con, $sql);
	
	if (mysqli_num_rows($result)==1)
	{ 
        include 'header.php';
		echo "<center><h1 style='color: orange; font-family: harrington; font-weight: bold;text-align: center;>Congratulations. You are free to manage MM^S Database</h1></center>";
		exit();
        
	}
	else
	{
		echo "<h3 style='color: white; font-family: harrington; font-size: 30px; font-weight: bold; text-align: center; background-color: orange; border-radius: 2px;height: 80px;padding-top: 30px;'>Dear Admin, your password or username seems to be incorrect!!</h1>";
		echo "<h3 style='color: orange; font-family: harrington; font-size: 30px; font-weight: bold; text-align: center;'>Click of TRY AGAIN to login</h3>";
		echo "<center><a href='adminlogin.html'><img src='assets/img/try_again.png' width='600px' height='350px'></a></center>";
		exit();
	}
}

?>