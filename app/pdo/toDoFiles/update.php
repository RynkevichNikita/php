<?php

require '../../vendor/autoload.php';

use PDOcrud\PDOcrud;
use TmsLogger\TmsLogger;

$updateToDo = new PDOcrud;
$updateToDo->update();
$logs = new TmsLogger;
$logs->log();

?>