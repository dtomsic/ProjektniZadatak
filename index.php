<?php

include_once "Database.php";
include_once "ModelOcjena.php";
include_once "ModelStudenti.php";
include_once "ViewOcjena.php";
include_once "ViewStudenti.php";
include_once "controller.php";


$database= new Database();
$db=$database->connect();
$viewstudenti=new PrikazStudenti();
$modelstudenti=new Student($db);
$controllerstudenti=new StudentiController($modelstudenti, $viewstudenti);
$viewstudenti->prikaziFormuDodaj();
// $controllerstudenti->prikaziSveStudente();

if ($_POST)
{
    $ime=$_POST["ime"];
    $prezime=$_POST["prezime"];
    $jmbag=$_POST["jmbag"];
    $controllerstudenti->dodajBiljesku($ime,$prezime, $jmbag);
}

$controllerstudenti->prikaziSveStudente();

/*
$view=new BiljeskaView();
$model=new Biljeska($db);
$controller=new BiljeskaController($model,$view);


$view->prikaziFormu();
if ($_POST)
{
    $naslov=$_POST["naslov"];
    $sadrzaj=$_POST["sadrzaj"];
    $controller->dodajBiljesku($naslov,$sadrzaj);
}

$controller->prikaziSveBiljeske();
*/

?>
