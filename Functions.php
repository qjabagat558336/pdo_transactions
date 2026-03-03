<?php

function validateNumber($num) {
    if ($num < 0) {
        return false;
    }
    return true;
}

function computeTotal($price, $qty) {
    return $price * $qty;
}

function redirect($url) {
    header("Location: $url");
    exit;
}
?>
