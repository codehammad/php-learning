<?php
/* $_FILES['file']['name'] - The original name of the file to be uploaded.
$_FILES['file']['type'] - The mime type of the file.
$_FILES['file']['size'] - The size, in bytes, of the uploaded file.
$_FILES['file']['tmp_name'] - The temporary filename of the file in which the uploaded file was stored on the server.
$_FILES['file']['error'] - The error code associated with this file upload.
 */

/* move_uploaded_file() function moves an uploaded file to a new destination.
Syntax
move_uploaded_file(file, dest)*/

if(isset($_FILES["image"])){
  echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    // echo $_FILES['image']['name'];//to print array value
    $file_name = $_FILES["image"]["name"];
   $file_size = $_FILES["image"]["size"];
   $file_tmp = $_FILES["image"]["tmp_name"];
    $file_type = $_FILES["image"]["type"];

    if(move_uploaded_file($file_tmp, "upload-images/" . $file_name)){
    	echo "Succesfully Uploaded";
    }else{
    	echo "Upload Failed";
    }
}

?>
<html>
<body>
<form action="" method="POST" enctype="multipart/form-data"><!--Form ko entype="multipart/form-data" ya dana lazmi ha jab input type="file" ho-->
        <input type="file" name="image" /><br><br>
        <input type="submit" />
    </form> 
</body>
</html>