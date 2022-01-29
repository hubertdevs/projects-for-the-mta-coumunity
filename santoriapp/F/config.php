
<?php

require_once 'GameQ.php';

$servers = array(
'lss' => array('mta', '51.83.172.145',22999+123),
);

$gq = new GameQ();
$gq->addServers($servers);
$gq->setOption('timeout', 500);
$gq->setFilter('normalise');

$results = $gq->requestData();
print_r($results);


//prywatna notatka//polaczzapi//
