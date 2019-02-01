<?php
session_start();
unset($_SESSION['loginPass']);
unset($_SESSION['formNo']);
session_destroy();
header('Location: ../index1.php');
