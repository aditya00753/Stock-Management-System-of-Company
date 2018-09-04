<?php
$conn=oci_connect("aditya","aditya","localhost/XE");
$query = 'BEGIN INSERTTIONTOSTOCKHISTORY; END; ';
$r=oci_parse($conn,$query);
$w=oci_execute($r);

if($w)
{
	header('location:http://localhost/projectwork/login1.php');
}

?>