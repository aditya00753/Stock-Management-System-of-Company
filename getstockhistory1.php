<?php
if(!isset($_REQUEST['q']))
	header('location:http://localhost/projectwork/login1.php');
$q=$_REQUEST['q'];
$length=strlen($q);
$i=0;
$y="";
$z="";
while($q[$i]!=" ")
{
	  $y=$y.$q[$i];
      $i++;	  		
	
}
$i++;
while($i<$length)
{
	$z=$z.$q[$i];
	$i++;
}

$date=date_create($y);
$date1=date_format($date,"d-M-Y");
$conn=oci_connect("aditya","aditya","localhost/XE");
$query="select * from stockhistory where PRODUCT_NAME='$z' and stock_date='$date1'";
$r=oci_parse($conn,$query);
 $w=oci_execute($r);
  if($row=oci_fetch_array($r,OCI_NUM))
	 echo $row[1];
 else
	 echo "no"; 
?>