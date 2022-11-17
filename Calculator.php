<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width", initial-scale="1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Portfolio.php">Portfolio</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="Calculator.php">Calculator</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
  </div>
</nav>




  
<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];
$n2 = $_REQUEST['second_value'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
 
if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
}
}
?>
 
<form>
<table style="border:groove #00FF99">
 
<tr>
<td style="background-color:turquoise; color:black; font-family:'Times New Roman'">Enter Number</td>
<td colspan="1">
<input name="first_value" type="text" style="color:red"/></td>
</tr>
 
<tr>
<td style="color:red; font-family:'Times New Roman'">Select Operator</td>
<td>
<select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
</tr>
 
<tr>
<td style="background-color:turquoise; color:black; font-family:'Times New Roman'">Enter Number</td>
<td class="auto-style5">
<input name="second_value" type="text"  style="color:red"/></td> 
</tr>
 
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>	 
</tr>
 
<tr>
<td style="background-color:turquoise;color:black">Output = </td>
<td style="color:darkblue"><?php echo $res;?></td>
</tr>	
 
</table>
</form>
 <script>
     https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js
 </script>
</body>
</html>
   