<?php

require __DIR__ . '/vendor/autoload.php';

use IP\KnowMyIP;

if(strtok($_SERVER["REQUEST_URI"], '?') == '/api/knowmyip') {
    KnowMyIP::getIPAddress();
}else {
    echo '<h1>Available Endpoints</h1> <a href="/api/knowmyip">/api/knowmyip</aaaa>';
}






