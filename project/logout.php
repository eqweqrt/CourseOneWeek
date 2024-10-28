<?php
setcookie('login', '', time() - 3600, '/');
setcookie('password', '', time() - 3600, '/');
header('Location: /index2.php');
exit;
?>