<?php

$host="localhost";//varsay�lan default
$kullanici="root";//Veritaban� kullan�c� ad�
$sifre="sifre";//veritaban� kullan�c� ad� �ifresi
$veritaban�="veritaban�";//veritaban� ad�

//mysql a ba�lan�yoruz ve veritaban�m�z� se�iyoruz
$bag= mysql_connect($host,$kullanici,$sifre);
$vbag=mysql_select_db("$veritaban�", $bag);  
mysql_select_db("$veritaban�", $bag);  


if (!$bag)  {  die("Mysql ba�lant�s� sa�lan�lamad�");  }  //mysql ba�lant� kontrol�
if (!$vbag) {  die("Veritaban�na ba�lan�lamad�");  }  //veritaban� ba�lant� kontrol�
  


?>