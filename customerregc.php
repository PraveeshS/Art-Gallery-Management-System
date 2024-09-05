
<?php

include('conn.php');
if (isset($_REQUEST['password'])) {
    $sql = "SELECT cid FROM customer where cid='" . $_REQUEST['username'] . "'";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        "
             <script>
               alert('Username already exist');
             </script>
             ";
    } else {

        if ($_REQUEST['username'] != "" || $_REQUEST['password'] != "") {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $name=$_POST['name'];
            $address=$_POST['address'];
            $dob=$_POST['dob'];
            $sql = "insert into `customer` (`cid`,`password`,`name`,`address`,`dob`) VALUES 
            ('$username','$password','$name','$address','$dob')";
            $conn->query($sql);
            header("Location: customerlogin.php");
        } else {
            "
             <script>
               alert('Fill');
             </script>
             ";
        }
    }
}
?>
