<?php
$recieved=$_REQUEST['q'];

$length=strlen($recieved);
$i=0;
$idwheredatatosubtracted="";
$datatobesubtracted="";
while($recieved[$i]!=" ")
{
	$idwheredatatosubtracted.=$recieved[$i];
	$i++;
}
$i++;
while($i<$length)
{
	$datatobesubtracted.=$recieved[$i];
	$i++;
}
//echo $idwheredatatosubtracted." ".$datatobesubtracted;
$datatobesubtracted=(int)$datatobesubtracted;
$conn=oci_connect("aditya","aditya","localhost/XE");
$query="select no_of_items from stock where product_id=$idwheredatatosubtracted";
$r=oci_parse($conn,$query);
$w=oci_execute($r);
if($row=oci_fetch_array($r,OCI_NUM))
{
	if($row[0]-$datatobesubtracted>=0)
		echo "yes";
	else
		echo "no";
}

	




?>