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
  new Product('prodotto generico',[$categories['cat']],5.5,0.5),
  new Product('altro prodotto generico',[$categories['dog']],7.5,2),
  new ProductFood('scatoletta per cani/gatti',[$categories['cat'],$categories['dog']],5,0.25,'M'),
  new ProductFood('croccantini per cani', [$categories['dog']], 5, 2, 'S'), 
  new ProductFood('croccantini per cani', [$categories['dog']], 12, 5, 'M'), 
  new ProductFood('croccantini per cani', [$categories['dog']], 20, 10, 'L'), 
  new ProductFood('croccantini per gatti', [$categories['cat']], 5, 2, 'S'), 
  new ProductFood('croccantini per gatti', [$categories['cat']], 12, 5, 'M'), 
  new ProductFood('croccantini per gatti', [$categories['cat']], 20, 10, 'L'), 
  new ProductHouse('cuccia per cani', [$categories['dog']], 30, 10, 'S', '30cm x 45cm'), 
  new ProductHouse('cuccia per cani', [$categories['dog']], 50, 10, 'M', '45cm x 60cm'), 
  new ProductHouse('cuccia per cani', [$categories['dog']], 80, 10, 'L', '60cm x 80cm'), 
  new ProductHouse('cuscino per gatti', [$categories['cat']], 25, 10, 'S', '30cm x 30cm'), 
  new ProductHouse('cuscino per gatti', [$categories['cat']], 45, 10, 'M', '45cm x 45cm'), 
  new ProductHouse('cuscino per gatti', [$categories['cat']], 70, 10, 'L', '60cm x 60cm'), 
  new ProductToy('palla per cani/gatti', [$categories['cat'], $categories['dog']], 20, 10, 'palla'), 
  new ProductToy('osso di gomma', [$categories['dog']], 15, 0.5, 'osso'), 
  new ProductToy('topo di gomma', [$categories['cat']], 10, 0.4, 'topo'), 
];