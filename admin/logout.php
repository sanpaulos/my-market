<?php 
include ('bootstrap-admin.php');
session_start();
$_SESSION ['name'] = null;
$_SESSION ['auth_id'] = null;
header('Location: http://my-market.io/admin');
?>