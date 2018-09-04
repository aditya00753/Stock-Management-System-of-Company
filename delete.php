<?php
if(!isset($_POST['idwhere2']))
	header('location:http://localhost/projectwork/login1.php');
$id=$_POST['idwhere2'];
$conn=oci_connect("aditya","aditya","localhost/XE");
$query="delete from stock where PRODUCT_ID=$id";
$r=oci_parse($conn,$query);
$w=oci_execute($r);
if($w)
{
	header('location:http://localhost/projectwork/stock.php?q=10');
}
?>