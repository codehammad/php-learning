<?php
/*A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Cookie also retrieve in other pages
Syntax: setcookie(name, value, expire, path, domain, secure, httponly);*/
$cookie_name = "user";
$cookie_value = "Hammad Fayyaz";

setcookie($cookie_name,$cookie_value,time() + (86400 * 30), "/");
?>

<html>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie is not set";
        }else {
            echo $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>