<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Welcome in Admin Part of Feedback</h1>

<?php
global $wpdb;
$res = $wpdb->get_results('select * from feedback');
foreach ($res as $x) {
 echo $x->id," ",$x->name," ",$x->des,"<hr>";
}

?>
</body>
</html>