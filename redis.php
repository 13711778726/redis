<?php
$redis = new Redis();
$redis->connect('127.0.0.1', 2179);

$redis->set('key', 'value');

echo $redis->get('key')."\n";

$redis->setex('key', 3600, 'value'); // sets key → value, with 1h TTL.

$redis->set('key1', 'val1');
$redis->set('key2', 'val2');
$redis->set('key3', 'val3');
$redis->set('key4', 'val4');

$redis->delete('key1', 'key2');
echo $redis->get('key3')."\n" ;

$redis->delete(array('key3', 'key4'));
?>
