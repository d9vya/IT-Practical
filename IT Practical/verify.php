<?php
    $con = mysqli_connect("localhost", "root", "", "practical_11");

    if(!$con) {
        die("Connection Failed;)".mysqli_connect_error());
    }
    
    else {
        $s1 = 0;
        $s2 = 0;

        $phone = $_POST['PHONE'];
        $password = $_POST['PASSWORD'];

        $sql = "SELECT `phone`,`password` FROM `login`;";
        $row = mysqli_query($con,$sql);

        while($one = mysqli_fetch_array($row)){
            if($one[0] == $phone) {
                $s1 = 1;
            
                if($one[1] == $password) {
                    $s2 = 1;
                    break;
                }
            }
        }
        
        if($s1 == 1 && $s2 == 1) {
            echo '<script>alert("Welcome");</script>';
        }

        else {
            echo '<script>alert("No Data Found!"); window.open("C:\Users\d9vya\Desktop\IT Practical\Practical_11","_self");</script>';
        }
    }
?>
 
