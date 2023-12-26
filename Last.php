<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Program Of PHP</title>
</head>
<body>
   <?php 
   $nameErr=$emailErr=$gender=$class=$cours=$subject;
   if($_SERVER["request_method"]=="post")
   {
    if(empty($_POST['name']))
    {
        $nameErr="name is required";
    }
    else
    {
        $name=test_input($_POST['name']);

    }
    if(empty($_POST['email']))
    {
        $emailErr="email is required";

    }
    else
    {
        $email=test_input($_POST['email']);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailErr="invalid Email Format";
        }
    }
    if(empty($_POST['course']))
    {
        $coursErr="course is required";
    }
    else
    {
        $course=test_input($_POST['course']);

    }
    if(empty($_POST['class']))
    {
        $classErr="class is required";
    }
    else
    {
        $class=test_input($_POST['class']);

    }
    if(empty($_POST['gender']))
    {
        $genderErr="gender is required";
    }
    else
    {
        $gender=test_input($_POST['gender']);

    }

    if(empty($_POST['subject']))
    {
        $subjectErr="subject is required";
    }
    else
    {
        $subject=test_input($_POST['subject']);

    }
    function test_input($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

   }
   ?> 
   <h2>Absolute Class Registration</h2>
   <p><span class="error">*required fields</span></p>
   <form action="<?php echo htmlspecialchars($_)?>" method="post"></form>
</body>
</html>