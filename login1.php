
<?php
if($_SERVER['REQUEST_URI']=='/projectwork/login1.php?q=5')
{
	$n=1;
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
	  margin:35px;
	  padding:5px;
	  border:2px solid black;
	  background-image:url("business.jpg");
  }
  #div1
  {
	  width:500px;
	  height:400px;
	  background-color:black;
	  opacity:0.5;
	  position:relative;
	  left:390px;
  }
  
  #div2
  {
	  position:relative;
	  left:430px;
	  top:-300px;
  }
  .text
  {
	  color:rgb(191,156,16);
  }
  input
  {
	  width:32%;
  }

      #div14
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
         #div15
  {
	  position:absolute;
	  top:0px;
	  left:6px;
	  
  }
  </style>
  <script>
  function opennotfound()
 {
	 //document.getElementById("div2").style.visibility="visible";
	  document.getElementById("div14").style.visibility="visible";
	  document.getElementById("div15").style.visibility="visible";
	  document.getElementById("anchor7").style.visibility="visible"; 
 }
 
 function closenotfound()
 {
	 //document.getElementById("div2").style.visibility="hidden";
	  document.getElementById("div14").style.visibility="hidden";
	  document.getElementById("div15").style.visibility="hidden";
	  document.getElementById("anchor7").style.visibility="hidden";
      window.location.href = "http://localhost/projectwork/login1.php";
     
 }
  </script>
  
  
</head>
<body>
<h1 style="text-align:center;text-decoration:underline;background-color:rgb(41,165,134); ">STOCK MANAGEMENT PROJECT</h1>
<div id="div1">
</div>
<div id="div2">

<form action="validation1.php" method="post">
<label class="text">LoginId</label><br/><br/>
<input type="text" name="username" placeholder="LoginId"><br/><br/><br/><br/>
<label class="text">Password</label><br/><br/>
<input type="password" name="password" placeholder="Password"><br/><br/><br/>
<input type="submit" value="Login">
</form>
</div>

<div  id="div14">
<p id="anchor7" style="float:right;position:relative;right:6px;" onclick="closenotfound()" onmouseover="Mouseover6()" onmouseout="Mouseout6()">X</p>
<div id="div15">
<p style="font-size:20px; position:relative;top:45px;left:20px;">Invalid login credentials</p>
<button onclick="closenotfound()" style="position:relative;top:80px;left:105px;">OK</button>
</div>
</div>
<script>
   var x=<?php if(isset($n)) echo $n; else echo 0;?>;

   if(x==1)
   {
	   opennotfound();
	   
   }
  </script>


</body>
</html>