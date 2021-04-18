<?php 

setcookie('user', $user['name'], time() - 3600, "/");
header('Location: index3.php');

 ?>