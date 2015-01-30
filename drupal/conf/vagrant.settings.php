<?php

// DATABASE

$databases = array (
  'default' => 
  array (
    'default' => 
    array (
      'database' => 'drupal',
      'username' => 'drupal',
      'password' => 'password',
      'host'     => 'localhost',
      'port'     => '',
      'driver'   => 'mysql',
      'prefix'   => '',
    ),
  ),
);

// CACHING
$conf['cache_backends'][] = 'sites/all/modules/contrib/memcache/memcache.inc';
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
$conf['cache_default_class'] = 'MemCacheDrupal';
$conf['memcache_key_prefix'] = 'wk';

$conf['cache_backends'][] = 'sites/all/modules/contrib/varnish/varnish.cache.inc';
$conf['cache_class_cache_page']  = 'VarnishCache';

// Varnish
$conf['varnish_version'] = "3";


$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'password',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = '7A9NlJmuruT2FDIUNArnazO_7yWL5sGrSPKjtfS6c5uxZEqezZRiEQr-V-dkKjzgaweu02PQKg';
$settings['install_profile'] = 'wk';
$config_directories['active'] = 'sites/default/files/config_cu0PVBt9LZ_otb8PP8iKcfV9OcFM1x_Z6KHx99hQmvSMBgbuBybNx862fb5vM12-8Jn4pcJ55w/active';
$config_directories['staging'] = 'sites/default/files/config_cu0PVBt9LZ_otb8PP8iKcfV9OcFM1x_Z6KHx99hQmvSMBgbuBybNx862fb5vM12-8Jn4pcJ55w/staging';
$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'password',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'password',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'password',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'password',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
