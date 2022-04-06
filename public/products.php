<?php
require_once __DIR__ . '/../config/twig.php';


$products = array('guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe');

echo $twig->render('products.html.twig', ['products' => $products]);
