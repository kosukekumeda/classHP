<?php
require_once('hp.php');

$hp = $_POST;


//名前を変えて呼び出す
$homePage = new Hp();
$homePage->hpValidate($hp);
$homePage->hpCreate($hp);


?>
<p class="back_button"><a href="index.php"class="btn-square-raised">Back</a></p>