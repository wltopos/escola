<?php
defined('BASEPATH') or exit('No direct script access allowed');



$active_group = 'db_usuarios';
$query_builder = true;
$db['db_usuarios'] = [ 
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'u782442173_db_usuarios',
    'password' => 'Topos.1212',
    'database' => 'u782442173_db_usuarios',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => [],
    'save_queries' => true
];
$db['db_estoque'] = [
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'u782442173_db_estoque',
    'password' => 'Topos.1212',
    'database' => 'u782442173_db_estoque',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => [],
    'save_queries' => true
];
$db['db_casabela'] = [
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'u782442173_db_casa_bela',
    'password' => 'Topos.1212',
    'database' => 'u782442173_db_casa_bela',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => [],
    'save_queries' => true
];


$db['db_dev'] = [ 
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'u782442173_dev',
    'password' => 'Topos.1212',
    'database' => 'u782442173_dev',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => [],
    'save_queries' => true
];

