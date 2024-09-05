<?php
include('conn.php');
if(isset($_POST['username']))
{
   $username=$_POST['username']; 
   $password=$_POST['password'];

$sql = "SELECT * FROM customer WHERE cid='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    session_start();
    $_SESSION["logged_in"] = true;
    $_SESSION["username"] = $username;
    header("Location: Customer/customerfront.php?cid=".$username);
} else {
    // Login failed
    echo
             "
             <script>
               alert('Invalid Username or Password');
             </script>
             ";
             
}

$conn->close();

 }
 
?>