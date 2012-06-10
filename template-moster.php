<?php
include_once 'phpQuery/phpQuery/phpQuery.php';
$type = 43;
$domain = 'http://www.templatemonster.com';
$url = $domain."/prestashop-themes.php?type={$type}&from=";
$pageNumber = 0;
$templateNumber = 0;
do
{
   $pageNumber++;
   phpQuery::newDocumentFileHTML($url.$pageNumber,null);

   $validPage = pq('.thumbnail_wrapper')->html();

   if($validPage)
   {
      $templates = pq('.preview_box td:not(.nav)');

      foreach($templates as $t)
      {
         $templateNumber++;

         if(trim(pq($t)->html()))
         {

            $imageSmall = pq($t)->find('.thumbnail_wrapper img')->attr('src');
            $demoLink = $domain.pq($t)->find('.picture_menu a:nth-child(1)')->attr('href');
            $productLink = $domain.pq($t)->find('.picture_menu a:nth-child(2)')->attr('href');
            $price = pq($t)->find('.price-l span:eq(1)');

            $price = trim(str_replace('$','',$price));

            $imageBig = str_replace('m.jpg','prestashop-b.jpg',$imageSmall);

            preg_match('/([\d]+)/', $productLink, $match);
            $productId = $match[0];

            echo $templateNumber.';'.$productId.';'.$productLink.';'.$price.'< br/ >';

            $imageFile = "img/{$fileNumber}.jpg";

         }
      }
   }
}while($validPage);
