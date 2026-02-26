<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "curd") or die("Connection Failed");//step 1 connect database
    $sql = "SELECT * FROM student JOIN studentclass WHERE student.s_class = studentclass.c_id";//step 2 write query
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");//step 3 execute query
    if (mysqli_num_rows($result) > 0) {
       
    
    ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {//step 5 fetch data
            ?>
            <tr>
                <td><?php echo $row['s_id']; ?></td>
                <td><?php echo $row['s_name']; ?></td>
                <td><?php echo $row['s_address']; ?></td>
                <td><?php echo $row['c_name']; ?></td>
                <td><?php echo $row['s_phone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['s_id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['s_id']; ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
            <!-- <tr>
                <td>2</td>
                <td>Suresh</td>
                <td>Punjab</td>
                <td>BCOM</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Suresh</td>
                <td>Haryana</td>
                <td>BSC</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Krishna</td>
                <td>Gujrat</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Rohit</td>
                <td>Delhi</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr> -->
           
        </tbody>
    </table>
    <?php
    } else {
        echo "<h2>No Record Found.</h2>";//step 7 if no data found
    }
    mysqli_close($conn);//step 8 close connection
    ?>
</div>
</div>
</body>
</html>
