<?php
include_once(__DIR__ . "/../exception/serviceException.php");

function afficheError($message)
{
?>
    <h1><?php $message->getMessage() ?></h1>
    <h2>Error : <?php $a->getCode() ?></h2>
<?php
}
?>