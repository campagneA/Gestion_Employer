<?php

function connexionMysqli()
{
    return new mysqli("127.0.0.1", "root", "", "gestion_employer");
}
