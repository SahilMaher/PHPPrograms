<?php
$link= mysqli_connect("localhost","root","","php");
if($link === false)
{
    die("database connection error" . mysqli_connect_error());
}
else
{
    echo"worked";
}
$fnm = $_POST['firstname'];
$lnm =$_POST['lastname'];
$num =$_POST['number'];
$ps  =$_POST['password'];
$ct  =$_POST['city'];
$ad  = $_POST['address'];


$sql ="insert into test values('','$fnm','$lnm',$num ,'$ps ','$ct','$ad')";
if(mysqli_query($link,$sql))
{
    echo "data insert sucess";
}


?> 
