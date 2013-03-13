<?php
set_time_limit(0);

$handle = fopen('php://input','r');
$jsonInput = fgets($handle);

$dec = json_decode($jsonInput,true);

$decoded = $dec['data'];

$course = $dec['course'];

$dirfiles = '/opt/proofweb/files/'.$course ;

$fail = 0;

foreach($decoded as $n => $s) {
    $d = $dirfiles .'/'. $n;

    mkdir($d);
    
    foreach($decoded[$n]['nd'] as $i => $v){
        file_put_contents($d . '/' . 'aval_' . $dec['code'] . '_' . $i . '_DN.v', $v);
        if(! file_exists($d. '/' . 'aval_' . $dec['code'] . '_' . $i . '_DN.v')){ $fail=$fail+1; }
	}
    
    foreach($decoded[$n]['sem'] as $i => $v){
        file_put_contents($d . '/' . 'aval_' . $dec['code'] . '_' . $i . '_SEM.v', $v);
       	if(! file_exists($d. '/' . 'aval_' . $dec['code'] . '_' . $i . '_SEM.v')){ $fail=$fail+1; }
	}


}

if($fail > 0){
	die('Ops, Saving Error!');
}

?>
