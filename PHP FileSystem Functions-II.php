<?php

$file = fopen("file.txt","r");// r means read mode 

//echo fread($file,100); // second parameter means how much length to read
echo fread($file,filesize("file.txt"));//it reads whole file content

//echo fgets($file);// show only one line and cursor move at end of line 
//echo ftell($file);// show cursor location
// echo fgets($file);// cursor move two next line

// fseek($file,15);// change cursor position
// echo fgets($file);

//echo fpassthru($file); // ya cursor ka bad jo bhi complete file ha wo show kar da ga
//rewind($file);// ya cursor ko start ma la jyga

// feof means file end of file in while loop ma ya ha ka 
// jab tak file ka end nahi aya jtaa ya sab line ko display karta rayah
// while(!feof($file)){
//     $line = fgets($file);
//     echo $line . "<br>";
// }

//echo fgetc($file);// prints only one character

// echo "<pre>";
// print_r(file("file.txt"));// ya jo bhi file ma line hogi usay array item bna da ga
// echo "</pre>";

// Write karnay ka tariqay
//$file = fopen("file.txt","r+"); // r+ read / write karsakta ha or new content ko start sa exit conent ma override kar data ha

//$file = fopen("file.txt","w+"); // w+ new content ko exist content ka sath sara replace kar da ga

//$file = fopen("file.txt","a+"); // a+ append ya exist content ma kuch replace nahi karayga ya us ka end ma new content jo dana ha wo add kar da ga

//fwrite($file,"This is New Line");

//ftruncate($file,100);// ya file ka 100 character ko chor ka sab del kar da ga

// End ma file close karna lazmii ha
fclose($file);
?>