<?php
$conn = mysqli_connect("localhost","root","","php");
if($conn === false)
{
    die("Error: could not connect ".mysqli_connect_error());
}
$sql ="select *from test";
if($result =mysqli_query($conn,$sql))
{
    $cont=mysqli_num_rows($result);
    if($cont>0)
    {
        echo "<table border =1>";
        echo "<tr>";
        echo "<th>id </th>";
        echo "<th>Firstname </th>";
        echo "<th>lastname </th>";
        echo "<th>number</th>";
        echo "<th>password </th>";
        echo "<th>city </th>"; 
        echo "<th>address </th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['firstname']."</td>";
            echo "<td>".$row['lastname']."</td>";
            echo "<td>".$row['number']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['city']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    
    }
    else
    {
        echo "no record matching";
    }
}
else
{
    echo "error could not able to execute $sql". mysqli_error($conn);
}
mysqli_close($conn)
?>