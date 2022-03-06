<?php
$con=mysqli_connect("localhost","root","","HTMS");
if($con===false)
{
die("ERROR: coulld not connect. ".mysqli_connect_error());
}
echo "Connection successfull "
?>