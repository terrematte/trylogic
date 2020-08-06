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

$fail_e = 0;
$fail_h = 0;
foreach($students as $n => $s) {
    $d = $dirfiles .'-'. $s;

	for($i = 0; $i < 10; ++$i) {
		if (file_exists("$d/desafioLCP_$i.v") || file_exists("$d/.desafioLCP_$i.v")) {
			if (file_exists("$d/.desafioLCP_$i.v")) {
				rename("$d/.desafioLCP_$i.v", "$d/desafioLCP_$i.v");
				$fail_h = $fail_h + 1;

			} else {
                                rename("$d/desafioLCP_$i.v", "$d/.desafioLCP_$i.v");
			}
		} else {
             	        $fail_e = $fail_e + 1;
                }
        }
}

if($fail_e > 0){
        $return = array();
        $return['msg'] = "Ops, the LCP Challenges aren't Saved!";
        echo json_encode($return);
} else if($fail_h > 0){
        $return = array();
        $return['msg'] = "The LCP Challenges are Unhidden!";
        echo json_encode($return);
} else {
        $return = array();
        $return['msg'] = "The LCP Challenges are Hidden!";
        echo json_encode($return);
}
?>
