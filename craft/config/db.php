<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */
return array(
 '*' => array(
   	'server' => 'localhost',
   	'tablePrefix' => 'craft',
  ),

  'dev' => array(
    'server' => 'localhost',
    'database' => 'newayni_craft',
    'user' => 'root',
    'password' => 'root',
  ),
  'live' => array(
    'database' => 'newayni_craft',
    // 'user' => 'root',
    // 'password' => '',
  ),
  'staging' => array(
    'database' => 'snewayni_craft',
    'user' => 'snewayni_craft',
    'password' => 'snewawyni_craft',
  )
);
