<?php
// ignore this

require_once dirname(__DIR__) . "/vendor/autoload.php";

$jikan = new Jikan\Jikan;


// todo mal_id in related anime

$jikan->Anime(1);
var_dump($jikan->response);
//$jikan->Manga(1);
//var_dump($jikan->response['staff']);
//$jikan->Anime(21);
//$jikan->Manga(1);
//$jikan->Manga(1, [CHARACTERS]);
//$jikan->Person(1);
//$jikan->Character(1);
//
//
