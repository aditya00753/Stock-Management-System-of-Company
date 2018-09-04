<?php
session_start();
if(!isset($_POST['username']) and !isset($_POST['password']))
header('location:http://localhost/projectwork/login1.php');
else
{
    $username=$_POST['username'];
	$password=$_POST['password'];
}	
$conn=oci_connect("aditya","aditya","localhost/XE");
$query="select * from user1 where username='$username' and password='$password'";
$r=oci_parse($conn,$query);
$w=oci_execute($r);
if(oci_fetch_array($r,OCI_NUM))
{$_SESSION['username']=$_POST['username'];header('location:http://localhost/projectwork/stock.php');}
else
{
header('location:http://localhost/projectwork/login1.php?q=5');
}

?>