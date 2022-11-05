<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-06-19 06:52:39 --> Severity: Error --> Uncaught Whoops\Exception\ErrorException: Invalid argument supplied for foreach() in /home/wltoposc/public_html/sistemas/casabela/application/vendor/filp/whoops/src/Whoops/Resources/views/env_details.html.php:17
Stack trace:
#0 /home/wltoposc/public_html/sistemas/casabela/application/vendor/filp/whoops/src/Whoops/Resources/views/env_details.html.php(17): Whoops\Run->handleError(2, 'Invalid argumen...', '/home/wltoposc/...', 17, Array)
#1 /home/wltoposc/public_html/sistemas/casabela/application/vendor/filp/whoops/src/Whoops/Util/TemplateHelper.php(250): require('/home/wltoposc/...')
#2 [internal function]: Whoops\Util\TemplateHelper->Whoops\Util\{closure}('/home/wltoposc/...', Array)
#3 /home/wltoposc/public_html/sistemas/casabela/application/vendor/filp/whoops/src/Whoops/Util/TemplateHelper.php(248): call_user_func(Object(Closure), '/home/wltoposc/...', Array)
#4 /home/wltoposc/public_html/sistemas/casabela/application/vendor/filp/whoops/src/Whoops/Resources/views/panel_details.html.php(2): Whoops\Util\Templa /home/wltoposc/public_html/sistemas/casabela/application/vendor/filp/whoops/src/Whoops/Resources/views/env_details.html.php 17
