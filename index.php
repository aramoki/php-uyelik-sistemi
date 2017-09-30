<?php
include"baglanti.php";




if(isset($_COOKIE['uyead']) and isset($_COOKIE['uyemail'])and isset($_COOKIE['uyeid'])){
echo" id:<b>".$_COOKIE['uyeid']."</b>";
echo" ad:<b>".$_COOKIE['uyead']."</b>";
echo" mail:<b>".$_COOKIE['uyemail']."</b>";
echo" <a href='cikis.php'>cikis</a>";
}else{

echo"<form method='post' action='giris.php'>
id:<input type='text' name='id' >
key:<input type='text' name='key'>
<input type='submit' value='giris yap'></form>";
echo" <a href='kayitform.php'>kayit ol</a>";
}
echo"<hr>";
?>