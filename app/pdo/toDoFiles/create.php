<?php

require '../../vendor/autoload.php';

use PDOcrud\PDOcrud;
use TmsLogger\TmsLogger;

$insertToDo = new PDOcrud();
$insertToDo->insert();
$logs = new TmsLogger();
$logs->log();