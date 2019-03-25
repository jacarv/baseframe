<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  '*' => array(
        
  ),

  'dev' => array(
      'devMode' => true,
      'siteUrl' => 'http://dev.ayni.io', // @_@
      'environmentVariables' => array(
        'basePath' => '/Applications/MAMP/htdocs/ayni/public', // @_@ use {basePath} for assets path
        'baseUrl'  => 'http://dev.ayni.io', // @_@ use {baseUrl} for URL to assets
      )
  ),

  'live' => array(  // @_@
      'siteUrl' => 'http://ayni.io',  // @_@
      'useCompressedJs' => true,  // @_@
      'environmentVariables' => array(
        'basePath' => '/var/www/live/ayni/public',  // @_@
        'baseUrl'  => 'http://ayni.io',  // @_@
      )
  ),
  'staging' => array(  // @_@
      'siteUrl' => 'http://staging.ayni.io',  // @_@
      'useCompressedJs' => true,  // @_@
      'environmentVariables' => array(
        'basePath' => '/var/www/staging/ayni/public',  // @_@
        'baseUrl'  => 'staging.ayni.io',  // @_@
      )
  )
);