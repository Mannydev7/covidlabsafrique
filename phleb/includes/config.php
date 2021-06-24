<?php
//time zone
date_default_timezone_set('Africa/Accra');
//database connection
$con=mysqli_connect("localhost","root","","covid_pass");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
