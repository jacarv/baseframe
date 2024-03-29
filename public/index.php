<?php

// Path to your craft/ folder
$craftPath = '../craft';

// Setup environment-friendly configs
switch ($_SERVER['SERVER_NAME']) {    
  case 'ayni.io' :
    define('CRAFT_ENVIRONMENT', 'live');
    break;
  case 'staging.ayni.io' :
    define('CRAFT_ENVIRONMENT', 'staging');
    break;
  default :
    define('CRAFT_ENVIRONMENT', 'dev');
    break;
}

// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
	if (function_exists('http_response_code'))
	{
		http_response_code(503);
	}

	exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
