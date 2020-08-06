<?php
set_time_limit(0);

/**
 * Simple helper to debug to the console
 *
 * @param $data object, array, string $data
 * @param $context string  Optional a description.
 *
 * @return string
 */
function debug_to_console($data, $context = 'Debug in Console') {

    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    $output  = 'console.info(\'' . $context . ':\');';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
}

$handle = fopen('php://input','r');
$jsonInput = fgets($handle);

$dec = json_decode($jsonInput,true);

$students = $dec['students'];

$course = $dec['course'];

$dirfiles = '/opt/proofweb/tasks/'.$course ;
$fail = 0;
foreach($students as $n => $s) {
    $d = $dirfiles .'-'. $s;

        for($i = 0; $i < 10; $i++) { 
                if (file_exists("$d/desafioLCP_$i.v")) {
                        unlink("$d/desafioLCP_$i.v");
			unlink("$d/.desafioLCP_$i.v");
		} else {
                        $fail = $fail+1;
                }
        }
}

if($fail > 0){
        $return = array();
        $return['msg']="Ops!\nLCP Challenges were already removed before!";
        echo json_encode($return);
} else {
        $return = array();
        $return['msg']="Ok!\nLCP Challenges are removed!";
        echo json_encode($return);
}

?>
