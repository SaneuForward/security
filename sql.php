<?php
$query = "SELECT * FROM utilisateur WHERE login=".$_POST['login']." AND password=".$_POST[‘password’];
$result = mysql_query($query) ;
if (count(mysql_fetch_assoc($result)) > 0)
echo « Bravo vous avez reussi a bypass la securité ! »;
?>