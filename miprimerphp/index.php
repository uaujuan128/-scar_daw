<?php

require_once 'config\Config.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo Constantes::DATOS;

if (!isset($_SESSION["contador"]))
    $_SESSION["contador"] = 0;

echo "primero".$_SESSION["contador"];

$_SESSION["contador"]++;

echo "segundo".$_SESSION["contador"];
if ($_SESSION["contador"] >= 5)
    unset($_SESSION["contador"]);
echo "tercero".$_SESSION["contador"];



//include_once "controller/ClassSession.php";
//
//$class = new ClassSession();
//$class->Index();