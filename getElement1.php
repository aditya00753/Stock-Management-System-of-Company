<?php
if(!isset($_REQUEST['q']))
	header('location:http://localhost/projectwork/login1.php');
$q=$_REQUEST['q'];
$conn=oci_connect("aditya","aditya","localhost/XE");
 $query="select * from stock where PRODUCT_NAME='$q'";
 $r=oci_parse($conn,$query);
 $w=oci_execute($r);
 if($row=oci_fetch_array($r,OCI_NUM))
 {$row[0]=strval($row[0]); echo $row[0];}
 else
	 echo "no";

?>