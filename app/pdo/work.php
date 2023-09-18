<!DOCUMENT TYPE>
<HTML>
<HEAD>
    <TITLE>ToDo</TITLE>
</HEAD>
<BODY>

<?php

include_once 'workFiles/brain.php';

?>

<h1>Choose wisely</h1>
<form action="pdo/workFiles/arrive.php" method="post">
    <fieldset>
        <legend><h3>Arrive time</h3></legend>
        <label for="workerIdArrive">Choose your worker's unique number</label>
        <p>
            <select name="workerIdArrive" id="workerIdArrive">
                <?php
                    $list = new WorkerId;
                    $list->workerId();
                ?>
            </select>
            <input type="submit" value="Confirm">   
        </p>
    </fieldset>
</form>

<form action="pdo/workFiles/leave.php" method="post">
    <fieldset>
        <legend><h3>Leave time</h3></legend>
        <label for="workerIdLeave">Choose your worker's unique number</label>
        <p>
            <select name="workerIdLeave" id="workerIdLeave">
                <?php
                    $list->workerId();
                ?>
            </select>
            <input type="submit" value="Confirm">
        </p>
    </fieldset>
</form>

<a href='pdo/workFiles/table.php'><h2>Just look at this workers!!!</h2></a>

</BODY>
</HTML>