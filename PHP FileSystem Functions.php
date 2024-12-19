<?php
$file = "file.txt";

if (file_exists($file)) {
    //readfile("file.txt");

    //copy($file , "newfile.txt");
    //rename("newfile.txt","myfile.txt");
    //unlink("myfile.txt");
    //delete("myfile.txt");
}else{
    echo "File Does not Exits.";
}

//if (!file_exists("textfolder"))
// if (file_exists("textfolder")) {
//     mkdir("textfolder");
//     rmdir("textfolder");
// }else{
//     echo "<br>FOlder Already Exits.";
// }

//echo filesize($file);
//echo filetype($file);

//echo realpath($file);

 $path= realpath($file);
// echo "<pre>";
// print_r(pathinfo($path,PATHINFO_BASENAME));// return array
// echo "</pre>";

echo basename($path);
echo "<br>";
echo dirname($path);
?>