<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table file</title>
</head>
<body>
    <form method="get" action="data.php">
    <?php
    try
    {
    $db=$_COOKIE['database'];
    $unm=$_COOKIE['username'];
    $pass="";
    $host=$_COOKIE['hostname'];
    if(isset($_COOKIE['password']))
    {
        $pass=$_COOKIE['password'];

    }
    }
    catch(Exception $e)
    {
        echo"Opps Cookie Not Fond <a href='index.html'>try again</a>:-$e";
    }
    try
    {
    $con=mysqli_connect("$host","$unm","$pass","$db");
    if($con===false)
    {
        echo("ERROR:connection");
    }
   $query=mysqli_query($con,"show tables from $db");
   $num=0;
   echo "<center><h4>Select the table for Operation</h4>";
   while($res=mysqli_fetch_array($query))
   {
   
    echo "<input type='radio' value='$res[$num]' name='tabs'>$res[$num]<br>";
   
    
   }
   echo"<input type='submit' value='Go'>";
   }
   catch(Exception $e)
   {
    Echo "Connection Problem  $e";
   }

 
    ?>
    </form>
</body>
</html>