<?php
	include('../default.php');
	session_start();

    $c = $_REQUEST['c'];    // color
    $sql = 'call setConversionColor('.$_SESSION['user']['id'].', '.$_REQUEST['fid'].', '.$c.')';
    $con = initConnection();
    $con->query($sql);
    echo $_SESSION['user']['id'];
?>