<!DOCUMENT TYPE>
<HTML>
<HEAD>
    <TITLE>Worker's Table</TITLE>
</HEAD>
<BODY>

<?php

include_once 'brain.php';

?>

<table>
    <thead>
    <th>#</th>
    <th>Name</th>
    <th>Department</th>
    <th>Arrived at</th>
    <th>Left at</th>
    <th>Social number</th>
    </thead>
    <tbody>

        <?php
        
        $table = new WorkersTable;
        $table->table();

        ?>

    </tbody>
</table>

</BODY>
</HTML>