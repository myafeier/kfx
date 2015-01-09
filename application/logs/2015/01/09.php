<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-09 11:34:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$route ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in /datas/www/bao.kfxiong.com/htdocs/application/classes/Controller/Welcome.php:7
2015-01-09 11:34:56 --- DEBUG: #0 /datas/www/bao.kfxiong.com/htdocs/application/classes/Controller/Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/datas/www/bao....', 7, Array)
#1 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /datas/www/bao.kfxiong.com/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /datas/www/bao.kfxiong.com/htdocs/application/classes/Controller/Welcome.php:7
2015-01-09 11:40:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$route ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in /datas/www/bao.kfxiong.com/htdocs/application/classes/Controller/Welcome.php:7
2015-01-09 11:40:22 --- DEBUG: #0 /datas/www/bao.kfxiong.com/htdocs/application/classes/Controller/Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/datas/www/bao....', 7, Array)
#1 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /datas/www/bao.kfxiong.com/htdocs/index.php(118): Kohana_Request->execute()
#7 {main} in /datas/www/bao.kfxiong.com/htdocs/application/classes/Controller/Welcome.php:7
2015-01-09 14:27:50 --- EMERGENCY: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 102 ] in /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php:114
2015-01-09 14:27:50 --- DEBUG: #0 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /datas/www/bao.kfxiong.com/htdocs/index.php(118): Kohana_Request->execute()
#3 {main} in /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php:114
2015-01-09 14:29:14 --- EMERGENCY: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 102 ] in /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php:114
2015-01-09 14:29:14 --- DEBUG: #0 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /datas/www/bao.kfxiong.com/htdocs/index.php(118): Kohana_Request->execute()
#3 {main} in /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php:114
2015-01-09 14:29:29 --- EMERGENCY: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 102 ] in /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php:114
2015-01-09 14:29:29 --- DEBUG: #0 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#2 /datas/www/bao.kfxiong.com/htdocs/index.php(118): Kohana_Request->execute()
#3 {main} in /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php:114
2015-01-09 14:53:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/front/index.php [ 3 ] in /datas/www/bao.kfxiong.com/htdocs/application/views/front/index.php:3
2015-01-09 14:53:53 --- DEBUG: #0 /datas/www/bao.kfxiong.com/htdocs/application/views/front/index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/datas/www/bao....', 3, Array)
#1 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/View.php(62): include('/datas/www/bao....')
#2 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/View.php(359): Kohana_View::capture('/datas/www/bao....', Array)
#3 /datas/www/bao.kfxiong.com/htdocs/application/classes/Controller/Welcome.php(18): Kohana_View->render()
#4 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_test()
#5 [internal function]: Kohana_Controller->execute()
#6 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /datas/www/bao.kfxiong.com/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /datas/www/bao.kfxiong.com/htdocs/index.php(118): Kohana_Request->execute()
#10 {main} in /datas/www/bao.kfxiong.com/htdocs/application/views/front/index.php:3