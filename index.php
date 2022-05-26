<?php

// REQUIREMENTS
require_once './package.php';
// MAIN PROGRAMM

// START
$cookie = new CookieSession('user');

// UPDATE
$answer = $cookie->update('devcarle@gmail.com', time() + 60 * 60);
/* Set-Cookie: user=devcarle%40gmail.com; expires=Thu, 26-May-2022 22:43:26 GMT; Max-Age=3600; path=/ */

// UPDATE
$answer = $cookie->update('newuser2@gmail.com');
/* Set-Cookie: user=newuser2%40gmail.com; expires=Fri, 26-May-2023 21:43:26 GMT; Max-Age=31536000; path=/ */

// READ
$answer = $cookie->read();
var_dump($answer);

// DESTRUCTION
$answer = $cookie->stop();
/* Set-Cookie: user=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/ */


