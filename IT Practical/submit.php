<?php
    $con = mysqli_connect("localhost", "root", "", "practical_11");
    if(!$con) {
        die("Connection Failed;)".mysqli_connect_error());
    }
    
    else {
        $name = $_POST['NAME'];
        $age = $_POST['AGE'];
        $phone = $_POST['PHONE'];
        $gender = $_POST['GENDER'];
        $password = $_POST['PASSWORD'];

        $sql = "INSERT INTO `login` ( `Name`, `Age`, `Phone`, `Gender`, `Password`)
        VALUES ( '$name', '$age', '$phone', '$gender', '$password');";
        
        $con->query($sql);

        echo'<script>alert("Successfull!"); window.open("C:\Users\d9vya\Desktop\IT Practical\Practical_11.html");</script>';
    }
?>
