<?php
//PHP FileSystem Is Functions ya ture ya false retun karta han
if(is_file("file.txt")){
    echo "Yes it is File.";
}else{
    echo "No it is not a File.";
}

echo "<br>";

if(is_dir("file.txt")){
    echo "Yes it is Folder.";
}else{
    echo "No it is not a Folder.";
}

echo "<br>";

if(is_writeable("file.txt")){
    echo "Yes it is Writeable.";
}else{
    echo "No it is not a Writeable.";
}

echo "<br>";

if(is_readable("file.txt")){
    echo "Yes it is Readable.";
}else{
    echo "No it is not a Readable.";
}

echo "<br>";

// its is for only exe file
if(is_executable("file.txt")){
    echo "Yes it is Executable.";
}else{
    echo "No it is not a Executable.";
}
?>