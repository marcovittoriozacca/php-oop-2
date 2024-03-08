<?php

    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/Category.php';
    require_once __DIR__ . '/Food.php';
    require_once __DIR__ . '/Game.php';

    $dog = new Category('Dog');
    $cat = new Category('Cat');

    $arrProducts = [
        $croccantiniPremiumCane = new Food($dog, 'Croccantini Premium', 'Croccantini premium per cani adulti, con ingredienti naturali', 'img', 19.99, 12, 350),
        $collarePerCani = new Product($dog, 'Collare per cani', 'Collare rosso con guinzaglio per cani', 'img', 15.99, 23),
        $topoDiPezzaGatto = new Game($cat, 'Topo di pezza', 'Topolino di pezza per far giocare il gatto', 'img', 5.99, 50, 'peluche')
    ];