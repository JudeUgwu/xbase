<?php
function sanitize($value){
    $value = htmlspecialchars($value);
    $value = stripslashes($value);
    $value = trim($value);
    return $value;
}



?>