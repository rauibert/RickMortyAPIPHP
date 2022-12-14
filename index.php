<?php

require_once './vendor/autoload.php';
require_once './controller/dataController.php';

$loader = new \Twig\Loader\FilesystemLoader('./views');

$twig = new \Twig\Environment($loader, []);

if(!isset($_GET['id'])){
  $data = DataController::loadData();
  echo $twig->render('index.twig', compact('data'));
}else{
  $character = DataController::loadCharacter($_GET['id']);
  echo $twig->render('detalle.twig', compact('character'));
}