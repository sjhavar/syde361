<html>
<head></head>
<body class="page_bg">
<Input type = 'button' Name = 'button1' onclick = "<? test() ?>" Value = "Add box"/>
 
<?php
function test() {
//Get COM Port
$dbhost = "localhost";
$dbname = "kiosk_map";
$dbuser = "root";
$dbpass = "root";
$link = mysql_connect("$dbhost", "$dbuser", "$dbpass") or die (mysql_error());
mysql_select_db("$dbname") or die(mysql_error());

mysql_query("Insert ignore into states values (4, 'close')");

}
?>
</body>
</html>



