<?php

session_start();
session_destroy();
header("location:../index.php") or die(mysql_error());
?>