<?php

include_once 'phpQuery/phpQuery/phpQuery.php';


$file = 'test.html'; // página que será capturados os textos

phpQuery::newDocumentFileHTML($file);


echo '<h2>O contedudo da tag html Title &eacute;</h2>';
$titleElement = pq('title');
echo '<p>' . htmlentities( $titleElement->html() ) . '</p>';

echo '<h2>O contedudo dos divs &eacute;</h2>';
$titleElement2 = pq('div');
echo '<p>' . htmlentities( $titleElement2->html() ) . '</p>';

echo '<h2>O contedudo do ID deivison &eacute;</h2>';
$titleElement3 = pq('#deivison');
echo '<p>' . htmlentities( $titleElement3->html() ) . '</p>';

echo '<h2>O contedudo da Classe arthur &eacute;</h2>';
$titleElement4 = pq('.arthur');
echo '<p>' . htmlentities( $titleElement4->html() ) . '</p>';

?>                   