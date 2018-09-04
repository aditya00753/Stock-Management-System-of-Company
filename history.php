<?php
if(!isset($_POST['historydate']))
{
	if(isset($_POST['sorting']) and isset($_POST['sorting_type']) and isset($_POST['date']) )
	{
		$date=date_create($_POST['date']);
	$date1=date_format($date,"d-M-Y");
	}
	else if(isset($_POST['grouping']) and isset($_POST['criteria']) and isset($_POST['criteria1']) and isset($_POST['ordertype']) and isset($_POST['date']))	
	{
		$date=date_create($_POST['date']);
	$date1=date_format($date,"d-M-Y");
	}
	else
		 header('location:http://localhost/projectwork/stock.php');
}	
else
{
	$date=date_create($_POST['historydate']);
	$date1=date_format($date,"d-M-Y");
}    
 
	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   body
   {
	overflow:hidden;   
   }
   #beta
  {
	  font-size:60px;
	  position:relative;
	  left:140px;
  }
       #div10
  {
	  width:500px;
	  height:200px;
	  background-color:white;
	  position:fixed;
	  left:370px;
	  bottom:180px;
	  color:black;
	  opacity:1;
	  border:1px solid;
	  border-radius:7px;
  	  visibility:hidden;
	  z-index:999;
  }
  
     #div12
  {
	  width:500px;
	  height:200px;
	  background-color:white;
	  position:fixed;
	  left:370px;
	  bottom:180px;
	  color:black;
	  opacity:1;
	  border:1px solid;
	  border-radius:7px;
  	  visibility:hidden;
	  z-index:999;
  }
  
       #div14
  {
	  width:300px;
	  height:200px;
	  background-color:white;
	  position:fixed;
	  left:370px;
	  bottom:180px;
	  color:black;
	  opacity:1;
	  border:1px solid;
	  border-radius:7px;
  	  visibility:hidden;
	  z-index:999;
  }
  
     #div16
  {
	  width:500px;
	  height:250px;
	  background-color:white;
	  position:fixed;
	  left:370px;
	  bottom:180px;
	  color:black;
	  opacity:1;
	  border:1px solid;
	  border-radius:7px;
  	  visibility:hidden;
	  z-index:999;
  }
  
       #div18
  {
	  width:500px;
	  height:250px;
	  background-color:white;
	  position:fixed;
	  left:370px;
	  bottom:180px;
	  color:black;
	  opacity:1;
	  border:1px solid;
	  border-radius:7px;
  	  visibility:hidden;
	  z-index:999;
  }
  
       #div6
  {
	  width:400px;
	  height:200px;
	  background-color:white;
	  position:fixed;
	  left:370px;
	  bottom:180px;
	  color:black;
	  opacity:1;
	  border:1px solid;
	  border-radius:7px;
  	  visibility:hidden;
	  z-index:999;
  }
    #div7
  {
	  position:absolute;
	  top:40px;
	  left:18px;
	  
  }
  
       #div11
  {
	  position:absolute;
	  top:75px;
	  left:18px;
	  
  }
  
        #div13
  {
	  position:absolute;
	  top:75px;
	  left:18px;
	  
  }
        #div15
  {
	  position:absolute;
	  top:0px;
	  left:6px;
	  
  }

    #div17
  {
	  position:absolute;
	  top:240px;
	  left:18px;
	  
  }
    #div19
  {
	  position:absolute;
	  top:25px;
	  left:18px;
	  
  }  
   #div17
  {
	  position:absolute;
	  top:60px;
  }
   #div2
  {
	  width:1400px;
	  height:720px;
	  background-color:black;
	  position:fixed;
	  bottom:0px;
	  left:0px;
	  opacity:0.9;
	  visibility:hidden;
	  z-index:700;
  }
   #tablebox
  {
	  width:100%;
	  height:450px;
	  overflow:scroll;
	  position:relative;
	  top:200px;
  }
  
  </style>
  <script>
  
  function opennotfound()
 {
	 document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div14").style.visibility="visible";
	  document.getElementById("div15").style.visibility="visible";
	  document.getElementById("anchor7").style.visibility="visible"; 
 }
 
 function closenotfound()
 {
	 document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div14").style.visibility="hidden";
	  document.getElementById("div15").style.visibility="hidden";
	  document.getElementById("anchor7").style.visibility="hidden";   
 }
 function showorderingdialogbox()
 {
	document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div16").style.visibility="visible";
	  document.getElementById("div17").style.visibility="visible";
	  document.getElementById("anchor8").style.visibility="visible";  
 }
 function closeorderingdialogbox()
 {
	 document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div16").style.visibility="hidden";
	  document.getElementById("div17").style.visibility="hidden";
	  document.getElementById("anchor8").style.visibility="hidden"; 
 }
 function showgroupingdialogbox()
 {
	 document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div18").style.visibility="visible";
	  document.getElementById("div19").style.visibility="visible";
	  document.getElementById("anchor9").style.visibility="visible";  
 }
 function closegroupingdialogbox()
 {
	 document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div18").style.visibility="hidden";
	  document.getElementById("div19").style.visibility="hidden";
	  document.getElementById("anchor9").style.visibility="hidden";  
 }
 
 function searchbyiddialogbox()
  {
	  document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div10").style.visibility="visible";
	  document.getElementById("div11").style.visibility="visible";
	  document.getElementById("anchor5").style.visibility="visible"; 
  }
  
  function closesearchbyiddialogbox()
  {
	 document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div10").style.visibility="hidden";
	  document.getElementById("div11").style.visibility="hidden";
	  document.getElementById("anchor5").style.visibility="hidden";   
  }
   function closesearchbyiddialogbox()
  {
	 document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div10").style.visibility="hidden";
	  document.getElementById("div11").style.visibility="hidden";
	  document.getElementById("anchor5").style.visibility="hidden";   
  }
  
  function searchbyproductnamedialogbox()
  {
	  document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div12").style.visibility="visible";
	  document.getElementById("div13").style.visibility="visible";
	  document.getElementById("anchor6").style.visibility="visible"; 
  }
  
 function closesearchbyproductnamedialogbox()
  {
	 document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div12").style.visibility="hidden";
	  document.getElementById("div13").style.visibility="hidden";
	  document.getElementById("anchor6").style.visibility="hidden";   
  }
  function showprintdialogbox()
  {
	  document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div6").style.visibility="visible";
	  document.getElementById("div7").style.visibility="visible";
	  document.getElementById("anchor3").style.visibility="visible"; 
  }
  function closeprintdialogbox()
  {
	 document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div6").style.visibility="hidden";
	  document.getElementById("div7").style.visibility="hidden";
	  document.getElementById("anchor3").style.visibility="hidden";   
  }
  function searchbyid()
  {
	  var x=document.getElementById("product_id").value;
	  var y=document.getElementById("date").value;
	  
	  z=y+" "+x;
	  
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.open("GET", "getstockhistory.php?q=" + z , true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                t= this.responseText;
				
                if(t=="yes")
				{
					x=x.toString();
					document.getElementById(x).style.backgroundColor="green";
					closesearchbyiddialogbox();
					 window.location.href = "http://localhost/projectwork/history.php#"+x;
					 
                }
                else
				{
					document.getElementById("p1").innerHTML=t;
					closesearchbyiddialogbox();
					opennotfound();
				}					
            }
			
		}
  }
  function colorRectification(str)
  {
	  if(document.getElementById(str).style.backgroundColor=="green")
	  {
		 x=parseInt(str,10);
		 x=x/100;
		document.getElementById(str).style.backgroundColor="white";	 
	  }
  }
   function searchbyproductname()
  {
	  var x=document.getElementById("product_name").value;
	var y=document.getElementById("date").value;
	  z=y+" "+x;
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.open("GET", "getstockhistory1.php?q=" + z, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                t= this.responseText;
				if(t.indexOf("no")==-1){
					t=t.toString();
					document.getElementById(t).style.backgroundColor="green";
					closesearchbyproductnamedialogbox();
					 window.location.href = "http://localhost/projectwork/history.php#"+t;
				}
                else
				{
					closesearchbyproductnamedialogbox();
					opennotfound();
				}					
            }
			
		}
  }
 
  </script>
  
