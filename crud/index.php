<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    // Database
    $conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed");

    // SQL query
    $sql = "SELECT * 
            FROM student s 
            JOIN studentclass c ON s.sclass = c.cid";
    $result = mysqli_query($conn, $sql) or die("Query Failed");

    // mysqli_num_rows for checking total rows
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
                // mysqli_fetch_assoc for fetching data of associative array
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["sid"] ?></td>
                        <td><?php echo $row["sname"] ?></td>
                        <td><?php echo $row["saddress"] ?></td>
                        <td><?php echo $row["cname"] ?></td>
                        <td><?php echo $row["sphone"] ?></td>
                        <td>
                            <a href='edit.php?id=<?php echo $row["sid"] ?>'>Edit</a>
                            <a href='delete-inline.php?id=<?php echo $row["sid"] ?>'>Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
        echo "<h3>No Results Found</h3>";
    }
    
    // Close database
    mysqli_close($conn);
    ?>
</div>
</div>
</body>

</html>