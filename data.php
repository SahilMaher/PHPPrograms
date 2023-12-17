<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            font-size: 20px;
        }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$table=$_GET['tabs'];

setcookie("table",$table,time()+(86400*30),"/");
$host=$_COOKIE['hostname'];
$pass="";
$unm=$_COOKIE['username'];
$pass=isset($_COOKIE['password']);


$db=$_COOKIE['database'];

$con=mysqli_connect("$host","$unm","$pass","$db");
$query=mysqli_query($con,"show columns from $table ");
$row=mysqli_num_fields($query);

$num=$row-1;
echo"<center>";
echo"<table frame='box' border='1'><tr>
<td colspan='$num'>
This is $table Table
</tr><tr>";
while($res=mysqli_fetch_array($query))
{
    echo"<th>";

    echo$res[0]."";
   
    echo"</th>";
}
echo"<th>operations</th>";
echo"</tr>";
$query=mysqli_query($con,"select * from $table ");
$row=mysqli_num_fields($query);

$num=0;

while($res=mysqli_fetch_array($query))
{
    echo"<tr>";
for($i=0;$i<$row;$i++)
{
    echo"<td>";
    echo$res[$i]." ";
   echo"</td>";
    
}
echo"<td><a href='update.php?d=$res[id]'><input type='button' value='Update'></td>";
echo"</tr>";
}
echo"</table>";
echo"</center>";

?>