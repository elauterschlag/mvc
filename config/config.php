<?php

// global for the error reporting
define('DEBUG', true);

// database name
define('DB_NAME', 'linkr');

// database user
define('DB_USER', 'root');

// database password
define('DB_PASSWORD', 'root');

// database host ***use IP address to avoid DNS lookup***
define('DB_HOST', '127.0.0.1');

// default controller if there isn't one defined in the url
define('DEFAULT_CONTROLLER', 'Home');

// if no layout ist set in the controller use the default layout
define('DEFAULT_LAYOUT', 'default');

// set this to '/' for a live server
define('PROOT', '/linkr/');

// This will be used if no site title is set
define('SITE_TITLE', 'Linkr - Reiseland Vertriebsdatenbank');

// This is the Brand text in the menu
define('MENU_BRAND', 'Linkr');

// session name for logged in user
define('CURRENT_USER_SESSION_NAME', 'FejaqAVKcFeEKmIjjfNNtZbuGwkzUYTo');

// cookie name for logged in user with activ remember me
define('REMEMBER_ME_COOKIE_NAME', 'MljazB7bSvTHivLkwIsuT7Isq7egefoE');

// time in seconds for remember me cookie to live (30 days)
define('REMEMBER_ME_COOKIE_EXPIRY', 2592000);

// Controller name for the restricted redirect
define('ACCESS_RESTRICTED', 'Restricted');