<?php
include 'securite/checkSecurite.php'; 
require 'objets/presentation/getPresentation.php';
require 'objets/presentation/printPresentation.php';
$idPresentation = filter($_GET['idPresentation']);
$oneArticle = new  PrintPresentation();
$dataTraiter = $oneArticle->oneArticle($idPresentation);
$oneArticle->printArticleModication ($dataTraiter, $this->idNav);
