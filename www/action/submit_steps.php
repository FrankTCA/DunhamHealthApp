<?php
$steps = $_GET['steps'];
if (is_numeric($steps)) {
  echo $steps . " steps are logged.";
} else {
  echo "Amount of steps is NaN.";
}
?>
