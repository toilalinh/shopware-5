<?php return array (
  'db' => 
  array (
    'host' => 'localhost',
    'port' => '3306',
    'username' => 'root',
    'password' => 'root',
    'dbname' => 'shopware5.2',
  ),

    'phpsettings' => array(
        'display_errors' => 1,
    ),

    'front' => array(
        'showException' => true
    ),

    'csrfProtection' => array(
        'frontend' => false,
        'backend' => false
    )
);