<center>
<?php
$num=$_GET['d'];

$host=$_COOKIE['hostname'];
$unm=$_COOKIE['username'];
$db=$_COOKIE['database'];
$pass="";
$table=$_COOKIE['table'];
$pass=isset($_COOKIE['password']);
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
$query=mysqli_query($con,"select * from $table where id=$num ");
$row=mysqli_num_fields($query);
echo$row;
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

echo"</tr>";
}
echo"</table>";
echo"</center>";
?>
</center>