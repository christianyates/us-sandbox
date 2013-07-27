<?php

if (file_exists('/var/www/site-php')) {
  require('/var/www/site-php/ussandbox/ussandbox-settings.inc');
}
$conf['cache_backends'][] = 'sites/default/modules/memcache/memcache.inc';
$conf['cache_default_class'] = 'MemCacheDrupal';
// The 'cache_form' bin must be assigned no non-volatile storage.
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';