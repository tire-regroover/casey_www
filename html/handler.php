<?php

function checkret($retval) {
  if ($retval == 0) {
    $result = "ok";
  }
  else {
    $result = "fail";
  }
  return $result;
}

switch ($_GET["action"]) {
  case 'motion_start':
    exec('/var/www/casey_scripts/start_cam', $output, $retval);
    echo checkret($retval);
    break;
  case 'motion_stop':
    exec('/var/www/casey_scripts/stop_cam', $output, $retval);
    echo checkret($retval);
    break;
}

?>
