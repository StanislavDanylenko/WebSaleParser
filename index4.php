<?php
//ob_start();

session_start();
$_SESSION['test'] = 'super';
?>
<form action="test.php" method="POST">
<input name="myActionName" type="submit" class="btn btn-secondary btn-lg" value="ПОЛУЧИТЬ ДАННЫЕ" />
</form>