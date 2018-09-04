<?php
if(!isset($_POST['addvalue']))
	header('location:http://localhost/projectwork/login1.php');
$datatobeadded=$_POST['addvalue'];
$id=$_POST['idwhere'];
$conn=oci_connect("aditya","aditya","localhost/XE");
$query="update stock set NO_OF_ITEMS=NO_OF_ITEMS+$datatobeadded where PRODUCT_ID=$id";
$r=oci_parse($conn,$query);
$w=oci_execute($r);
if($w)
{
	header('location:http://localhost/projectwork/stock.php?q=10');
}

?>