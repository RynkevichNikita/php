<?php

use ConnectionPDO\Connections;

class TmsLoggerApp {
    public function __construct() {
        // проверка подключения из файла data/Connections.php, необходима автозагрузка файла
        $connection = new Connections();
        $connection->getConnection();
    }
}

$new = new TmsLoggerApp();