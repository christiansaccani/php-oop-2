<?php

require './Models/Item.php';

// ______________________________________________________

$items = [
    new Item("Spazzolino per Cani", 9.99, "Cani", "Prodotto"),
    new Item("Croccantini per Gatti", 14.99, "Gatti", "Cibo"),
    new Item("Palla da Lancio per Cani", 5.49, "Cani", "Gioco"),
];


$items[1]->image = "https://arcaplanet.vtexassets.com/arquivos/ids/224803-200-200/virtus-seven-seas-gatto-adult.jpg?v=637454746350170000";