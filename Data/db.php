<?php

require_once __DIR__."/../Models/ProductFood.php";
require_once __DIR__."/../Models/ProductToy.php";
require_once __DIR__."/../Models/ProductHouse.php";
require_once __DIR__."/../Models/UserSubscribed.php";

$categories = [
  'cat' => new Category('cat',"fa-solid fa-cat"),
  'dog' => new Category('dog',"fa-solid fa-dog")
];

$products = [
  new ProductFood('scatoletta per cani/gatti',[$categories['cat'],$categories['dog']],5,'',0.25),
  new ProductFood('croccantini per cani S',[$categories['dog']],5,'',2),
  new ProductFood('croccantini per cani M',[$categories['dog']],12,'',5),
  new ProductFood('croccantini per cani L',[$categories['dog']],20,'',10),
  new ProductFood('croccantini per gatti S',[$categories['cat']],5,'',2),
  new ProductFood('croccantini per gatti M',[$categories['cat']],12,'',5),
  new ProductFood('croccantini per gatti L',[$categories['cat']],20,'',10),
  new ProductHouse('cuccia per cani S',[$categories['dog']],30,'','30cm x 45cm'),
  new ProductHouse('cuccia per cani M',[$categories['dog']],50,'','45cm x 60cm'),
  new ProductHouse('cuccia per cani L',[$categories['dog']],80,'','60cm x 80cm'),
  new ProductHouse('cuscino per gatti S',[$categories['cat']],25,'','30cm x 30cm'),
  new ProductHouse('cuscino per gatti M',[$categories['cat']],45,'','45cm x 45cm'),
  new ProductHouse('cuscino per gatti L',[$categories['cat']],70,'','60cm x 60cm'),
  new ProductToy('palla per cani/gatti',[$categories['cat'],$categories['dog']],20,'','palla'),
  new ProductToy('osso di gomma',[$categories['dog']],15,'','osso'),
  new ProductToy('topo di gomma',[$categories['cat']],10,'','topo'),
];