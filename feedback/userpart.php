<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo plugins_url();  ?>/feedback/css/plugin_style.css" />
  <script type="text/javascript" src="<?php echo plugins_url();  ?>/feedback/js/script.js"></script>
</head>
<body>
  <section id="mysection">
    <?php echo plugins_url();  ?>
<form action="" method="post">
	
<input type="text" name="txtname" id="txtname" placeholder="Enter Name" />
<br><br>
<input type="text" name="txtfeedto" id="txtfeedto" placeholder="Enter Feedback to" />
<br><br>
<input type="text" name="txtfeeddesc" id="txtfeeddesc" placeholder="Enter Description" />
<br><br>

<input type="submit" name="btnsubmit" value="submit" onclick="return validate()" />

</form>
</section>

<?php
 
 if(isset($_REQUEST['btnsubmit']))
 {
       global $wpdb;
       $charset_collate = $wpdb->get_charset_collate();
      $sql = "CREATE TABLE if not exists feedback (
  id int(9) NOT NULL AUTO_INCREMENT,
  feedto text not null,
  name text NOT NULL,
  des text NOT NULL,
  PRIMARY KEY  (id)
) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
$name = $_REQUEST['txtname'];
$feed = $_REQUEST['txtfeedto'];
$des = $_REQUEST['txtfeeddesc'];
$res=$wpdb->insert(
 'feedback',
 array(
  'name' => $name,
   'feedto' => $feed,
  'des' => $des,
  
 )
);
if($res)
echo "data inserted successfully";

}
 ?>
</body>
</html>