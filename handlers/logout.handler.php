<?php
session_start();
session_destroy();
header("Location: /components/authentication/login.component.php");
exit;
