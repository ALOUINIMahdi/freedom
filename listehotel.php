<?php
// on se connecte à notre base
$base = mysql_connect ('serveur', 'login', 'pass');
mysql_select_db ('ma_base', $base) ;
?>
<html>
<head>
<title>liste hotel</title>
</head>
<body>
<?php
