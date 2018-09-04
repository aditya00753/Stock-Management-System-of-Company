
<?php
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$product_stock=$_POST['stockavailable'];

$conn=oci_connect("aditya","aditya","localhost/XE");
$query="insert into stock values($product_id,'$product_name',$product_stock)";
$r=oci_parse($conn,$query);
$w=oci_execute($r);
if($w)
{

	header('location:http://localhost/projectwork/stock.php?q=5');
}

?>