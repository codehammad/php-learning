<?php
try{
    $db_name = "mysql:host=localhost;dbname=mydb";
    $username = "root";
    $password = "";

    $conn = new PDO($db_name, $username, $password);

    $sql = $conn->prepare("SELECT * FROM student");
    $sql->execute();

    $error = $sql->errorInfo();
}catch(PDOException $e){
    echo $e->getMessage();
}

if($error[1]){
    echo $sql->errorCode();
    echo $error[2];
}else{
    $result = $sql->FetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($result);
    echo "</pre>";
}
?>