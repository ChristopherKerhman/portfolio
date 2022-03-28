<?php
require 'objets/presentation/getPresentation.php';
require 'objets/presentation/printPresentation.php';
$idPresentation = filter($_GET['idPresentation']);
$oneArticle = new  PrintPresentation();
$dataTraiter = $oneArticle->oneArticle($idPresentation);
$oneArticle->printArticle($dataTraiter);
