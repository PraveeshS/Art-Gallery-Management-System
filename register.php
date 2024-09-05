<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <?php

    include('connection.php');
    if (isset($_REQUEST['Password'])) {
        $sql = "SELECT customer_id FROM customer where customer_id='" . $_REQUEST['username'] . "'";
        $res = $conn->query($sql);

        if ($res->num_rows == 1) {
            echo "email already existed";
        } else {

            if ($_REQUEST['username'] != "" || $_REQUEST['Password'] != "") {
                $email = $_REQUEST['email'];
                $username = $_REQUEST['username'];
                $pass = $_REQUEST['Password'];
                $sql = "INSERT INTO `customer` (`customer_id`, `customer_name`, `password`) VALUES  (' $email','$username','$pass')";
                $conn->query($sql);
            } else {
                echo "fill";
            }
        }
    }
    ?>
    <div class="container">
        <h1>Create account</h1>
        <form action="" method="post">
            <p>email address</p>
            <input type="email" name="email" id="id" placeholder="enter your email id">
            <p>Username</p>
            <input class="text-box" type="text" name="username" id="name" placeholder="Enter your username">
            <p>password</p>
            <input type="password" name="Password" id="password" placeholder="Enter the password">

            <input type="submit" name="button" value="Create account">

        </form>
        <a href="index.php">back</a>


    </div>

</body>

</html>