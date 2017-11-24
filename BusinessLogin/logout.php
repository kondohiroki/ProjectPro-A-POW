<?php
session_start();
session_destroy();
header("Location: ../NotLogin/Home[NoLog].php ");
?>
