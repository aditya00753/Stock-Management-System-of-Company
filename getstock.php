<?php
if(!isset($_REQUEST['q']))
	header('location:http://localhost/projectwork/login1.php');
$q=$_REQUEST['q'];
$conn=oci_connect("aditya","aditya","localhost/XE");
 $query="select * from stock where PRODUCT_ID=$q";
 $r=oci_parse($conn,$query);
 $w=oci_execute($r);
$row=oci_fetch_array($r,OCI_NUM);
echo "<label>PRODUCT_ID:</label><b>$row[0]</b><hr/>
     <label>PRODUCT_NAME:</label><b>$row[1]</b><hr/>
	  <label>STOCK AVAILABLE:</label><b>$row[2]</b><hr/>
";
 

?>