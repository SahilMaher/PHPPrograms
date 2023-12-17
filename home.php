<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <?php
   // error_reporting(0);
    if(isset($_GET['Go'])   ) 
    { 
             
    ?>
    <center>
    <h1>Hello There</h1>
    <?php
        if($_GET['password']!=null)
        {
            $pass=$_GET['password'];
            setcookie("password",$pass,time()+(86400*30),"/");
    
        }
      
    $unm=$_GET['username'];
    $dbnm=$_GET['database'];
    $host=$_GET['hostname'];
    $pass=$_GET['password'];
  
    setcookie("username",$unm,time()+(86400*30),"/");
    setcookie("hostname",$host,time()+(86400*30),"/");
    setcookie("database",$dbnm,time()+(86400*30),"/");
    if(!isset($_COOKIE[$unm] ) && !isset($_COOKIE[$host] ) && !isset($_COOKIE[$dbnm] ))
    {
        echo("ERROR:cookie is not created <a href='index.html'>try again</a>");
    }
    else
    {
        try{
        $con=mysqli_connect("$host","$unm","$pass","$dbnm");
        }
        catch(Exception $e)
      {
            die("ERROR:Hey Champ Something Wrong <a href='index.html'>try again</a> ");
        }
      
            header("location:main.php");
        

    }


    }

  ?>
    </center>

</body>
</html>