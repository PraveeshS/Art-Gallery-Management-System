
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="customerlogin1.css">
</head>
<body>
    <div>
        <div id="body1">
            <div class="title"> <h1><a href="home.html" > Art Gallery Managment System</a></h1> </div>
            <div class="top"><h3><a href="home.html" > Home</a></h3></div>
            <div class="top"><h3><a href="aboutus.html" > About us</a></h3></div>
            <div class="top"><h3><a href="contact.html" > Contact</a></h3></div>
            <div class="top"><h3><a href="customerlogin.php" > Customer</a></h3></div>
            <div class="top"><h3><a href="adminlogin.html" > Admin</a></h3></div>
            

        </div>
        <div id="body2">
            
            <div class="Admin">
                <h1 id="logfont">Customer login</h1>
                <form method="POST" action="customerlogc.php">
                  <br>
                  <input type="text" name="username" placeholder="Enter Username">
                  <br>
                  <input type="password" name="password" placeholder="Enter Password"><br>
                  <br>
                  <input type="submit" name="submit" value="Login">
                  <h4><a href="customerregister.html" >Register here</a></h4>
                </form>
              </div>
        </div>
    </div>
</body>
</html>