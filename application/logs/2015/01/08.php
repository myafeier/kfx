<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-08 04:28:35 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Cookie.php:67
2015-01-08 04:28:35 --- DEBUG: #0 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /datas/www/bao.kfxiong.com/htdocs/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Cookie.php:67
2015-01-08 04:28:35 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Cookie.php:67
2015-01-08 04:28:35 --- DEBUG: #0 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /datas/www/bao.kfxiong.com/htdocs/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Cookie.php:67