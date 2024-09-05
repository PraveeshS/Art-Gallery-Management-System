

<?php

    include('conn.php');
    if (isset($_REQUEST['password'])) {
        $sql = "SELECT cid FROM customer where cid='" . $_REQUEST['username'] . "'";
        $res = $conn->query($sql);

        if ($res->num_rows == 1) {
            echo "email already existed";
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
            } else {
                echo "fill";
            }
        }
    }
    ?>