</head>
<body>
<table class="table table-hover" style="position:fixed; z-index:999; background-color:green;">
 <thead>
    
   <tr style="z-index:400;"><th></th><th colspan=4 id="beta">Stock History Table</th>
   <th scope="col" style="position:relative;left:0px;">Dated on:<?php echo $date1;	  ?></th>
   </tr>
   <th>
   <button class="btn btn-primary btn-md" onclick="searchbyiddialogbox()">Search By Product Id</button></th>
   <th><button class="btn btn-primary btn-md" onclick="searchbyproductnamedialogbox()" style="position:relative;left:40px;">Search By Product Name</button></th>
   <th><button class="btn btn-success btn-md" onclick="showorderingdialogbox()" style="position:relative;left:100px;" >Sorting of total stocks</button></th>
   <th><button class="btn btn-success btn-md" onclick="showgroupingdialogbox()" style="position:relative;left:170px;" >Sorting of partial stocks</button></th>
   <th><button class="btn btn-success btn-md" style="position:relative;left:220px;" onclick="showprintdialogbox()" >Print</button></th>
   <th></th>
   </tr>

    <tr>
      <th scope="col">Product Id</th>
      <th scope="col" colspan=2 style="position:relative;left:75px;" >Product Name</th>
      <th scope="col" style="position:relative;left:220px;">Stock available</th>
      
    </tr>
  </thead>
