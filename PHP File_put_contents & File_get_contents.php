<?php
// These are use as a shorthand of fopen fread fwrite fclose
/* The file_put_contents() writes data to a file. 
Syntax :file_put_contents(filename, data, mode, context) */

//echo file_put_contents("file.txt","\nNew Line.",FILE_APPEND | LOCK_EX);

/* The file_get_contents() reads a file into a string.
Syntax: file_get_contents(path, include_path, context, start, max_length) */

echo file_get_contents("file.txt",false,NULL,0,10);
?>