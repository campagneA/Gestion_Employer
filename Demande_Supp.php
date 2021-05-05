<?php
session_start();
include("Connection_Mysqli.php");
include_once(__DIR__ . "/Service/EmployeService.php");

$employeService = new EmployeService;
$employeService->suppression($_GET["id"]);

header("Location: Affiche_Fichier.php");
