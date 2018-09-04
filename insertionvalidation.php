<?php
$q=$_REQUEST['q'];
//$q=1;
$q=(int)$q;
$conn=oci_connect("aditya","aditya","localhost/XE");
 $query="select * from stock where PRODUCT_ID=$q";
 $r=oci_parse($conn,$query);
 $w=oci_execute($r);
  if($row=oci_fetch_array($r,OCI_NUM))
	 echo "no";
 else
	 echo "yes";



?>