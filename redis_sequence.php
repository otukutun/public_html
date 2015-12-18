<?php
require_once('./config.php');
$redis = new Redis();
$redis->connect($host,6379);
for ($i = $start; $end; $i++) {
  $redis->set("pv_{$i}", 10000);
}
