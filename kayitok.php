<?php
include"baglanti.php";


if($_POST['ad']!=""){
if($_POST['sifre1']!=""){
if($_POST['sifre2']!=""){
if($_POST['mail']!=""){
if($_POST['sifre1']==$_POST['sifre2']){
if($_POST['ad']!=$_POST['sifre1']){


$uyesorgu=mysql_query("Select uye_ad from uyeler where uye_ad='".$_POST['ad']."'");
$mailsorgu = mysql_query("SELECT uye_mail FROM uyeler WHERE uye_mail='".$_POST['mail']."'");  
$uyesayi=mysql_num_rows($uyesorgu); 
$mailsayi=mysql_num_rows($mailsorgu); 
if (!($uyesayi>0)){
if (!($mailsayi>0)){


$sifre=sha1($_POST['sifre1']);



$uyeekle = "INSERT INTO uyeler (uye_id,uye_ad, uye_sifre, uye_mail,uye_kayit) 
VALUES ('','".$_POST['ad']."', '".$sifre."', '".$_POST['mail']."s',now() )";

if (!mysql_query($uyeekle,$bag))
  {
  die('Err�r: ' . mysql_error());
  }else{
  echo"Sonunda ba�ard�n<br>uyesin lan art�k sevin bence.
  <br>bunlar� akl�nda tut bak unutma: kimseyede g�sterme s�yleme!<br><br>
  <b>kullanici adin:</b>$_POST[ad]<br>
  <b>Sifren:</b>$_POST[sifre1]<br>
  <b>mail adresin:</b>$_POST[mail]<br>
  <br><a href='index.php'>hade ben ana sayfaya gotur</a>
  ";
  
  }


 
 
}else{echo"sectigin mail var";}
}else{echo"sectigin kullanici adi var";}
}else{echo"kullan�c� ad�n �ifrene e�it olamaz";}
}else{echo"sifreler esit de�il be";}
}else{echo"mail adresini yamad�n�z";}
}else{echo"sifre tekrar�n� girmediniz";}
}else{echo"sifreyi girmediniz";}
}else{echo"adinizi girmediniz";}

?>
