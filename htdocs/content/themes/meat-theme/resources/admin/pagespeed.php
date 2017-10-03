<?php

function isPagespeed() {
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    return strpos( $agent , "google page" ) !== false;
}