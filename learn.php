<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="banner">
        <h1>The logo</h1>
    </div>
    <br><br>
    <?php  

        $return_str = "";

        if ($_POST["uname"] == "Monique" && $_POST["pwd"] == "123") {
            $return_str = "Welcome To The Learning Space, ".$_POST["uname"];
        } else {
            $return_str = "Invalid Credentials !!";
        }

    ?>
    <center>
    <h1 style="color: white;"><?php echo $return_str ?></h1>
    <?php
        if ($return_str == "Invalid Credentials !!") {
            echo '<a href="login.html"><button style="background-color: red; color: white; width: 150px;"><b>Log In</b></button></a>';
        }
    ?>
    </center>
</body>
</html>