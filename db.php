<?php

require './Models/Item.php';

// ______________________________________________________

$items = [
    new Item("Spazzolino per Cani", 9.99, "dog", "Prodotto"),
    new Item("Croccantini per Gatti", 14.99, "cat", "Cibo"),
    new Item("Palla da Lancio per Cani", 5.49, "dog", "Gioco"),
];


$items[1]->image = "https://arcaplanet.vtexassets.com/arquivos/ids/224803-200-200/virtus-seven-seas-gatto-adult.jpg?v=637454746350170000";
$items[2]->image = "https://media.istockphoto.com/id/137345149/it/foto/pallina-da-tennis.jpg?s=612x612&w=0&k=20&c=BWH1yhVOL05JIAcjhexiigaTBlv2jqiICERcj7sWq70=";