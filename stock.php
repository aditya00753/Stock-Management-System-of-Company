<?php
session_start();
?>
<?php 

if(!isset($_SESSION['username']))
{
	if(isset($_POST['sorting']) and isset($_POST['sorting_type']))
	{}
    else if(isset($_POST['grouping']) and isset($_POST['criteria']) and isset($_POST['ordertype']) and isset($_POST['criteria1']))
	{}
    else if($_SERVER['REQUEST_URI']=='/projectwork/stock.php?q=5')
	{
		$_SESSION['username']="iop";
		header('location:http://localhost/projectwork/stock.php');
		
	}
	 else if($_SERVER['REQUEST_URI']=='/projectwork/stock.php?q=10')
	{
		$_SESSION['username']="ios";
		header('location:http://localhost/projectwork/stock.php');
	}
	
	else
		header('location:http://localhost/projectwork/login1.php');
	
     		
}
else
{
	if($_SESSION['username']=="iop")
	{
		$y=10;
	session_unset();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock Management Example</title>
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
  #beta1
  {
	  position :relative;
	  left:90px;
  }
  
  
  
  #div1
  {
	  width:500px;
	  height:350px;
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
  
   #div4
  {
	  width:500px;
	  height:350px;
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
	  width:500px;
	  height:350px;
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
     #div8
  {
	  width:500px;
	  height:350px;
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
  
       #div24
  {
	  width:300px;
	  height:200px;
	  background-color:white;
	  position:fixed;
	  left:500px;
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
       #div20
  {
	  width:200px;
	  height:200px;
	  background-color:white;
	  position:fixed;
	  left:550px;
	  bottom:180px;
	  color:black;
	  opacity:1;
	  border:1px solid;
	  border-radius:7px;
  	  visibility:hidden;
	  z-index:999;
  }
        #div22
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
    #div23
  {
	  position:absolute;
	  top:40px;
	  left:18px;
	  
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
  
  #div3
  {
	  position:absolute;
	  top:240px;
	  left:18px;
	  
  }
   #div5
  {
	  position:absolute;
	  top:240px;
	  left:18px;
	  
  }
   #div7
  {
	  position:absolute;
	  top:240px;
	  left:18px;
	  
  }
    #div9
  {
	  position:absolute;
	  top:65px;
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
      #div21
  {
	  position:absolute;
	  top:40px;
	  left:18px;
	  
  }
  #p1
  {
	  color:black;
  }
  
  #div9 input
  {
	  position:absolute;
	  left:200px;
  }
  
  #tablebox
  {
	  width:100%;
	  height:400px;
	  overflow:scroll;
	  position:relative;
	  top:245px;
  }
  #div17
  {
	  position:absolute;
	  top:60px;
  }
         #div25
  {
	  position:absolute;
	  top:0px;
	  left:6px;
	  
  }
  </style>
  <script>
  function stockaddition(str)
  {
	  document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div1").style.visibility="visible";
	  document.getElementById("div3").style.visibility="visible";
	  document.getElementById("anchor1").style.visibility="visible";
	 document.getElementById("p1").style.visibility="visible";
	  //document.getElementById("p1").innerHTML=str;
      
	  str=parseInt(str,10);
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.open("GET", "getstock.php?q=" + str, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("p1").innerHTML = this.responseText;
				document.getElementById("add").id=str.toString();
            }
     	  
		}
  }
  function closeaddition()
  {
	  document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div1").style.visibility="hidden";
	  document.getElementById("div3").style.visibility="hidden";
	  document.getElementById("anchor1").style.visibility="hidden";
	   document.getElementById("p1").style.visibility="hidden";
	   document.getElementById("p2").style.visibility="hidden";
	  
  }
  function Mouseover1()
  {
	  document.getElementById("anchor1").style.color="rgb(164,164,164)";
  }
  function Mouseout1()
  {
	  document.getElementById("anchor1").style.color="rgb(5,11,10)";
  }
  function additionofstock(str1)
  {
	 document.getElementById("idwhere").value=str1;
  }
  
  function stocksubtraction(str)
  {
	  document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div4").style.visibility="visible";
	  document.getElementById("div5").style.visibility="visible";
	  document.getElementById("anchor2").style.visibility="visible";
	 document.getElementById("p4").style.visibility="visible";
	  //document.getElementById("p1").innerHTML=str;
      
	  str=parseInt(str,10);
	  str=str/100;
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.open("GET", "getstock.php?q=" + str, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("p4").innerHTML = this.responseText;
				document.getElementById("subtract").id=str.toString();
				document.getElementById("idwhere1").value=str.toString();
            }
     	  
		}
  }
  
  function closesubtraction()
  {
	  document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div4").style.visibility="hidden";
	  document.getElementById("div5").style.visibility="hidden";
	  document.getElementById("anchor2").style.visibility="hidden";
	   document.getElementById("p4").style.visibility="hidden";
	   document.getElementById("p5").style.visibility="hidden";
	  
  }
  function subtractionofstock(str1)
  {
	 document.getElementById("idwhere1").value=str1;
  }
  function Mouseover2()
  {
	  document.getElementById("anchor2").style.color="rgb(164,164,164)";
  }
  
   function Mouseout2()
  {
	  document.getElementById("anchor2").style.color="rgb(5,11,10)";
  }
  
  function deleteitem(str)
  {
	  document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div6").style.visibility="visible";
	  document.getElementById("div7").style.visibility="visible";
	  document.getElementById("anchor3").style.visibility="visible";
	 document.getElementById("p6").style.visibility="visible";
	  //document.getElementById("p1").innerHTML=str;
      
	  str=parseInt(str,10);
	  str=str/500;
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.open("GET", "getstock.php?q=" + str, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("p6").innerHTML = this.responseText;
				document.getElementById("delete").id=str.toString();
            }
     	  
		}
  }
   function closedeletion()
  {
	  document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div6").style.visibility="hidden";
	  document.getElementById("div7").style.visibility="hidden";
	  document.getElementById("anchor3").style.visibility="hidden";
	   document.getElementById("p6").style.visibility="hidden";
	 //  document.getElementById("p5").style.visibility="hidden";
	  
  }
  
  function deletionofstock(str1)
  {
	  document.getElementById("idwhere2").value=str1;
  }
  function Mouseover3()
  {
	  document.getElementById("anchor3").style.color="rgb(164,164,164)";
  }
  
   function Mouseout3()
  {
	  document.getElementById("anchor3").style.color="rgb(5,11,10)";
  }
  
   function Mouseover4()
  {
	  document.getElementById("anchor4").style.color="rgb(164,164,164)";
  }
  
   function Mouseout4()
  {
	  document.getElementById("anchor4").style.color="rgb(5,11,10)";
  }
  
   function Mouseover5()
  {
	  document.getElementById("anchor5").style.color="rgb(164,164,164)";
  }
  
   function Mouseout5()
  {
	  document.getElementById("anchor5").style.color="rgb(5,11,10)";
  }
  
   function Mouseover6()
  {
	  document.getElementById("anchor6").style.color="rgb(164,164,164)";
  }
  
   function Mouseout6()
  {
	  document.getElementById("anchor6").style.color="rgb(5,11,10)";
  }
    function Mouseover7()
  {
	  document.getElementById("anchor7").style.color="rgb(164,164,164)";
  }
  
   function Mouseout7()
  {
	  document.getElementById("anchor7").style.color="rgb(5,11,10)";
  }
     function Mouseover10()
  {
	  document.getElementById("anchor10").style.color="rgb(164,164,164)";
  }
  
   function Mouseout10()
  {
	  document.getElementById("anchor10").style.color="rgb(5,11,10)";
  }
  
  function newitemadditionbox()
  {
	  document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div8").style.visibility="visible";
	  document.getElementById("div9").style.visibility="visible";
	  document.getElementById("anchor4").style.visibility="visible";
	// document.getElementById("p6").style.visibility="visible";
  }
  function closeinsertion()
  {
	  document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div8").style.visibility="hidden";
	  document.getElementById("div9").style.visibility="hidden";
	  document.getElementById("anchor4").style.visibility="hidden";
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
  
  function searchbyid()
  {
	  var x=document.getElementById("product_id").value;
	
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.open("GET", "getElement.php?q=" + x, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                t= this.responseText;
                if(t=="yes")
				{
					x=x*7;
					x=x.toString();
					document.getElementById(x).style.backgroundColor="green";
					closesearchbyiddialogbox();
					 window.location.href = "http://localhost/projectwork/stock.php#"+x;
                    					
                }
                else
				{
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
	
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.open("GET", "getElement1.php?q=" + x, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                t= this.responseText;
				if(t.indexOf("no")==-1){
				t=parseInt(t,10);               
					t=t*7;
					t=t.toString();
					document.getElementById(t).style.backgroundColor="green";
					closesearchbyproductnamedialogbox();
					 window.location.href = "http://localhost/projectwork/stock.php#"+t;
				}
                else
				{
					closesearchbyproductnamedialogbox();
					opennotfound();
				}					
            }
			
		}
  }
 
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
 
 function showhistorydialogbox()
 {
	 document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div20").style.visibility="visible";
	  document.getElementById("div21").style.visibility="visible";
	  document.getElementById("anchor10").style.visibility="visible";  
 }
 function closehistoryingdialogbox()
 {
	 document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div20").style.visibility="hidden";
	  document.getElementById("div21").style.visibility="hidden";
	  document.getElementById("anchor10").style.visibility="hidden";  
 }
 
  function showprintdialogbox()
  {
	  document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div22").style.visibility="visible";
	  document.getElementById("div23").style.visibility="visible";
	  document.getElementById("anchor10").style.visibility="visible"; 
  }
  function closeprintdialogbox()
  {
	 document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div22").style.visibility="hidden";
	  document.getElementById("div23").style.visibility="hidden";
	  document.getElementById("anchor10").style.visibility="hidden";   
  }
 
function validation()
  {
	  var x=document.getElementById("product_id1").value;
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.open("GET", "insertionvalidation.php?q=" + x, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                t= this.responseText;
				if(t=="no")
					document.getElementById("theta").innerHTML="product_id already exists";
	             else
			         document.getElementById("theta").innerHTML="";		 
            }
			
		}
  }
  function validation1()
  {
	  if(document.getElementById("theta").innerHTML=="product_id already exists") 
           return false;
	  else
		  return true;
  }
  
  function openinsertionsuccessfully()
  {
	  document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div24").style.visibility="visible";
	  document.getElementById("div25").style.visibility="visible";
	  document.getElementById("anchor11").style.visibility="visible"; 
  }
 
  function closeinsertionsuccessfully()
  {
	  document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div24").style.visibility="hidden";
	  document.getElementById("div25").style.visibility="hidden";
	  document.getElementById("anchor11").style.visibility="hidden"; 
  }
  
  function subtractionvalidation(str)
  {
	  var x=document.getElementById(str).value;
	  var y=document.getElementById("idwhere1").value;
	  
	  z=y+" "+x;
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.open("GET", "subtractionvalidation.php?q="+z, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                t= this.responseText;
				//document.getElementById("theta1").innerHTML=t;	
				if(t=="no")
					document.getElementById("theta1").innerHTML="stock to be subtacted can not be greater than stock available";
	             else
			         document.getElementById("theta1").innerHTML="";		 
            }
			
		}
  }
  
  function subtractionformvalidation()
  {
	 if(document.getElementById("theta1").innerHTML=="stock to be subtacted can not be greater than stock available") 
           return false;
	  else
		  return true;  
  }
 
  
  </script>
  </head>
<body>
<table class="table table-hover" style="position:fixed; z-index:999;">
 <thead>
    
   <tr style="z-index:400;"><th></th><th colspan=4 id="beta">Stock Data</th></tr>
   <th>
   <button class="btn btn-primary btn-md" onclick="searchbyiddialogbox()">Search By Product Id</button></th>
   <th><button class="btn btn-primary btn-md" onclick="searchbyproductnamedialogbox()">Search By Product Name</button></th>
   <th colspan=4><button class="btn btn-primary btn-block" onclick="newitemadditionbox()">ADD NEW ITEM TO LIST</button></th>
   </tr>
   <tr>
   <th><button class="btn btn-success btn-md" onclick="showorderingdialogbox()">Sorting of total stocks</button></th>
   <th><button class="btn btn-success btn-md" onclick="showgroupingdialogbox()">Sorting of partial stocks</button></th>
   <th>
   <button class="btn btn-success btn-md" onclick="showprintdialogbox();">Print Report</button></th>
   <th><button class="btn btn-success btn-md" onclick="showhistorydialogbox()">History</button></th>
   <th><a href="logout1.php" class="btn btn-success btn-md" >Logout</a></th>
   </tr>
    <tr>
      <th scope="col">Product Id</th>
      <th scope="col" style="position:relative;left:-190px;">Product Name</th>
      <th scope="col"style="position:relative;left:-250px;">Stock available</th>
      <th scope="col" id="beta1" colspan=3 style="position:relative;left:-125px;">MODIFICATIONS OPTIONS</th>
    </tr>
  </thead>
</table>  

<?php

  if(isset($_POST['sorting']) and isset($_POST['sorting_type']))
{
	$sortby=$_POST['sorting'];
	$sorttype=$_POST['sorting_type'];
}
else
{
	$sortby="product_id";
	$sorttype="ASC";
}



 $conn=oci_connect("aditya","aditya","localhost/XE");
 if(isset($_POST['grouping']) and isset($_POST['criteria']) and isset($_POST['ordertype']) and isset($_POST['criteria1']))
 {
	 if($_POST['criteria']=="greaterthan")
	 $criteria=">";
     else if($_POST['criteria']=="lessthan")
	 $criteria="<";
     else 
	  $criteria="=";
    $query="select * from stock where no_of_items ".$criteria." ".$_POST['grouping']." order by ".$_POST['criteria1']." ".$_POST['ordertype'];
 }
 else
 $query="select * from stock order by $sortby"." "."$sorttype";
 $r=oci_parse($conn,$query);
 $w=oci_execute($r);
 
 echo "<div id=\"tablebox\">";
 echo "<table class=\"table table-hover\">";

 
 
 $s=oci_parse($conn,$query);
 $x=oci_execute($s);
 $gamma=array();
 while($row1=oci_fetch_array($s,OCI_NUM))
 {
	 $row1[0]=$row1[0]*7;
	 array_push($gamma,$row1[0]);
 }	 
$x=0;
while($row=oci_fetch_array($r,OCI_ASSOC))
{

	echo "<tr id=\"$gamma[$x]\" onclick=\"colorRectification(this.id)\">";
	
	$n=0;
	$counter=0;
	foreach($row as $item)
	{
	    if($n==0)	{
		$counter=$item;$n=1;}
		echo "<td scope=\"col\">$item</td>";
	}
	$alpha=$counter*100;
	$beta=$counter*500;
     echo "<td><button class=\"btn-success\" id=\"$counter\" onclick=\"stockaddition(this.id);\" style=\"position:relative; left:70px;\">Add</button></td>";
	 echo "<td><button class=\"btn-info\" id=\"$alpha\" onclick=\"stocksubtraction(this.id)\" style=\"position:relative; left:70px;\">Subtract</button></td>";
	 echo "<td><button class=\"btn-danger\" id=\"$beta\" onclick=\"deleteitem(this.id)\" style=\"position:relative; left:70px;\">Delete</button></td>";
	echo "</tr>";
    $x++;
       		
	
}	
 echo "</table>";
 
 echo "</div>"
 
?>







<div id="div2">
</div>

<div  id="div1">
<p id="anchor1" style="float:right;position:relative;right:6px;" onclick="closeaddition()" onmouseover="Mouseover1()" onmouseout="Mouseout1()">X</p>
<p id="p1"></p>
<p id="p2"></p>
<div id="div3">
<form action="add.php" method="post">
<label>Enter the no of items to be added</label>
<input type="number" min=1 required  name="addvalue" id="addvalue"/>
<input type="string" id="idwhere" name="idwhere" style="visibility:hidden;" value="5">
<button onclick="additionofstock(this.id)" id="add">Add</button>
</form>
</div>
</div>



<div  id="div4">
<p id="anchor2" style="float:right;position:relative;right:6px;" onclick="closesubtraction()" onmouseover="Mouseover2()" onmouseout="Mouseout2()">X</p>
<p id="p4"></p>
<p id="p5"></p>
<div id="div5">
<form action="subtract.php" method="post" onsubmit="return subtractionformvalidation()">
<label>Enter the no of items to be subtracted</label>
<input type="number" min=1 required  name="subtractvalue" id="subtractvalue" onchange="subtractionvalidation(this.id)" />
<input type="text" id="idwhere1" name="idwhere1" style="visibility:hidden;" value="5">
<p id="theta1" style="color:red;"></p>
<button onclick="subtractionofstock(this.id)" id="subtract" style="position:relative;left:160px;top:-13px;">Subtract</button>
</form>
</div>
</div>

<div  id="div6">
<p id="anchor3" style="float:right;position:relative;right:6px;" onclick="closedeletion()" onmouseover="Mouseover3()" onmouseout="Mouseout3()">X</p>
<p id="p6"></p>
<div id="div7">
<form action="delete.php" method="post">
<label>Do you want to delete item from stock list????</label>
<input type="string" id="idwhere2" name="idwhere2" style="visibility:hidden;" value="5">
<button onclick="deletionofstock(this.id)" id="delete" style="position:absolute;left:85px;bottom:10px;">Yes</button>
</form>
<button onclick="closedeletion()" style="position:relative;left:150px; bottom:10px;">No</button>
</div>
</div>


<div  id="div8">
<p id="anchor4" style="float:right;position:relative;right:6px;" onclick="closeinsertion()" onmouseover="Mouseover4()" onmouseout="Mouseout4()">X</p>
<div id="div9">
<h3 style="text-decoration:underline; position:relative;bottom:75px;">NEW ITEM ADDITION IN STOCK</h3>
<form action="insertion.php" onsubmit="return validation1()" method="post" >
<label>PRODUCT ID</label>
<input type="number" name="product_id" id="product_id1" required onchange="validation()" /><p id="theta" style="color:red; position:relative;left:200px; "></p><br/>
<label>PRODUCT NAME</label>
<input type="text" required name="product_name" /><br/><br/><br/>
<label>STOCK AVAILABLE</label>
<input type="number" min=0 required name="stockavailable" /><br/><br/><br/>
<input type="submit"  style="position:absolute;left:180px; bottom:-10px;">
</form>
</div>
</div>

<div  id="div10">
<p id="anchor5" style="float:right;position:relative;right:6px;" onclick="closesearchbyiddialogbox()" onmouseover="Mouseover5()" onmouseout="Mouseout5()">X</p>
<div id="div11">
<label>Enter the Productid to be searched</label>
<input type="number" id="product_id" required /><br/><br/><br/>
<button onclick="searchbyid()" style="position:relative;left:170px;top:-20px;">Search</button>
</div>
</div>

<div  id="div12">
<p id="anchor6" style="float:right;position:relative;right:6px;" onclick="closesearchbyproductnamedialogbox()" onmouseover="Mouseover6()" onmouseout="Mouseout6()">X</p>
<div id="div13">
<label>Enter the ProductName to be searched</label>
<input type="text" name="product_name" id="product_name" required /><br/><br/><br/>
<button onclick="searchbyproductname()" style="position:relative;left:170px;top:-20px;">Search</button>
</div>
</div>

<div  id="div14">
<p id="anchor7" style="float:right;position:relative;right:6px;" onclick="closenotfound()" onmouseover="Mouseover6()" onmouseout="Mouseout6()">X</p>
<div id="div15">
<img src="notfound.jpg" width="90px" style="position:relative;top:45px;left:100px;" >
<button onclick="closenotfound()" style="position:relative;top:120px;left:35px;">OK</button>
</div>
</div>

<div  id="div16">
<p id="anchor8" style="float:right;position:relative;right:6px;" onclick="closeorderingdialogbox()" onmouseover="Mouseover7()" onmouseout="Mouseout7()">X</p>
<div id="div17">
<form action="stock.php" method="post">
<label>Select the criteria on which you want ordering</label><br/>
<input type="radio"  required  name="sorting" id="productid" checked value="product_id" />Product id<input type="radio" required name="sorting" id="productname" value="product_name" />Product Name
<input type="radio" required name="sorting" id="no_of_items" value="no_of_items">Stock Available<br/><br/><br/>
<label>Select the type of sorting</label><br/>
<input type="radio" required name="sorting_type" id="sorting_type" checked value="ASC" />Ascending<input type="radio" required name="sorting_type" id="sorting_type" value="DESC" />Descending<br/><br/>
<input type="submit" value="Sort" />
</form>
</div>
</div>

<div  id="div18">
<p id="anchor9" style="float:right;position:relative;right:6px;" onclick="closegroupingdialogbox()" onmouseover="Mouseover8()" onmouseout="Mouseout8()">X</p>
<div id="div19">
<form action="stock.php" method="post">
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
<input type="submit" value="Group" />
</form>
</div>
</div>

<div  id="div20">
<p id="anchor10" style="float:right;position:relative;right:6px;" onclick="closehistoryingdialogbox()" onmouseover="Mouseover9()" onmouseout="Mouseout9()">X</p>
<div id="div21">
<form action="history.php" method="post" target="_blank">
<label>Enter the date</label><br/>
<input type="date"  required  name="historydate"  id="historydate" /><br/><br/>
<input type="submit" style="position:relative;left:40px;">
</form>
</div>
</div>


<div  id="div22">
<p id="anchor10" style="float:right;position:relative;right:6px;" onclick="closeprintdialogbox()"  onmouseover="Mouseover10()" onmouseout="Mouseout10()">X</p>
<div id="div23">
<form action="print.php" method="post" target="_blank">
<label style="position:relative;top:15px; left:25px;">Do you want to print item from stock list????</label><input type="number" value="5" style="visibility:hidden;" name="confirm" /><br/><br/>
<button  style="position:relative;left:80px;top:10px;">Yes</button>
</form>
<button style="position:relative;left:220px;top:-17px;" onclick="closeprintdialogbox()">No</button>
</div>
</div>

<div  id="div24">
<p id="anchor11" style="float:right;position:relative;right:6px;" onclick="closeinsertionsuccessfully()">X</p>
<div id="div25">
<h4 style="position:relative;top:50px;">ITEM INSERTED SUCCESSFULLY</h4>
<button onclick="closeinsertionsuccessfully()" style="position:relative;top:90px;left:120px;">OK</button>
</div>
</div>

<script>
var x=<?php if(isset($y)) echo $y; else echo 0;   ?>;
if(x==10)
	openinsertionsuccessfully();


</script>
</body>
</html>
<?php
if(isset($_SESSION['username']) and $_SESSION['username']!="iop")
session_unset(); 
//destroy the session 
 
?>


