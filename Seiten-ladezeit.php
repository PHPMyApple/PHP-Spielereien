<?php
function get_time() {
    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    
    return $time;
}
$start = get_time();
?>

<h1>Wie schnell lädt es wohl?</h1>


<?php

for($i=0;$i<100000;$i++) { }
?>

<?php
$finish = get_time();
$total_time = round(($finish - $start), 4);
echo 'Seite hat in '.$total_time.' Sekunden geladen.';
?>
