<?php
try {
    // Define the database connection details
    $db_name = "mysql:host=localhost;dbname=mydb";  // Database name is 'mydb'
    $username = "root";  // Database username is 'root'
    $password = "";  // Database password is empty

    // Establish a connection to the MySQL database using PDO
    $conn = new PDO($db_name, $username, $password);

    // Start a transaction to ensure that all database operations are executed together
    $conn->beginTransaction();

    // Prepare an SQL query to insert a new student into the 'student' table
    $sql1 = $conn->prepare("INSERT INTO student (sname, saddress) VALUES (?, ?)");
    // Prepare an SQL query to update the 'city' table by incrementing the number of students in the specified city
    $sql2 = $conn->prepare("UPDATE city SET cstudents = cstudents + 1 WHERE cname = ?");

    // Execute the first SQL query: insert a new student (Madan Kumar, Goa)
    if (!$sql1->execute(["Madan Kumar", "Goa"])) {
        // If SQL1 fails, throw an exception
        throw new Exception('SQL 1 Failed');
    }
    // Execute the second SQL query: update the city of Goa, incrementing the number of students in that city
    if (!$sql2->execute(["Goa"])) {
        // If SQL2 fails, throw an exception
        throw new Exception('SQL 2 Failed');
    }

    // If both queries are successful, commit the transaction (save the changes)
    $conn->commit();
} catch (Exception $e) {
    // If any exception is thrown (e.g., query failure), rollback the transaction (undo all changes)
    $conn->rollback();
    // Output the error message for debugging
    echo $e->getMessage();
}
?>
