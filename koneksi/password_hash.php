<?php
// misalkan password disini menggunakan 12345
$password_hash = password_hash("12345", PASSWORD_DEFAULT);
echo $password_hash;
?>
