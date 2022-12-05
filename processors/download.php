<?php

if(isset($_GET['path']))
{
//Read the filename
$filename = $_GET['path'];


//Read the size of the file
readfile($filename);

//Terminate from the script
die();
}
else{
echo "File does not exist.";
}