</table>  
<div id="tablebox">
<table class="table table-hover" >
<?php
if(isset($_POST['sorting']) and isset($_POST['sorting_type']) and isset($_POST['date']) )
{
	$sorting=$_POST['sorting'];
	$sorting_type=$_POST['sorting_type'];
}
else
{
$sorting="product_id";
$sorting_type="ASC";
}
if(isset($_POST['grouping']) and isset($_POST['criteria']) and isset($_POST['criteria1']) and isset($_POST['ordertype']) and isset($_POST['date']))
{
	if($_POST['criteria']=="greaterthan")
	 $criteria=">";
     else if($_POST['criteria']=="lessthan")
	 $criteria="<";
     else 
	  $criteria="=";
	$query="select product_id,product_name,no_of_items from stockhistory where stock_date='$date1' and no_of_items".$criteria." ".$_POST['grouping']." order by ".$_POST['criteria1']." ".$_POST['ordertype'];
}
else
$query="select product_id,product_name,no_of_items from stockhistory  where stock_date='$date1' order by $sorting ".$sorting_type;
$conn=oci_connect("aditya","aditya","localhost/XE");
$r=oci_parse($conn,$query);
$w=oci_execute($r);
while($row=oci_fetch_array($r,OCI_NUM))
{
	echo "<tr id=\"$row[0]\" onclick=\"colorRectification(this.id)\">
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	</tr>";
}
?>
</table>
</div>

<div id="div2">
</div>

<div  id="div10">
<p id="anchor5" style="float:right;position:relative;right:6px;" onclick="closesearchbyiddialogbox()" onmouseover="Mouseover5()" onmouseout="Mouseout5()">X</p>
<div id="div11">
<label>Enter the Productid to be searched</label>
<input type="number" id="product_id" required /><br/><br/><br/>
<input type="text" value="19-aug-2018" style="visibility:hidden;" id="date">
<button onclick="searchbyid()" style="position:relative;left:170px;top:-20px;">Search</button>
</div>
</div>

