<?php
$myfile1=fopen("file1.txt","r");

$myfile2=fopen("file2.txt","r");

$content=file_get_contents("file1.txt") . file_get_contents("file2.txt");

$file3=fopen("file.txt","x+");
fwrite($file3,$content);

