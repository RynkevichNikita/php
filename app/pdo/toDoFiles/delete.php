<?php

require '../../vendor/autoload.php';

use PDOcrud\PDOcrud;
use TmsLogger\TmsLogger;

$deleteToDo = new PDOcrud;
$deleteToDo->delete();
$logs = new TmsLogger;
$logs->log();

?>