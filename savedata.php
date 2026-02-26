<?php

 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];


$conn = mysqli_connect("localhost", "root", "", "curd") or die("Connection Failed");//step 1 connect database
    $sql = "INSERT INTO student(s_name, s_address, s_class, s_phone) VALUES ('{$stu_name}', '{$stu_address}', {$stu_class}, '{$stu_phone}')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");//step 3 execute query


    header("Location: http://localhost/crud/index.php");//step 4 redirection


    mysqli_close($conn);//step 5 close connection
    

?>
