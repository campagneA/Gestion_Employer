<?php
session_start();
include_once(__DIR__ . "/../Service/EmployeService.php");

$employeService = new EmployeService;
$employeService->suppression($_GET["id"]);

header("Location: Affiche_Fichier.php");
