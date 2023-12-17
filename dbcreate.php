<?php
   // error_reporting(0);
    if(isset($_GET['Create']))  
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
    $host=$_GET['hostname'];
    $pass=$_GET['password'];
    $db=$_GET['database'];
    setcookie("username",$unm,time()+(86400*30),"/");
    setcookie("hostname",$host,time()+(86400*30),"/");
    setcookie("database",$db,time()+(86400*30),"/");


   
    if(!isset($_COOKIE[$unm] ) and !isset($_COOKIE[$host] ) and !isset($_COOKIE[$db] ))
    {
        echo("ERROR:cookie is not created <a href='index.html'>try again</a>");
    }
    else
    {
        echo($_COOKIE[$unm]);
        echo($_COOKIE[$host]);

        echo($_COOKIE[$db]);

        echo($_COOKIE[$unm]);


        $con=mysqli_connect("$host","$unm","$pass");
        if($con===false)
        {
            echo("Error:Connection Not Found :-<a href='database.html'>Let's try again Champ</a>");
        }
        $query=mysqli_query($con,"create database $db");
        if($query)
        {
        header("location:main.php");
        }
        else
        {
            echo("Error:Invalid Quear:-<a href='database.html'>Let's try again Champ</a>");
        }
    }


    }
    else
    {
    header("location:database.html");
    }
?>