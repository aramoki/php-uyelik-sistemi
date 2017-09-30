<?php
include"baglanti.php";

if($_POST['id'] == "" || $_POST['key'] == "") {
echo "Lütfen Tüm Alanlarý Doldurun";
}else{


$uyead = strip_tags(mysql_real_escape_string($_POST['id']));
$sifre = strip_tags(mysql_real_escape_string($_POST['key']));
$sifre = sha1($sifre);
$sql = mysql_query("select * from uyeler where  uye_ad='$uyead' and uye_sifre='$sifre'  ");
$uyevarmi = mysql_num_rows($sql);
if($uyevarmi == 0) {
echo "Üyelik bilgileri bulunamadý, tekrar deneyin";
} else {



$uyebilgi = mysql_fetch_array($sql);
$expire=time()+60*60*24*30;
setcookie("uyeid", "$uyebilgi[uye_id]", $expire);
setcookie("uyead", "$uyebilgi[uye_ad]", $expire);
setcookie("uyemail", "$uyebilgi[uye_mail]", $expire);





echo "<script>location.href='index.php';</script>"; // javascript yönlendirme kodu
} // if($uyevarmi == 0) kontrolü bitiþi
}//textbox post verileri içerik kontrolü

?>



