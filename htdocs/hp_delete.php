<?php
require_once('hp.php');

$hp = new Hp();
$result = $hp->delete($_GET['id']);


?>
<p><a href="index.php"class="btn-square-raised">Back</a></p>