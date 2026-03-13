<?php

$name = $_POST['username'];

header("Location: result.php?name=" . $name);

exit();

?>