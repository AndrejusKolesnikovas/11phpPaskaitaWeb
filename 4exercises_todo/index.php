<?php
require_once './functions.php';
?>
<!DOCTYPE html>
<html>
<body>
<fieldset>
    <legend> New TODO</legend>
    <form action="submit.php" method="POST">
        <div><input type="text" name="new TODO" placeholder="tasks"/>
            <input type="submit"/>
            <input type="date"/>
            <input type="time"/></div>
</fieldset>

</form>
<fieldset>
    <legend> TODOs</legend>
    <div>
        <?php todosForEach(); ?>
    </div>
</fieldset>
</body>
</html>
