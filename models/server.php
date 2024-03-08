<?php

    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/Category.php';
    require_once __DIR__ . '/Food.php';
    require_once __DIR__ . '/Game.php';
    require_once __DIR__ . '/PetBed.php';

    $dog = new Category('dog');
    $cat = new Category('cat');

    $arrProducts = [
        $croccantiniPremiumCane = new Food($dog, 'Croccantini Premium', 'Croccantini premium per cani adulti, con ingredienti naturali', 'https://rep.grupposme.net/RepAP?code=D1446861&skey=f3b6c41bd09b8d169679070be320a5ac&resize=500', 19.99, 12, 350),
        $collarePerCani = new Product($dog, 'Collare per cani', 'Collare rosso con guinzaglio per cani', 'https://arcaplanet.vtexassets.com/arquivos/ids/285097/f4aa02d5b9f70bd3530dacebd540ce9fee823a1b_63001c39bfdccc7ced6207466a692521fd4f09ca--1-.jpg?v=638192236899730000', 15.99, 23),
        $topoDiPezzaGatto = new Game($cat, 'Topo di pezza', 'Topolino di pezza per far giocare il gatto', 'https://m.media-amazon.com/images/I/71ruMHhv8xL._AC_UF1000,1000_QL80_.jpg', 5.99, 50, 'peluche'),
        $cucciaLgPerCani = new PetBed($dog, 'Cuccia per cani in legno', 'Cuccia per cani di taglia larga soffice e comoda', 'https://img.kwcdn.com/product/open/2023-11-22/1700647921510-99f5c7c5f88d4f06a87915766330e2c9-goods.jpeg?imageView2/2/w/800/q/70/format/webp', 30.00, 4, 'lg')
    ];