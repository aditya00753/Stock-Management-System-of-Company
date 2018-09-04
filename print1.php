<?php
if(!isset($_POST['date1']))
	header('location:http://localhost/projectwork/login1.php');
?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body
{
	margin:15px;
	padding:10px;
	border:2px solid black;
	
}
.lastrow
{
	position:relative;
	left:65px;
}
#lastrow1
{
	position:relative;
    left:125px;	
}
#lastrow2
{
	position:relative;
    left:85px;	
}

</style>
</head>
<body>
<h1 style="text-align:center;">Stock History Report</h1>
<h2 style="text-align:right">Dated On:<?php echo $_POST['date2'];   ?></h2>
<hr/>
<div id="div1">
<table class="table" id="table" >
<tr>
<th><span class="lastrow">Product Id</span></th>
<th><span class="lastrow">Product &nbsp  Name</span></th>
<th><span class="lastrow">Stock Available(Particlar Day)</span></th>
</tr>
<?php
$query=$_POST['date1'];
$conn=oci_connect("aditya","aditya","localhost/XE");
$r=oci_parse($conn,$query);
$w=oci_execute($r);
while($row=oci_fetch_array($r,OCI_NUM))
{
	echo "<tr>
<td><span class=\"lastrow\">$row[0]</span></td>
<td><span   id=\"lastrow2\">$row[1]</span></td>
<td><span  id=\"lastrow1\">$row[2]</span></td>
</tr>";
}


?>




</table>
</div>
<script>window.print();</script>
</body>
</html>