<div  id="div12">
<p id="anchor6" style="float:right;position:relative;right:6px;" onclick="closesearchbyproductnamedialogbox()" onmouseover="Mouseover6()" onmouseout="Mouseout6()">X</p>
<div id="div13">
<label>Enter the ProductName to be searched</label>
<input type="text" name="product_name" id="product_name" required /><br/><br/><br/>
<input type="text" value="19-aug-2018" style="visibility:hidden;" id="date">
<button onclick="searchbyproductname()" style="position:relative;left:170px;top:-20px;">Search</button>
</div>
</div>

<div  id="div14">
<p id="anchor7" style="float:right;position:relative;right:6px;" onclick="closenotfound()" onmouseover="Mouseover6()" onmouseout="Mouseout6()">X</p>
<div id="div15">
<img src="notfound.jpg" width="90px" style="position:relative;top:45px;left:100px;" >
<p id="p1"></p>
<button onclick="closenotfound()" style="position:relative;top:120px;left:35px;">OK</button>
</div>
</div>



<div  id="div16">
<p id="anchor8" style="float:right;position:relative;right:6px;" onclick="closeorderingdialogbox()" onmouseover="Mouseover7()" onmouseout="Mouseout7()">X</p>
<div id="div17">
<form action="history.php" method="post">
<label>Select the criteria on which you want ordering</label><br/>
<input type="radio"  required  name="sorting" id="productid" checked value="product_id" />Product id<input type="radio" required name="sorting" id="productname" value="product_name" />Product Name
<input type="radio" required name="sorting" id="no_of_items" value="no_of_items">Stock Available<br/><br/><br/>
<label>Select the type of sorting</label><br/>
<input type="radio" required name="sorting_type" id="sorting_type" checked value="ASC" />Ascending<input type="radio" required name="sorting_type" id="sorting_type" value="DESC" />Descending<br/><br/>
<input type="text" value="<?php echo $date1; ?>" style="visibility:hidden;" name="date" id="date">
<input type="submit" value="Sort" />
</form>
</div>
</div>

<div  id="div18">
<p id="anchor9" style="float:right;position:relative;right:6px;" onclick="closegroupingdialogbox()" onmouseover="Mouseover8()" onmouseout="Mouseout8()">X</p>
<div id="div19">
<form action="history.php" method="post">
<label>Enter the stock value on which you want grouping</label><br/>
<input type="number"  required  name="grouping" min=0 id="grouping" /><br/>
<label>Select criteria</label>
<input type="radio" name="criteria" required checked value="greaterthan" />Greater than
<input type="radio" name="criteria" required value="lessthan" />Less than
<input type="radio" name="criteria" required value="equalto">Equal to<br/>
<label>Select the criteria on you want ordering</label><br/>
<input type="radio" name="criteria1" required checked value="product_id" />Product Id
<input type="radio" name="criteria1" required value="product_name" />Product Name
<input type="radio" name="criteria1" required value="no_of_items" />Stock Available<br/>
<label>select order type</label><br/>
<input type="radio" name="ordertype" required checked value="ASC">Ascending Ordering
<input type="radio" name="ordertype" required value="DESC">Descending Ordering<br/>
<input type="text" value="<?php echo $date1; ?>" style="visibility:hidden;" name="date" id="date">
<input type="submit" value="Group" />
</form>
</div>
</div>


<div  id="div6">
<p id="anchor3" style="float:right;position:relative;right:6px;" onclick="closeprintdialogbox()"  onmouseover="Mouseover3()" onmouseout="Mouseout3()">X</p>
<div id="div7">
<form action="print1.php" method="post" target="_blank" >
<label style="position:relative;top:30px; left:25px;">Do you want to print item from stock list????</label><br/><br/>
<button  style="position:relative;left:50px;top:50px;">Yes</button>
<input type="text" value="<?php echo $query; ?>" style="visibility:hidden;" name="date1" id="date">
<input type="text" value="<?php echo $date1; ?>" style="visibility:hidden;" name="date2" id="date">
</form>
<button style="position:relative;left:200px;top:0px;" onclick="closeprintdialogbox()">No</button>
</div>
</div>






</body>
</html>
