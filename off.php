<?php

include 'conn.php';

$update_query = "UPDATE devices_status SET device_status='0' WHERE id='1';";
$conn->query($update_query);

header("Location: next3.php");

echo "<script> console.log('Light Turned On ');</script>";

?> 