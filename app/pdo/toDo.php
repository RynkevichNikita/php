<!DOCUMENT TYPE>
<HTML>
<HEAD>
    <TITLE>ToDo</TITLE>
</HEAD>
<BODY>

<?php

use PDOcrud\PDOcrud;

?>

<h1>Welcome to your ToDo List</h1>
<form action="pdo/toDoFiles/create.php" method="post">
    <fieldset>
        <legend><b>Add a new thing ToDo</b></legend>
        <input type="text" name="newTask" id="newTask">
        <input type="submit" value="Confirm">
    </fieldset>
</form>
<form action="pdo/toDoFiles/update.php" method="post">
    <fieldset>
        <legend><b>Changed your mind?</b></legend> 
        <p>Choose a number of the task to change</p>
        <input type="number" name="idTask" id="idTask">
        <p>Add your changed plans</p>
        <input type="text" name="updateTask">
        <input type="submit" value="Confirm">
    </fieldset>
</form>

<table>
    <thead>
    <th>#</th>
    <th>Task</th>
    </thead>
    <tbody>

        <?php

        $toDoTable = new PDOcrud();
        $toDoTable->table();

        ?>

    </tbody>
</table>

</BODY>
</HTML>