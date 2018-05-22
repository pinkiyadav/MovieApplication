<?php ini_set('max_execution_time', 0); ?>
<?php
$db = mysqli_connect("localhost","root","","login");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 ?>