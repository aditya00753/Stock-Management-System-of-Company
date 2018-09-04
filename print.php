<?php
if(!isset($_POST['confirm']))
	header('location:http://localhost/projectwork/login1.php');
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body
  {
	  border:5px solid black;
	  margin:3px;
	  padding:3px;
  }
  </style>
</head>
<body >
<h1 style="text-align:center;" >Company Stock Report</h1>
<br><hr/>
<h5>Report submitted on date
<b><?php echo date("d-M-Y"); ?> </b>and Time <b><?php echo date("h:i:sa");  ?></b></h5>
<hr/>
<h3 style="position:relative; left:9px;"><b>List of items that are vanished</b></h3>
<?php
echo "<ul>";
$conn=oci_connect("aditya","aditya","localhost/XE");
$query="select product_name from stock where no_of_items=0";
$r=oci_parse($conn,$query);
$w=oci_execute($r);
while($row=oci_fetch_array($r,OCI_NUM))
{
	echo "<li>$row[0]</li>";
}
echo "</ul>";
?>
<br/>
<hr/>
<h3 style="position:relative; left:9px;"><b>List of items going to be finished within 3-5 days</b></h3>

<?php
echo "<ul>";
$query="select product_name,no_of_items from stock where no_of_items<100";
$r=oci_parse($conn,$query);
$w=oci_execute($r);
while($row=oci_fetch_array($r,OCI_NUM))
{
	echo "<li>$row[0].($row[1])</li>";
}
echo "</ul>";
?>

<script>window.print();</script>










</body>
</html>