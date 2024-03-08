<?php

$filter = $_GET['filter'] ?? 'all';
$filteredArray = $arrProducts;

    if(isset($_GET['filter']) && ($_GET['filter'] == 'all' || $_GET['filter'] == 'dog' || $_GET['filter'] == 'cat' )){
        $filter = $_GET['filter'];
        if( $filter != 'all'){
            $filteredArray = array_filter($arrProducts, function($element) use ($filter) {
                return $element->category->category == $filter;
            });
        }

    }

    function selectText($filter){
        switch ($filter) {
            case 'all':
                return 'Tutti i prodotti';
            case 'dog':
                return 'Prodotti per cani';
            case 'cat':
                return 'Prodotti per gatti';
            default:
                return 'all';
        }
    }