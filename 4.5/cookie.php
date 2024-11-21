<?php

$cookie_name = "user";
$cookie_value = "John";
$cookie_expiry = time() + (30 * 24 * 60 * 60);  
setcookie($cookie_name, $cookie_value, $cookie_expiry, "/");  

if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '" . $cookie_name . "' is not set.";
}
?>
