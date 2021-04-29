<?php

function connectionMysqli()
{
    $bdd = mysqli_init();
    mysqli_real_connect($bdd, "127.0.0.1", "AdminAlex", "12345", "gestion_employer");
    return $bdd;
}
