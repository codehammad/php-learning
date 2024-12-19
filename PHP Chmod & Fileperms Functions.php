<?php
// PHP Chmod & Fileperms Functions (chmod is used to chnage premission given in octal form) (fileperms is used to check file premissions usually it is convert into octal form)

echo substr(decoct(fileperms("file.txt")),2); // decoct covert to octal form //substr to display last 4 values

// chmod not properly work in windows
// The chmod() function changes permissions of the specified file.
chmod("file.txt",0000);   //first 0 ignore karo last three dakho

// Read and write for owner, nothing for everybody else
//chmod("file.txt",0600);

// Read and write for owner, read for everybody else
//chmod("file.txt",0644);

// Everything for owner, read and execute for everybody else
//chmod("file.txt",0755);

// Everything for owner, read for owner's group
//chmod("file.txt",0740);
?>