<?php
@session_start();

session_destroy();

header("location: /primajasa/index.php");
?>